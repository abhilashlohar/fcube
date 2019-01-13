<!DOCTYPE html>
<!-- 
Author: Abhilash Lohar
Contact: abhilashlohar01@gmail.com
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo @$title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<?php echo $this->Html->css('/assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/uniform/css/uniform.default.css'); ?>
<?php echo $this->Html->css('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>
<?php echo $this->Html->css('/css/custom_css_fcube.css'); ?>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<?= $this->fetch('PAGE_LEVEL_CSS')?>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<?php echo $this->Html->css('/assets/global/css/components.css'); ?>
<?php echo $this->Html->css('/assets/global/css/plugins.css'); ?>
<?php echo $this->Html->css('/assets/admin/layout2/css/layout.css'); ?>
<?php echo $this->Html->css('/assets/admin/layout/css/themes/darkblue.css'); ?>
<?php echo $this->Html->css('/assets/admin/layout/css/custom.css'); ?>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo" style="padding-top: 12px; font-size: 20px;">
            <!-- <a href="javascript:void()" onclick="openNav()" style="padding: 0px 9px 0px 0px;">
                <i class="fa fa-bars" style="color: #3e3e3e;font-size: 22px;"></i>
            </a> -->
            <a href="javascript:void()" style="text-decoration: none;">
                <span style="color: #373435;">LOGO</span>
            </a>
        </div>
        <!-- END LOGO -->
        
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"  data-close-others="true" >
                    <img alt="" class="img-circle" src="<?php echo $this->request->getAttribute("webroot"); ?>/assets/admin/layout/img/avatar3_small.jpg"/>
                    <span class="username username-hide-on-mobile" style="color: #000;">
                    Admin </span>
                    <i class="fa fa-caret-down" style="color: #000;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="extra_profile.html">
                            <i class="icon-user"></i> Settings </a>
                        </li>
                        <li>
                            <a href="login.html">
                            <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <br/>
                    <li class="start">
                        <a href="<?php echo $this->request->getAttribute("webroot"); ?>dashboard">
                            <img src="<?php echo $this->request->getAttribute("webroot"); ?>/img/dashboard.png" style="height: 40px;" />
                            <span class="title" style=" font-size: 14px; font-weight: 600; ">Dashboard</span>
                        </a>
                    </li>
                    <li class="start">
                        <a href="<?php echo $this->request->getAttribute("webroot"); ?>users/add">
                            <img src="<?php echo $this->request->getAttribute("webroot"); ?>img/user.png" style="height: 40px;" />
                            <span class="title" style=" font-size: 14px; font-weight: 600; ">Users</span>
                        </a>
                    </li>
                    <li class="start">
                        <a href="<?php echo $this->request->getAttribute("webroot"); ?>reports">
                            <img src="<?php echo $this->request->getAttribute("webroot"); ?>/img/reports.png" style="height: 40px;" />
                            <span class="title" style=" font-size: 14px; font-weight: 600; ">Reports</span>
                        </a>
                    </li>
                    <li class="start">
                        <a href="<?php echo $this->request->getAttribute("webroot"); ?>games">
                            <img src="<?php echo $this->request->getAttribute("webroot"); ?>/img/games.png" style="height: 40px;" />
                            <span class="title" style=" font-size: 14px; font-weight: 600; ">Games</span>
                        </a>
                    </li>
                    <li class="start">
                        <a href="<?php echo $this->request->getAttribute("webroot"); ?>batch">
                            <img src="<?php echo $this->request->getAttribute("webroot"); ?>/img/batch.png" style="height: 40px;" />
                            <span class="title" style=" font-size: 14px; font-weight: 600; ">Batch</span>
                        </a>
                    </li>
                    <!-- <li class="start">
                        <a href="index.html">
                            <img src="<?php echo $this-> request->getAttribute("webroot"); ?>/img/logout.png" style="height: 40px;" />
                            <span class="title" style=" font-size: 14px; font-weight: 600; ">Logout</span>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:;">
                        <i class="icon-basket"></i>
                        <span class="title">eCommerce</span>
                        <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ecommerce_index.html">
                                <i class="icon-home"></i>
                                Dashboard</a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html">
                                <i class="icon-basket"></i>
                                Orders</a>
                            </li>
                            <li>
                                <a href="ecommerce_orders_view.html">
                                <i class="icon-tag"></i>
                                Order View</a>
                            </li>
                            <li>
                                <a href="ecommerce_products.html">
                                <i class="icon-handbag"></i>
                                Products</a>
                            </li>
                            <li>
                                <a href="ecommerce_products_edit.html">
                                <i class="icon-pencil"></i>
                                Product Edit</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        Developed with proud by F-Cube.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<?php echo $this->Html->script('/assets/global/plugins/jquery.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/jquery-migrate.min.js'); ?>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php echo $this->Html->script('/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/jquery.blockui.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/jquery.cokie.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/uniform/jquery.uniform.min.js'); ?>
<?php echo $this->Html->script('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?= $this->fetch('PAGE_LEVEL_PLUGINS')?>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?= $this->fetch('PAGE_LEVEL_SCRIPTS')?>
<!-- END PAGE LEVEL SCRIPTS -->
<?php echo $this->Html->script('/assets/global/scripts/metronic.js'); ?>
<?php echo $this->Html->script('/assets/admin/layout/scripts/layout.js'); ?>
<script>
    jQuery(document).ready(function() {    
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
    });
</script>
<?= $this->fetch('scriptBottom')?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>