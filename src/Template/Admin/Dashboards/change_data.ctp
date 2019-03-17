<style>
    .widget-small-tag{
        font-size: 13px;
        font-weight: 600;
        color: #8e9daa;
    }
    .widget-thumb-body-stat{
        font-size: 24px !important;
    }
    .widget-row h4{
        font-weight: 600;
    }
</style> 
<div class="row widget-row">
    <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Institutes', 'action' => 'index']) ?>" >SCHOOLS</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-green  icon-graduation"></i>
                <div class="widget-thumb-body">
                    <small class="widget-small-tag">Active : <?= $data['schools']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['schools']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['schools']['total']; ?>">Total : <?= $data['schools']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
     <!--<div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Faculties', 'action' => 'index']) ?>" >FACULTIES</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-red icon-users"></i>
                <div class="widget-thumb-body">
                    <small class="widget-small-tag">Active : <?= $data['faculties']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['faculties']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['faculties']['total']; ?>">Total : <?= $data['faculties']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
   <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4> <a href="<?= $this->Url->build(['controller' => 'Announcements', 'action' => 'index']) ?>" >ANNOUNCEMENT</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-purple glyphicon glyphicon-bullhorn"></i>
                <div class="widget-thumb-body">
                   <small class="widget-small-tag">Active : <?= $data['announcements']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['announcements']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['announcements']['total']; ?>">Total : <?= $data['announcements']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>-->
    <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Banners', 'action' => 'index']) ?>">BANNERS</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-blue icon-layers"></i>
                <div class="widget-thumb-body">
                   <small class="widget-small-tag">Active : <?= $data['banners']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['banners']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['banners']['total']; ?>">Total : <?= $data['banners']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Downloads', 'action' => 'index']) ?>" >DOWNLOADS</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-green icon-cloud-download"></i>
                <div class="widget-thumb-body">
                    <small class="widget-small-tag">Active : <?= $data['downloads']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['downloads']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['downloads']['total']; ?>">Total : <?= $data['downloads']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'index']) ?>" >PAGES</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-red icon-docs"></i>
                <div class="widget-thumb-body">
                    <small class="widget-small-tag">Active : <?= $data['pages']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['pages']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['pages']['total']; ?>">Total : <?= $data['pages']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row widget-row">
	<div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4> <a href="<?= $this->Url->build(['controller' => 'Placements', 'action' => 'index']) ?>" >Placements</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-purple icon-bell"></i>
                <div class="widget-thumb-body">
                   <small class="widget-small-tag">Active : <?= $data['placement']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['placement']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['placement']['total']; ?>">Total : <?= $data['placement']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4> <a href="<?= $this->Url->build(['controller' => 'News', 'action' => 'index']) ?>" >News</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-blue icon-grid"></i>
                <div class="widget-thumb-body">
                   <small class="widget-small-tag">Active : <?= $data['news']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['news']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['news']['total']; ?>">Total : <?= $data['news']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Events', 'action' => 'index']) ?>">Events</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-blue icon-grid"></i>
                <div class="widget-thumb-body">
                   <small class="widget-small-tag">Active : <?= $data['events']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['events']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['events']['total']; ?>">Total : <?= $data['events']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>-->
<div class="row widget-row">
    <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Courses', 'action' => 'index']) ?>" >Courses</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-green icon-docs"></i>
                <div class="widget-thumb-body">
                    <small class="widget-small-tag">Active : <?= $data['courses']['active']; ?></small>
                    <small class="widget-small-tag">InActive : <?= $data['courses']['inactive']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['courses']['total']; ?>">Total : <?= $data['courses']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'Enquiries', 'action' => 'index']) ?>" >Enquiries</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-red icon-layers"></i>
                <div class="widget-thumb-body">
                    <small class="widget-small-tag">View : <?= $data['enquiries']['open']; ?></small>
                    <small class="widget-small-tag">Pending : <?= $data['enquiries']['close']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['enquiries']['total']; ?>">Total : <?= $data['enquiries']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
	
</div>
<div class="row widget-row">
    <!--<div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4> <a href="<?= $this->Url->build(['controller' => 'JobApplicants', 'action' => 'index']) ?>" >Job Applicants</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-purple glyphicon glyphicon-book"></i>
                <div class="widget-thumb-body">
                   <small class="widget-small-tag">View : <?= $data['job_applicants']['open']; ?></small>
                    <small class="widget-small-tag">Pending : <?= $data['job_applicants']['close']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['job_applicants']['total']; ?>">Total : <?= $data['job_applicants']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
            <h4><a href="<?= $this->Url->build(['controller' => 'AdmissionApplicants', 'action' => 'index']) ?>">Admission Applicants</a></h4>
            <div class="widget-thumb-wrap">
                <i class="widget-thumb-icon bg-blue icon-grid"></i>
                <div class="widget-thumb-body">
                   <small class="widget-small-tag">New : <?= $data['admission_applicants']['new']; ?></small>
                    <small class="widget-small-tag">Pending : <?= $data['admission_applicants']['pending']; ?></small>
                    <small class="widget-small-tag">Approved : <?= $data['admission_applicants']['approve']; ?></small>
                    <small class="widget-small-tag">Rejected : <?= $data['admission_applicants']['reject']; ?></small>
                    <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?= $data['admission_applicants']['total']; ?>">Total : <?= $data['admission_applicants']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>-->
</div>
