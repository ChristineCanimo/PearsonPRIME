<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>

    <meta name="description" content="Common form elements and layouts" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/chosen.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/bootstrap-colorpicker.min.css" />
        

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo base_url()?>interviewassets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

 <body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
      <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
          <span class="sr-only">Toggle sidebar</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
          <a href="<?php echo base_url(); ?>index.php/adminforms/" class="navbar-brand">
            <small>
              <i class="fa fa-users"></i>
              PPS Manila
            </small>
          </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">

          <li class="purple dropdown-modal">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                <span class="badge badge-important"></span>
              </a>

              <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                <li class="dropdown-header">
                  <i class="ace-icon fa fa-exclamation-triangle"></i>
                  Notifications
                </li>

                <li class="dropdown-content">
                  <ul class="dropdown-menu dropdown-navbar navbar-pink">
                    <li>
                      <a href="<?php echo base_url(); ?>index.php/adminforms/referraltoday/">
                        <div class="clearfix">
                          <span class="pull-left">
                            <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                            Referral Incentives
                          </span>
                          <span class="pull-right badge badge-info"><?php foreach($cntreferrals as $cntreferral){?><?php echo $cntreferral->cntreferral;?><?php }?></span>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="<?php echo base_url(); ?>index.php/adminforms/assessing">
                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                        For Assessing
                        <span class="pull-right badge badge-info"><?php foreach($cntfinalintnotifs as $cntfinalintnotif){?><?php echo $cntfinalintnotif->cntfinalintnotif;?><?php }?></span>
                      </a>
                    </li>

                    <li>
                      <a href="<?php echo base_url(); ?>index.php/openforms/assessing">
                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                        For Final Interviews
                        <span class="pull-right badge badge-info"><?php foreach($cntmanageronlys as $cntmanageronly){?><?php echo $cntmanageronly->cntmanageronly;?><?php }?></span>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </li>

            <li class="light-blue dropdown-modal">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                
                <i class="fa fa-users nav-user-photo"></i>
                <span class="user-info">
                  <small>Welcome,</small>
                  <?php foreach($logs as $log){?>
                    <?php echo $log->First;?> <?php echo $log->Middle;?> <?php echo $log->Last;?><?php }?>
                </span>

                <i class="ace-icon fa fa-caret-down"></i>
              </a>

              <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-cog"></i>
                    Settings
                  </a>
                </li>

                <li>
                  <a href="profile.html">
                    <i class="ace-icon fa fa-user"></i>
                    Profile
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="<?php echo base_url(); ?>index.php/Login/logout">
                    <i class="ace-icon fa fa-power-off"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>

      <div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
        <script type="text/javascript">
          try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
          <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
              <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
              <i class="ace-icon fa fa-pencil"></i>
            </button> 

            <button class="btn btn-warning">
              <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
              <i class="ace-icon fa fa-cogs"></i>
            </button>
          </div>

          <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
          </div>
        </div><!-- /.sidebar-shortcuts -->

        
        <ul class="nav nav-list">

          <li class="hover">
            <a href="<?php echo base_url(); ?>index.php/adminforms/">
              <i class="menu-icon fa fa-tachometer"></i>
              <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="">
            <a href="<?php echo base_url(); ?>index.php/adminforms/aadmins">
              <i class="menu-icon fa fa-user"></i>
              <span class="menu-text"> Administrators </span>
            </a>
          </li>

          <li class="hover">
            <a href="<?php echo base_url(); ?>index.php/openforms/" class="dropdown-toggle">
              <i class="menu-icon fa fa-users"></i>
              <span class="menu-text"> Recruitment </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
              <li class="">
                <a href="<?php echo base_url(); ?>index.php/Interview/">
                  <i class="menu-icon fa fa-caret-right"></i>
                  New Applicant
                </a>

              <li class="hover">
                <a class="dropdown-toggle">
                  <i class="menu-icon fa fa-caret-right"></i>
                  For Interview
                </a>
                  <b class="arrow"></b>

                  <ul class="submenu">
                    <li class="">
                      <a href="<?php echo base_url(); ?>index.php/interviewprocess/">
                        For Initial Interview
                      </a>
                    </li>

                    <li class="">
                      <a href="<?php echo base_url(); ?>index.php/interviewprocess/aforfinal">
                        For Final Interview
                      </a>
                    </li>

                  </ul>

              </li>

              <li class="">
                <a href="<?php echo base_url(); ?>index.php/adminforms/assessing">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Pending Applicants
                </a>

                <b class="arrow"></b>
              </li>

              </li>
            </ul>
          </li>

          <li class="hover">
            <a href="" class="dropdown-toggle">
              <i class="menu-icon fa fa-list"></i>
              <span class="menu-text">
                Employee Records
              </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
              <li class="">
                <a href="<?php echo base_url(); ?>index.php/newhireforms/">
                  <i class="menu-icon fa fa-caret-right"></i>
                  New Hire Form
                </a>

                <b class="arrow"></b>
                 <li class="hover">
                <a class="dropdown-toggle" href="">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Record Management
                </a>

                <b class="arrow"></b>

                  <ul class="submenu">
                    <li class="">
                      <a href="<?php echo base_url(); ?>index.php/adminforms/arecord">
                        Active Employees
                      </a>
                    </li>

                    <li class="">
                      <a href="<?php echo base_url(); ?>index.php/adminforms/ainactive">
                        Inactive Employees (Terminated)
                      </a>
                    </li>
                  </ul>
              </li>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="<?php echo base_url(); ?>index.php/adminforms/ajobvacancy">
              <i class="menu-icon fa fa-check"></i>
              <span class="menu-text">Job Vacancy</span>
             </a>
          </li> 
          <li class="">
            <a href="<?php echo base_url(); ?>index.php/adminforms/rpayroll">
              <i class="menu-icon fa fa-signal"></i>
              <span class="menu-text">Tracker</span>
             </a>
            
          </li> 

          <li class="">
            <a href="<?php echo base_url(); ?>index.php/adminforms/acalendar">
              <i class="menu-icon fa fa-calendar"></i>

              <span class="menu-text">
                Calendar of Activities
                  <b class="arrow"></b>
                      </span>
            </a>

            <b class="arrow"></b>
          </li>

          <li class="hover">
            <a href="#" class="dropdown-toggle">
              <i class="menu-icon fa fa-file-o"></i>

              <span class="menu-text">
                How To Use

                <span class="badge badge-primary"></span>
              </span>

              <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
              <li class="">
                <a href="faq">
                  <i class="menu-icon fa fa-caret-right"></i>
                  FAQ
                </a>

                <b class="arrow"></b>
              </li>

              <li class="">
                <a href="about">
                  <i class="menu-icon fa fa-caret-right"></i>
                  About
                </a>

                <b class="arrow"></b>
              </li>

            </ul>
          </li>
        </ul>

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
      </div>

      <div class="main-content">
        <div class="main-content-inner">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Admin Dashboard</a>
              </li>
              <li>
                My Gallery
              </li>
              
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
              
            </div><!-- /.nav-search -->
          </div>

          <div class="page-content">
            <!--/ .can add other functions here-->

            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
               <div class="tabbable">
                  <ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
                    <li class="active">
                      <a data-toggle="tab" href="#faq-tab-1">
                        <i class="blue ace-icon fa fa-question-circle bigger-120"></i>
                        General
                      </a>
                    </li>

                    <li>
                      <a data-toggle="tab" href="#faq-tab-2">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Account
                      </a>
                    </li>

                    <li>
                      <a data-toggle="tab" href="#faq-tab-3">
                        <i class="orange ace-icon fa fa-credit-card bigger-120"></i>
                        Payments
                      </a>
                    </li>

                    
                  </ul>

                  <div class="tab-content no-border padding-24">
                    <div id="faq-tab-1" class="tab-pane fade in active">
                      <h4 class="blue">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        General Questions
                      </h4>

                      <div class="space-8"></div>

                      <div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-1-1" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                              <i class="ace-icon fa fa-user bigger-130"></i>
                              &nbsp; High life accusamus terry richardson ad squid?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-1-1">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-1-2" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                              <i class="ace-icon fa fa-sort-amount-desc"></i>
                              &nbsp; Can I have nested questions?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-1-2">
                            <div class="panel-body">
                              <div id="faq-list-nested-1" class="panel-group accordion-style1 accordion-style2">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <a href="#faq-list-1-sub-1" data-parent="#faq-list-nested-1" data-toggle="collapse" class="accordion-toggle collapsed">
                                      <i class="ace-icon fa fa-plus smaller-80 middle" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
                     Enim eiusmod high life accusamus terry?
                                    </a>
                                  </div>

                                  <div class="panel-collapse collapse" id="faq-list-1-sub-1">
                                    <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                  </div>
                                </div>

                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <a href="#faq-list-1-sub-2" data-parent="#faq-list-nested-1" data-toggle="collapse" class="accordion-toggle collapsed">
                                      <i class="ace-icon fa fa-plus smaller-80 middle" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
                    Food truck quinoa nesciunt laborum eiusmod?
                                    </a>
                                  </div>

                                  <div class="panel-collapse collapse" id="faq-list-1-sub-2">
                                    <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                  </div>
                                </div>

                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <a href="#faq-list-1-sub-3" data-parent="#faq-list-nested-1" data-toggle="collapse" class="accordion-toggle collapsed">
                                      <i class="ace-icon fa fa-plus smaller-80 middle" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
                    Cupidatat skateboard dolor brunch?
                                    </a>
                                  </div>

                                  <div class="panel-collapse collapse" id="faq-list-1-sub-3">
                                    <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-1-3" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                              <i class="ace-icon fa fa-credit-card bigger-130"></i>
                              &nbsp; Single-origin coffee nulla assumenda shoreditch et?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-1-3">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-1-4" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                              <i class="ace-icon fa fa-files-o bigger-130"></i>
                              &nbsp; Sunt aliqua put a bird on it squid?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-1-4">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-1-5" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

                              <i class="ace-icon fa fa-cog bigger-130"></i>
                              &nbsp; Brunch 3 wolf moon tempor sunt aliqua put?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-1-5">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="faq-tab-2" class="tab-pane fade">
                      <h4 class="blue">
                        <i class="green ace-icon fa fa-user bigger-110"></i>
                        Account Questions
                      </h4>

                      <div class="space-8"></div>

                      <div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-2-1" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
            Enim eiusmod high life accusamus terry richardson?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-2-1">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-2-2" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
            Single-origin coffee nulla assumenda shoreditch et?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-2-2">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-2-3" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-right middle smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
            Sunt aliqua put a bird on it squid?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-2-3">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-2-4" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
            Brunch 3 wolf moon tempor sunt aliqua put?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-2-4">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="faq-tab-3" class="tab-pane fade">
                      <h4 class="blue">
                        <i class="orange ace-icon fa fa-credit-card bigger-110"></i>
                        Payment Questions
                      </h4>

                      <div class="space-8"></div>

                      <div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-3-1" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
            Enim eiusmod high life accusamus terry richardson?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-3-1">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-3-2" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
            Single-origin coffee nulla assumenda shoreditch et?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-3-2">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-3-3" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
            Sunt aliqua put a bird on it squid?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-3-3">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <a href="#faq-3-4" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
                              <i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
            Brunch 3 wolf moon tempor sunt aliqua put?
                            </a>
                          </div>

                          <div class="panel-collapse collapse" id="faq-3-4">
                            <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    
                </div>

                  <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->

      <div class="footer">
        <div class="footer-inner">
          <div class="footer-content">
            <span class="bigger-120">
              <span class="blue bolder">Pearson</span>
              &copy; 2017-2018
            </span>

            
          </div>
        </div>
      </div>

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    </div><!-- /.main-container -->


        <div class="modal" id="goback" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: red">Warning</h4>
        </div>

        <div class="modal-body">
          Are you sure you want to go back without submitting the form? You might lose the data you entered.
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url(); ?>index.php/Interview/backeduc" class="btn btn-primary">Yes</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>


        <div class="modal" id="cancel" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: red">Warning</h4>
        </div>

        <div class="modal-body">
          Are you sure you want to cancel all your progress? You might lose all the data you entered.

          <form action="<?php echo base_url(); ?>index.php/Interview/cancel" method="post">

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Yes</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        </form>
        </div>
      </div>
    </div>
  </div>

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <script>
        function pass() {
            var x = document.getElementById("mypass");
            var y = document.getElementById("myfail");
            if (x.style.display === "none") {
                x.style.display = "block";
            }
        }

        function fail() {
            var x = document.getElementById("mypass");
            var y = document.getElementById("myfail");
            if (x.style.display === "block") {
                x.style.display = "none";
            }
        }
        </script>
    <!--[if !IE]> -->
    <script src="<?php echo base_url()?>interviewassets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()?>interviewassets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="<?php echo base_url()?>interviewassets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="<?php echo base_url()?>interviewassets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/dataTables.select.min.js"></script> 

    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url()?>interviewassets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/spinbox.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/moment.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/daterangepicker.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery.knob.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/autosize.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery.inputlimiter.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/bootstrap-tag.min.js"></script>

    <!-- ace scripts -->
    <script src="<?php echo base_url()?>interviewassets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    
  </body>
</html>