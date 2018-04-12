<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Pearson People Services</title>

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
                <a href="homepage">Home</a>
              </li>
              <li class="">Recruitment</li>
              <li class="active">New Hire</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
              
            </div><!-- /.nav-search -->
          </div>

          <div class="page-content">
            <!--/ .can add other functions here-->

            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
<?php  
 $connect = mysqli_connect("localhost", "root", "", "login");  
 $query ="SELECT * FROM employees WHERE usertype = 'admin'";  
 $result = mysqli_query($connect, $query);  
 ?>  

                <div class="row">
                  <div class="col-sm-5">
                    <div class="tabbable tabs-left">
                      <ul class="nav nav-tabs" id="myTab3">
                        <li class="active">
                          <a data-toggle="tab" href="#home3">
                            <i class="pink ace-icon fa fa-tachometer bigger-110"></i>
                            Initial Interview
                          </a>
                        </li>

                        <li>
                          <a data-toggle="tab" href="#profile3">
                            <i class="blue ace-icon fa fa-user bigger-110"></i>
                            Final Interview
                          </a>
                        </li>

                      </ul>

                      <div class="tab-content">
                        <div id="home3" class="tab-pane in active">
                          <div style="padding: 8px;"><?php foreach($records as $record){?>
                                        <h5 class="widget-title blue"><b>Initial Interview Information</b></h5>
                                    </div>
                                 
                                      <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Position Desired : </label>
                                      <?php echo $record->Desired;?>
                                    </div>

                                      <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Referred By : </label>

                                      <?php echo $record->ReferredBy;?>
                                    </div>

                            <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-9">Initial Interviewer : </label>
                                      <?php echo $record->Interviewer;?>
                            </div>

                            <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Comments : </label>
                              <?php echo $record->Comments;?>
                            </div>
                            
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Result: </label>
                                  <?php echo $record->Result;?>
                                  </div>
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Assigned Department : </label>
                                  <?php echo $record->DepartmentName;?>
                                  </div>
                                    
                                   
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Assigned Manager : </label>
                                  <?php echo $record->Manager;?>
                                  </div>
                                    
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Assigned Position : </label>
                                  <?php echo $record->AssignedPosition;?>
                                  </div>

                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Date of Interview : </label>
                                  <?php echo $record->date_added;?><?php }?>
                              </div>

                        </div>

                        <div id="profile3" class="tab-pane">
                          <div style="padding: 8px;"><?php foreach($newhires as $newhire){?>
                                        <h5 class="widget-title blue"><b>Final Interview Information</b></h5>
                                    </div>
                                 
                                      <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Position Desired : </label>
                                      <?php echo $newhire->Desired;?>
                                    </div>

                                      <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Referred By : </label>

                                      <?php echo $newhire->ReferredBy;?>
                                    </div>

                            <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-9">Final Interviewer : </label>
                                      <?php echo $newhire->Finalinterviewer;?>
                            </div>

                            <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Comments : </label>
                              <?php echo $newhire->Comment;?>
                            </div>
                            
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Result: </label>
                                  <?php echo $newhire->FinalResult;?>
                                  </div>
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Assigned Department : </label>
                                  <?php echo $newhire->DepartmentName;?>
                                  </div>
                                    
                                   
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Assigned Manager : </label>
                                  <?php echo $newhire->Manager;?>
                                  </div>
                                    
                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Assigned Position : </label>
                                  <?php echo $newhire->AssignedPosition;?>
                                  </div>

                              <div style="padding: 8px;">
                              <label style="float: ;" for="form-field-8">Date of Interview : </label>
                                  <?php echo $newhire->date_added;?><?php }?>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.col -->

                  <div class="vspace-4-sm"></div>

                  <div class="col-sm-7">
                    <div class="page-header">
              <h1>
                <b>New Hire Form</b>
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  Please enter your all needed information to process new hire.
                </small>
              </h1>
            </div>
                    <!-- div.table-responsive -->

<?php  
 $earliest_year = "1950";
 $connect = mysqli_connect("localhost", "root", "", "login");  
 $Department ="SELECT * FROM `department`";  
 $result = mysqli_query($connect, $Department);  
 
 $referrals ="SELECT * FROM `referrals`";  
 $result2 = mysqli_query($connect, $referrals);  

 ?>                    <!-- div.dataTables_borderWrap -->
              <ul id="progressbar main-content-inner">
                 <?php foreach($newhires as $newhire){?>
                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/adminforms/addnewhire" method="post">

                  <h4><b>Personal Information:</b></h4>
                  <br>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Username: </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="Enter username" name="Username" class="col-xs-10 col-sm-5" required value=""/>

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Password: </b></label>

                    <div class="col-sm-10">
                      <input type="password" id="form-field-1" placeholder="Enter password" name="Password" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> First Name: </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="First Name" name="First" class="col-xs-10 col-sm-5" value ="<?php echo $newhire->FirstName;?>" required/>
                      <input type="hidden" id="form-field-1" placeholder="First Name" name="AppNumber" class="col-xs-10 col-sm-5" value ="<?php echo $newhire->ApplicantNumber;?>" required/>
                      <input type="hidden" id="form-field-1" placeholder="First Name" name="FullName" class="col-xs-10 col-sm-5" value ="<?php echo $newhire->FirstName;?> <?php echo $newhire->LastName;?>" required/>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Middle Name: </b></label>

                    <div class="col-sm-10">
                      <input type="text" value ="<?php echo $newhire->MiddleName;?>" id="form-field-1" placeholder="Middle Name" name="Middle" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Last Name: </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" value ="<?php echo $newhire->LastName;?>" placeholder="Last Name" name="Last" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Address Line: </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="House No, Street, Barangay" name="EAddressLine" class="col-xs-10 col-sm-5" value ="<?php echo $newhire->AddressLine;?>" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> City Address: </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" value ="<?php echo $newhire->City;?>" placeholder="City" name="ECity" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Email Address: </b></label>

                    <div class="col-sm-10">
                      <input type="email" id="form-field-1" placeholder="Email Address" value ="<?php echo $newhire->Email;?>" name="EEmail" class="col-xs-10 col-sm-5" required/>
                      <input type="hidden" id="form-field-1" placeholder="Email Address" name="WorkEmail" class="col-xs-10 col-sm-5" value="<?php echo $newhire->FirstName;?>.<?php echo $newhire->LastName;?>@pearson.com" required/>
                    </div>
                  </div>

                  <div class="form-group">
                              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Gender: </b></label>
                              <div class="col-sm-10">
                              <select name="EGender" required="" id="form-field-1"> &nbsp;&nbsp;<?php echo $newhire->Gender;?>
                                <option id="form-field-1" value ="<?php echo $newhire->Gender;?>"><?php echo $newhire->Gender;?></option>
                                <option id="form-field-1" value="Male" name="gender" required="">Male</option>
                                <option id="form-field-1" value="Female" name="gender" required="">Female</option>
                              </select>
                            </div>
                            </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Contact Number: </b></label>

                    <div class="col-sm-10">
                      <input type="tel" id="form-field-1" placeholder="Contact" value ="<?php echo $newhire->Contact;?>" name="ContactNumber" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                            <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Date of Birth: </b></label>
                    <div class="col-sm-10">
                              <input type="date" class="col-xs-10 col-sm-5" value ="<?php echo $newhire->Birthday;?>" placeholder="Enter Birthday" name="DateofBirth" required/>
                            </div>
                            </div>


                   <input type="hidden" name="Date_added" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>">
                   
          <div class="space-2"></div>

                  <h4><b>Educational Background:</b></h4>    
                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Tertiary </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="University/College" value ="<?php echo $newhire->Tschool;?>" name="Tertiary" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Degree </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="Degree/Course" value ="<?php echo $newhire->Tdegree;?>" name="Degree" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> From </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="Year" value ="<?php echo $newhire->Tfrom;?>" name="EdFrom" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> To </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="Year" value ="<?php echo $newhire->Tto;?>" name="EdTo" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Status </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="Graduated or Not Graduated" name="EStatus" class="col-xs-10 col-sm-5" <?php if($newhire->Tgraduated != 'Graduated') echo ' value ="Not Graduated"'; else echo 'value ="Graduated" ';?> />
                    </div>
                  </div>

                  <input type="hidden" name="Date_added" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>">

              <div class="space-2"></div>

                 <h4><b>Employment Background:</b></h4>

                 <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Company: </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="Company" value ="<?php echo $newhire->Company;?>" name="ECompany" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Job: </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="Job" value ="<?php echo $newhire->Job;?>" name="EmJob" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Duration </b></label>

                    <div class="col-sm-10">
                      <input type="text" id="form-field-1" placeholder="For how long?" value ="<?php echo $newhire->Duration;?>" name="EmDuration" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

              <div class="space-2"></div>

                   <h3><b>Employment information:</b></h3>

                   <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Date of Hire: </b></label>
                              <div class="col-sm-10">
                              <input type="date" style="padding: 5px;" class="form-control" placeholder="Date of Hire" name="HireDate" value="" required="">
                            </div>
                   </div>

                   <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Referrer: </b></label>
                              <div class="col-sm-10">
                              <input type="text" style="padding: 5px;" readonly="" class="form-control" placeholder="Employee who referred" name="Referrer" value="<?php echo $newhire->Employee;?>">
                            </div>
                   </div>

                   <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Department: </b></label>
                              <div class="col-sm-10">
                                <input type="text" style="padding: 5px;" readonly="" class="form-control" placeholder="Employee who referred" name="EDepartment" value="<?php echo $newhire->DepartmentName;?>">
                            </div>
                   </div>

                 <div class="form-group">
                              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Job Title: </b></label>
                              <div class="col-sm-10">
                                <input type="text" style="padding: 5px;" class="form-control" readonly="" placeholder="Employee who referred" name="JobTitle" value="<?php echo $newhire->AssignedPosition;?>">
                            </div>
                  </div>


                   <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> Manager: </b></label>
                              <div class="col-sm-10">
                              <input type="text" readonly="" id="manager" style="padding: 5px;" class="form-control" placeholder="Manager" name="EManager" value="<?php echo $newhire->Manager;?>">
                            </div>
                   </div>

                   <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><b> User Type: </b></label>
                              <div class="col-sm-10">
                              <select class="chosen-select form-control col-xs-10 col-sm-5" id="choose" name="usertype" id="" placeholder="User type">
                                <option></option>
                        <option value="admin">admin</option>
                        <option value="employee">employee</option>

                                    </select>
                            </div>
                   </div>
                              <input type="Hidden" readonly="" id="manager" style="padding: 5px;" class="form-control" placeholder="Manager" name="AssignStatus" value="Active">

                  <div class="clearfix form-actions">
                    <div class="pull-left col-md-offset-4 col-md-0">
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#cancel"><i class="ace-icon fa fa-times bigger-110"></i>Cancel</a>

                      &nbsp; &nbsp; &nbsp;
                      <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                      </button>

                      &nbsp; &nbsp; &nbsp;
                      <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-arrow-right bigger-110"></i>
                        Submit
                      </button>
                      
                    </div>
                  </div>
                </form>
                <?php }?>
                    </div>
                  </div><!-- /.col -->
                </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->

      <div class="footer">
        <div class="footer-inner">
          <div class="footer-content">
            <span class="smaller-90">
              <span class="blue bolder">PACAPE</span>
              All rights reserved. &copy; 2017-2018
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

          <form action="<?php echo base_url(); ?>index.php/adminforms/assessing" method="post">

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
    <script type="text/javascript">
    jQuery(function($) {
        //initiate dataTables plugin
        var myTable = 
        $('#dynamic-table')
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
        .DataTable( {
          bAutoWidth: false,
          "aoColumns": [
            { "bSortable": false },
            null, null,null, null, null,
            { "bSortable": false }
          ],
          "aaSorting": [],
          
          
          //"bProcessing": true,
              //"bServerSide": true,
              //"sAjaxSource": "http://127.0.0.1/table.php" ,
      
          //,
          //"sScrollY": "200px",
          //"bPaginate": false,
      
          //"sScrollX": "100%",
          //"sScrollXInner": "120%",
          //"bScrollCollapse": true,
          //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
          //you may want to wrap the table inside a "div.dataTables_borderWrap" element
      
          //"iDisplayLength": 50
      
      
          select: {
            style: 'multi'
          }
          } );
      
        
        
        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
        
        new $.fn.dataTable.Buttons( myTable, {
          buttons: [
            {
            "extend": "colvis",
            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
            "className": "btn btn-white btn-primary btn-bold",
            columns: ':not(:first):not(:last)'
            },
            {
            "extend": "copy",
            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "csv",
            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "excel",
            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "pdf",
            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
            "className": "btn btn-white btn-primary btn-bold"
            },
            {
            "extend": "print",
            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
            "className": "btn btn-white btn-primary btn-bold",
            autoPrint: false,
            message: 'This print was produced using the Print button for DataTables'
            }     
          ]
        } );
        myTable.buttons().container().appendTo( $('.tableTools-container') );
        
        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
          defaultCopyAction(e, dt, button, config);
          $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });
        
        
        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {
          
          defaultColvisAction(e, dt, button, config);
          
          
          if($('.dt-button-collection > .dropdown-menu').length == 0) {
            $('.dt-button-collection')
            .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
            .find('a').attr('href', '#').wrap("<li />")
          }
          $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });
      
        ////
      
        setTimeout(function() {
          $($('.tableTools-container')).find('a.dt-button').each(function() {
            var div = $(this).find(' > div').first();
            if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
            else $(this).tooltip({container: 'body', title: $(this).text()});
          });
        }, 500);
        
        
        
        
        
        myTable.on( 'select', function ( e, dt, type, index ) {
          if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
          }
        } );
        myTable.on( 'deselect', function ( e, dt, type, index ) {
          if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
          }
        } );
      
      
      
      
        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
        
        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
          var th_checked = this.checked;//checkbox inside "TH" table header
          
          $('#dynamic-table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) myTable.row(row).select();
            else  myTable.row(row).deselect();
          });
        });
        
        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
          var row = $(this).closest('tr').get(0);
          if(this.checked) myTable.row(row).deselect();
          else myTable.row(row).select();
        });
      
      
      
        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
        });
        
        
        
        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
          var th_checked = this.checked;//checkbox inside "TH" table header
          
          $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
          });
        });
        
        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
          var $row = $(this).closest('tr');
          if($row.is('.detail-row ')) return;
          if(this.checked) $row.addClass(active_class);
          else $row.removeClass(active_class);
        });
      
        
      
        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        
        //tooltip placement on right or left
        function tooltip_placement(context, source) {
          var $source = $(source);
          var $parent = $source.closest('table')
          var off1 = $parent.offset();
          var w1 = $parent.width();
      
          var off2 = $source.offset();
          //var w2 = $source.width();
      
          if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
          return 'left';
        }
        
        
        
        
        /***************/
        $('.show-details-btn').on('click', function(e) {
          e.preventDefault();
          $(this).closest('tr').next().toggleClass('open');
          $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/
        
        
        
        
        
        /**
        //add horizontal scrollbars to a simple table
        $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
          {
          horizontal: true,
          styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
          size: 2000,
          mouseWheelLock: true
          }
        ).css('padding-top', '12px');
        */
      
      
      })
    </script>
  </body>
</html>