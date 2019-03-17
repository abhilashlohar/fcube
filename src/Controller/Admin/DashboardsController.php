<?php
/**
 * @author: Sonia Solanki
 * @date: Nov 01, 2018
 * @version: 1.0.0
 */
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Utility\Hash;

class DashboardsController extends AppController
{
    public function index()
    {
        $this->set('page_title', 'Dashboard');
        $this->set('activeMenu', 'Admin.Dashboards.index');
    }
    
    public function changeData(){
        $this->set('page_title', 'Dashboard');
        if($this->request->is('post')){
            $start_date = $this->request->getData('start_date');
            $end_date = $this->request->getData('end_date');
            if($start_date=='' && $end_date==''){
                $condition = '';
                $condition1 = '';
            }else{
                $condition = ['DATE(created) >=' => $start_date,'DATE(created) <=' => $end_date];
                $condition1 = ['DATE(AdmissionApplicants.created) >=' => $start_date,'DATE(AdmissionApplicants.created) <=' => $end_date];
            }
        }else{
            $condition = '';
            $condition1 = '';
        }
        /// School Count
        $this->loadModel('Institutes');
        $schools = $this->Institutes->find()
                ->select(['id','status'])
                ->where(['Institutes.is_deleted' => false ,'Institutes.is_hidden' => false])
                ->andWhere($condition)->toArray();
        $active = 0;
        $inactive = 0;
        foreach($schools as $school){
            if($school['status']==1){
                $active++;
            }
            if($school['status']==0){
                $inactive++;
            }
        }
        $data['schools']['active'] = $active;
        $data['schools']['inactive'] = $inactive;
        $data['schools']['total'] = sizeof($schools);
        
        // Faculties Count
        $this->loadModel('Faculties');
        $faculties = $this->Faculties->find()
                ->select(['id','status'])
                ->where(['Faculties.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($faculties as $faculty){
            if($faculty['status']==1){
                $active++;
            }
            if($faculty['status']==0){
                $inactive++;
            }
        }
        $data['faculties']['active'] = $active;
        $data['faculties']['inactive'] = $inactive;
        $data['faculties']['total'] = sizeof($faculties);
        
        // Anouncement count
        $this->loadModel('Announcements');
        $announcements = $this->Announcements->find()
                ->select(['id','status'])
                ->where(['Announcements.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($announcements as $announcement){
            if($announcement['status']==1){
                $active++;
            }
            if($announcement['status']==0){
                $inactive++;
            }
        }
        $data['announcements']['active'] = $active;
        $data['announcements']['inactive'] = $inactive;
        $data['announcements']['total'] = sizeof($announcements);
        
        
        // Banners count
        $this->loadModel('Banners');
        $banners = $this->Banners->find()
                ->select(['id','status'])
                ->where(['Banners.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($banners as $banner){
            if($banner['status']==1){
                $active++;
            }
            if($banner['status']==0){
                $inactive++;
            }
        }
        $data['banners']['active'] = $active;
        $data['banners']['inactive'] = $inactive;
        $data['banners']['total'] = sizeof($banners);
        
        // Downloads
        $this->loadModel('Downloads');
        $downloads = $this->Downloads->find()
                ->select(['id','status'])
                ->where(['Downloads.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($downloads as $download){
            if($download['status']==1){
                $active++;
            }
            if($download['status']==0){
                $inactive++;
            }
        }
        $data['downloads']['active'] = $active;
        $data['downloads']['inactive'] = $inactive;
        $data['downloads']['total'] = sizeof($downloads);
        
        // Pages count
        $this->loadModel('Pages');
        $pages = $this->Pages->find()
                ->select(['id','status'])
                ->where(['Pages.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($pages as $page){
            if($page['status']==1){
                $active++;
            }
            if($page['status']==0){
                $inactive++;
            }
        }
        $data['pages']['active'] = $active;
        $data['pages']['inactive'] = $inactive;
        $data['pages']['total'] = sizeof($pages);
        
        // News count
        $this->loadModel('News');
        $news = $this->News->find()
                ->select(['id','status'])
                ->where(['News.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($news as $news_l){
            if($news_l['status']==1){
                $active++;
            }
            if($news_l['status']==0){
                $inactive++;
            }
        }
        $data['news']['active'] = $active;
        $data['news']['inactive'] = $inactive;
        $data['news']['total'] = sizeof($news);
        
        // Events
        $this->loadModel('Events');
        $events = $this->Events->find()
                ->select(['id','status'])
                ->where(['Events.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($events as $event){
            if($event['status']==1){
                $active++;
            }
            if($event['status']==0){
                $inactive++;
            }
        }
        $data['events']['active'] = $active;
        $data['events']['inactive'] = $inactive;
        $data['events']['total'] = sizeof($events);
        
        // Courses count
        $this->loadModel('Courses');
        $courses = $this->Courses->find()
                ->select(['id','status'])
                ->where(['Courses.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $active = 0;
        $inactive = 0;
        foreach($courses as $course){
            if($course['status']==1){
                $active++;
            }
            if($course['status']==0){
                $inactive++;
            }
        }
        $data['courses']['active'] = $active;
        $data['courses']['inactive'] = $inactive;
        $data['courses']['total'] = sizeof($courses);
        
        // Enquiry count
        $this->loadModel('Enquiries');
        $enquiries = $this->Enquiries->find()
                ->select(['id','open'])
                ->where(['Enquiries.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $open = 0;
        $close = 0;
        foreach($enquiries as $enquiry){
            if($enquiry['open']==1){
                $open++;
            }
            if($enquiry['open']==0){
                $close++;
            }
        }
        $data['enquiries']['open'] = $open;
        $data['enquiries']['close'] = $close;
        $data['enquiries']['total'] = sizeof($enquiries);
        
        // Job Applicants count
        $this->loadModel('JobApplicants');
        $job_applicants = $this->JobApplicants->find()
                ->select(['id','view'])
                ->where(['JobApplicants.is_deleted' => false])
                ->andWhere($condition)
                ->toArray();
        $open = 0;
        $close = 0;
        foreach($job_applicants as $job_applicant){
            if($job_applicant['view']==1){
                $open++;
            }
            if($job_applicant['view']==0){
                $close++;
            }
        }
        $data['job_applicants']['open'] = $open;
        $data['job_applicants']['close'] = $close;
        $data['job_applicants']['total'] = sizeof($job_applicants);
        
        // Admission applicant count
        $this->loadModel('AdmissionApplicants');
        $admission_applicants = $this->AdmissionApplicants->find()
                ->contain(['Courses'])
                ->select(['id','status'])
                ->where(['Courses.is_deleted' => false,'Courses.status' => true])
                ->andWhere($condition1)
                ->toArray();
        $new = 0;
        $pending = 0;
        $approve = 0;
        $reject = 0;
        foreach($admission_applicants as $admission_applicant){
            if($admission_applicant['status']=='New'){
                $new++;
            }
            if($admission_applicant['status']=='Pending'){
                $pending++;
            }
            if($admission_applicant['status']=='Approve'){
                $approve++;
            }
            if($admission_applicant['status']=='Reject'){
                $reject++;
            }
        }
        $data['admission_applicants']['new'] = $new;
        $data['admission_applicants']['pending'] = $pending;
        $data['admission_applicants']['approve'] = $approve;
        $data['admission_applicants']['reject'] = $reject;
        $data['admission_applicants']['total'] = sizeof($admission_applicants);
        
		/// Placement
        $this->loadModel('placements');
        $placements = $this->placements->find()
                ->select(['id','status'])
                ->where(['placements.is_deleted' => false])
                ->andWhere($condition)->toArray();
        $active = 0;
        $inactive = 0;
        foreach($placements as $placement){
            if($placement['status']==1){
                $active++;
            }
            if($placement['status']==0){
                $inactive++;
            }
        }
        $data['placement']['active'] = $active;
        $data['placement']['inactive'] = $inactive;
        $data['placement']['total'] = sizeof($placements);
		
        $this->set(compact('data'));
    }
}
