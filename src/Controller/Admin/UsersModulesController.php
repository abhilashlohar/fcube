<?php
/**
 * @author: Sonia Solanki
 * @date:  Sep 01, 2018
 * @version: 1.0.0
 */
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Network\Exception\MethodNotAllowedException;
use Cake\Network\Exception\NotFoundException;
use Cake\I18n\Time;
use Cake\Utility\Hash;

class UsersModulesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        
        if(!$this->userAuthorized())
        {
            $this->Flash->error(__('You are not authorized to access that location.'));
            return $this->redirect(['controller' => 'Dashboards', 'action' => 'index']);
        }
    }
    
    public function index()
    {
       $this->set('page_title', __('User Rights'));
       $this->loadModel('UsersModules');
       $this->loadModel('UsersInstitutes');
       $usermodule = $this->UsersModules->newEntity();
       $userinstitute = $this->UsersInstitutes->newEntity();
        if($this->request->is('post'))
        {  
            $insert_array = Hash::insert($this->request->getData('users_modules'), '{n}.user_id', $this->request->getData('user_ids'));
            $usermodule = $this->UsersModules->patchEntities($usermodule, $insert_array);
         
            if($this->UsersModules->saveMany($usermodule))
            {
                $this->UsersInstitutes->deleteAll(['UsersInstitutes.user_id' => $this->request->getData('user_ids')]);
                if(!empty($this->request->getData('institutes'))){
                    $insert_sc_arr = Hash::insert($this->request->getData('institutes'), '{n}.user_id', $this->request->getData('user_ids'));
                    $userinstitute = $this->UsersInstitutes->patchEntities($userinstitute, $insert_sc_arr);
                    $this->UsersInstitutes->saveMany($userinstitute);
                }
                $this->Flash->success(__('Data has been added successfully.'));
                return $this->redirect(['action' => 'index']);
            }
            else{
                 $this->Flash->error(__('Data could not be added. Please see warning(s) below.'));
            }
        }
        
        $users = $this->UsersModules->Users->find('list')
                ->select(['id','name','status'])
                ->where(['Users.is_deleted' => false,'Users.is_system' => false,'Users.role !=' => 'Student'])
                ->order(['Users.name' => 'ASC']);
        
        $modules = $this->UsersModules->Modules->find('list')
                ->select(['id','name','status'])
                ->order(['Modules.name' => 'ASC']);
       $institutes = $this->UsersModules->Users->Institutes->find('list')
            ->where(['Institutes.status' => true,'Institutes.is_deleted' => false]);
       
        $this->set(compact('users','usermodule','modules','institutes'));
        $this->set('activeMenu', 'Admin.UsersModules.index');
    }
    
    public function fillModules()
    {
        try
        {
            if(!$this->request->is('ajax'))
            {
                throw new BadRequestException();
            }
        }
        catch(BadRequestException $e)
        {
            $this->Flash->error(__('Only ajax request can be processed.'));
            return $this->redirect($this->_redirectUrl());
        }
        $this->loadModel('UsersModules');
//        
//        $user_module = $this->UsersModules->find()
//                ->where(['UsersModules.user_id' => $this->request->getData('user_id')]);
        $modules = $this->UsersModules->Modules->find()
                ->contain(['UsersModules' => 
                    [
                        'fields' => ['module_id','user_id','m_add','m_edit','m_view','m_delete'],
                        'conditions' => ['UsersModules.user_id' => $this->request->getData('user_id')]
                    ]])
                ->select(['id','name','status'])
                ->order(['Modules.name' => 'ASC'])->toArray();
      
        $this->set(compact('modules'));
    }
    public function fillInstitutes()
    {
        $this->autoRender = false;
        try
        {
            if(!$this->request->is('ajax'))
            {
                throw new BadRequestException();
            }
        }
        catch(BadRequestException $e)
        {
            $this->Flash->error(__('Only ajax request can be processed.'));
            return $this->redirect($this->_redirectUrl());
        }
        $this->loadModel('UsersInstitutes');
        $institutes = $this->UsersInstitutes->Users->Institutes->find('list')
            ->where(['Institutes.status' => true,'Institutes.is_deleted' => false]);
        
        $instituteslist = $this->UsersInstitutes->find('list',[
                'keyField' => 'institute_id','valueField' => 'institute_id'
            ])
            ->where(['UsersInstitutes.user_id' => $this->request->getData('user_id')])->toArray();
        if(!empty($instituteslist)){
            $selected = $this->UsersInstitutes->Users->Institutes->find('list')
            ->where(['Institutes.status' => true,'Institutes.is_deleted' => false,'Institutes.id IN ' => $instituteslist])
                    ->toArray();
        }else{
            $selected = [];
        }
       // $this->set(compact('institutes','selected'));
        echo json_encode($selected);
    }
}
