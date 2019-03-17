<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Filesystem\File;
use Cake\I18n\Time;
use Cake\Network\Exception\MethodNotAllowedException;
use Cake\Network\Exception\NotFoundException;

class DashboardController extends AppController
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
        
    }

    public function reports()
    {
        
    }

    public function games()
    {
        
    }

    public function batch()
    {
        
    }

}
