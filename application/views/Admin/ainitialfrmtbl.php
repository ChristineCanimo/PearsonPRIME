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
              <li class="active">Applicants for Initial Interview</li>
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
 $query ="SELECT * FROM `interview` JOIN `educinfo` ON Interview.ApplicantNumber=educinfo.ApplicantNumber WHERE interview.Status = 'For Initial Interview'";  
 $result = mysqli_query($connect, $query);  
 ?>  
 
                <div class="row">
                  <div class="col-xs-12">
                     
                    <div class="page-header">
                            <h1>
                              Applicants for Interview
                              <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Test for Communication Skills
                              </small>
                            </h1>
                          </div><!-- /.page-header -->

                    <div class="clearfix">
                      <div class="pull-right tableTools-container"></div>
                    </div>
                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="overflow:auto" autocomplete="on">
                        <thead>
                          <tr>

                            <th class=" black center">Name</th>
                            <th class="center">Desired Job</th>
                            <th class="center">Age</th>
                            <th class="center">Gender</th>
                            <th class="center">Course</th>
                            <th class="center">Referred By</th>
                            <th class="center">Actions</th>
                          
                          </tr>
                        </thead>


                        <tbody>
                          
                       <?php
                        while($row=mysqli_fetch_array($result))
                        { $bday= $row["Birthday"];
                          $birthDate = $bday;
                          $today = date_default_timezone_set("Asia/Manila"); date("Y/m/d"); 
                          $age = date("Y") - date("Y", strtotime($birthDate));
                          
                          echo '
                          <tr>
                            <td class="center">
                            '.$row["FirstName"].' '.$row["LastName"].'
                            </td>
                            <td class="center">'.$row["Desired"].'</td>
                            <td class="center">'.$age.'</td>
                            <td class="center">'.$row["Gender"].'</td>
                            <td class="center">'.$row["Tdegree"].'</td>
                            <td class="center">'.$row["Employee"].'</td>
                            <td class="center">
                            <div class="hidden-sm hidden-xs action-buttons center">
                            <form action="/interview/index.php/interviewprocess/agetdatafrmtable" method="post">
                              <input type="hidden" value="'.$row["ApplicantNumber"].'" name="ApplicantNumber">
                                <Button class="btn btn-white btn-info tooltip-success" type = "submit" data-rel="tooltip" title="View">
                                  <i class="ace-icon fa fa-eye bigger-100"></i>
                                </BUTTON>
                            </form>
                                
                            </div>

                              <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                  <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-110"></i>
                                  </button>

                                  <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                    <span class="invoice-info-label"><a class="btn btn-white btn-info" data-rel="tooltip" title="View" data-placement="top" href=""><i class="ace-icon fa fa-eye bigger-100 blue"></i></a></span>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </td>
                            
                          </tr>

                          ';
                          }   
                          ?>  
                                                        
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
<br>
<br>
<br>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="widget-header">
                          <h4 class="widget-title"><b>Applicant's Information</b></h4>

                        <div class="widget-toolbar no-border invoice-info">
                        </div>

                        <div class="widget-toolbar hidden-480">
                          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit">
                            <i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
                            Edit
                          </button>
                          <button class="btn btn-warning btn-sm " data-toggle="modal" data-target="#withdraw">
                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                            Withdraw 
                          </button>
                        </div>
                      </div>

                        <div class="widget-body">
                          <div class="widget-main">
                            <form method="Post" if="initial" action="ainsert_initial">
                            <?php foreach($records as $record){?>
                            <table width="80%">
                              <tr>
                                <td >
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Applicant Number : </b></label>
                            </div>
                                <td>
                                  <input type="hidden" value="<?php echo $record->ApplicantNumber;?>" name="ApplicantNumber">
                                  <?php echo $record->ApplicantNumber;?>
                                </td>
                                </td>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Submission Date : </b></label>
                            </div>
                                </td>
                                <td>
                                  <?php echo $record->date_added;?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Applicant Name : </b></label>
                            </div>
                                </td>
                                <td>
                                  <input type="hidden" value="<?php echo $record->FirstName;?>&nbsp;<?php echo $record->LastName;?>" name="ApplicantName">

                                  <?php echo $record->FirstName;?> &nbsp;<?php echo $record->LastName;?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Gender : </b></label>
                            </div>
                                </td>
                                <td>
                                  <input type="hidden" value="<?php echo $record->Gender;?>" name="Gender">

                                  <?php echo $record->Gender;?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Email Address : </b></label>
                            </div>
                                </td>
                                <td>
                                  <input type="hidden" value="<?php echo $record->Email;?>" name="Email">

                                  <?php echo $record->Email;?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Contact Info : </b></label>
                            </div>
                                </td>
                                <td>
                                  <input type="hidden" value="<?php echo $record->Contact;?>" name="Contact">

                                  <?php echo $record->Contact;?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Address : </b></label>
                            </div>
                                </td>
                                <td>
                                  <input type="hidden" value="<?php echo $record->AddressLine;?>, <?php echo $record->City;?>" name="Address">

                                  <?php echo $record->AddressLine;?>, <?php echo $record->City;?>
                                </td>
                              </tr>
                              <tr>
                                  <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Date of Birth : </b></label>
                            </div>
                                </td>
                                <td>
                                  <input type="hidden" value="<?php echo $record->Birthday;?>" name="Birthday">

                                  <?php echo $record->Birthday;?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                            <hr />
                            </td><td>
                            <hr />
                            </td><td>
                            <hr />
                            </td><td>
                            <hr />
                            </td>
                            </tr>
                              <tr>
                                <td>
                                  <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>College (Tertiary) : </b></label>
                                  </div>
                                </td>
                                <td>
                                  <?php echo $record->Tschool;?>
                                </td>
                                <td>
                                  <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Degree : </b></label>
                                  </div>
                                </td>
                                <td>
                                  <?php echo $record->Tdegree;?>
                                </td>
                                <tr>
                                  <td>
                                    <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>From : </b></label>
                                    </div>
                                  </td>
                                  <td>
                                  <?php echo $record->Tfrom;?>
                                </td>
                                  <td>
                                    <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>To : </b></label>
                                    </div>
                                  </td>
                                  <td>
                                  <?php echo $record->Tto;?>
                                </td>
                                </tr>
                                <tr>
                                  <tr>
                                <td>
                            <hr />
                            </td><td>
                            <hr />
                            </td><td>
                            <hr />
                            </td><td>
                            <hr />
                            </td>
                            </tr>
                            <tr>
                                  <td>
                                      <div style="padding: 5px;">
                                        <h4 class="widget-title blue"><b>Previous Employment</b></h4>
                                    </div>
                                  </td>
                                </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"> <?php if($record->NoExperience == 'No Experience') echo "No Experience at all"; ?></label>
                                    </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><?php if($record->Company != Null) echo "</del> <b>Company : </b></del> "; ?></label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Company;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><?php if($record->Job != Null) echo "</del> <b>Position/Job : </b></del> "; ?> </label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Job;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><?php if($record->Duration != Null) echo "</del><b> Duration : </b></del> "; ?> </label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Duration;?>
                                    </td>
                                  </tr><tr>
                                <td>
                            <hr />
                            </td><td>
                            <hr />
                            </td><td>
                            <hr />
                            </td><td>
                            <hr />
                            </td>
                            </tr>
                            <tr>
                                  <td>
                                      <div style="padding: 5px;">
                                        <h5 class="widget-title blue"><b>To be filled up by the Interviewer</b></h5>
                                    </div>
                                  </td>
                                </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Position Desired : </b></label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Desired;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><?php if($record->Employee != Null) echo "</del><b> Referred By : </b></del> "; ?></label>
                                    </div>
                                    </td>
                                     <td>
                                  <input type="hidden" value="<?php echo $record->Employee;?>" name="ReferredBy">

                                      <?php echo $record->Employee;?>
                                    </td>
                                  </tr>
                                    <tr>
                                      <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-9"><b>Interviewer : </b></label>
                            </div>
                                  </td>
                                  <input type="hidden" value="<?php echo $record->First;?> <?php echo $record->Last;?>" name="Interviewer">
                                  <td>
                                      <?php echo $record->First;?> <?php echo $record->Last;?>
                                    </td>
                                </tr>
                                <tr>
                                  <td>
                              <label style="float: right;" for="form-field-8"><b>Comments : </b></label>
                            </td>
                              <td>
                            <div>
                              <textarea placeholder="Well, say something!" id="status" cols="50" rows="3" name="Comments"></textarea>
                            </div>
                              </td>
                            </tr>
                            
                            <tr>
                              <td>
                            <label style="float: right;" for="form-field-8"><b>Result : </b></label>
                              </td>
                              <td>
                              <div class="radio">
                              <label>
                                <input onclick="pass()" id="yesCheck" name="Result" value="Passed" type="radio" class="ace" />
                                <span class="lbl"> Passed</span>
                              </label>
                            </div>
                              </td>
                              <td>
                            <div class="radio">
                              <label>
                                <input onclick="fail()" id="noCheck" name="Result" value="Failed" type="radio" class="ace" />
                                <span class="lbl"> Failed</span>
                              </label>
                            </div>
                              </td>
                            </tr>
                        </table>

                            <div style="padding: 5px;">
                              <section id="mypass" form="msform" style="display: none;">
                                <table width="80%">
                                  <tr style="padding: 5px;">
                                    <td>
                              <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Department : </b></label>
                                  </div>
                                    </td>
                                    <td>
                              <select class="chosen-select form-control depart" name="DepartmentName" id="choose" data-placeholder="Department Name">
                                     <option value="">Select Department</option>
                                
                              </select>
                                    </td>
                                  </tr>
                                  
                                  <tr style="padding: 5px;">
                                    <td>
                              <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><b>Assigned Position (Job Title) : </b></label>
                                  </div>
                                    </td>
                                    <td>
                                 <select class="chosen-select form-control jobs" style="padding: 5px;" name="AssignedPosition" id="form-field-1" data-placeholder="Job Title" >
                                             <option value="">Select Job</option>
                                
                              </select>
                              <input type="hidden" name="Date_added" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>">
                                    </td>
                                  </tr>
                                </table>
                              </section>
                            </div>

                            <?php }?>

                            <div class="clearfix form-actions">
                    <div class="col-md-offset-5 col-md-10">
                      <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                      </button>

                      &nbsp; &nbsp; &nbsp;
                      <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-arrow-right bigger-110"></i>
                        Submit
                      </button>
                      
                      </form>
                    </div>
                  </div>
                            <hr />

                <div id="modal-table" class="modal fade" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header no-padding">
                        <div class="table-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span class="white">&times;</span>
                          </button>
                          Results for "Latest Registered Domains
                        </div>
                      </div>

                      

                      <div class="modal-footer no-margin-top">
                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Close
                        </button>

                        <ul class="pagination pull-right no-margin">
                          <li class="prev disabled">
                            <a href="#">
                              <i class="ace-icon fa fa-angle-double-left"></i>
                            </a>
                          </li>

                          <li class="active">
                            <a href="#">1</a>
                          </li>

                          <li>
                            <a href="#">2</a>
                          </li>

                          <li>
                            <a href="#">3</a>
                          </li>

                          <li class="next">
                            <a href="#">
                              <i class="ace-icon fa fa-angle-double-right"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
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
            <span class="smaller-90">
              <span class="blue bolder">PACAPE</span>
              All rights reserved &copy; 2017-2018
            </span>
          </div>
        </div>
      </div>

<div id="edit" class="modal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div id="fuelux-wizard-container">
                        <div class="modal-header">
                           <h4 class="blue">Update Information</h4>
                        </div>

                        <div class="modal-body step-content" style="width: 500px; height: 100%;">
                            <div class="center">
                             <h4><b>Personal Information</b></h4> 
                              <?php foreach($records as $record){?>
                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/adminforms/updateinfoinitial" method="post">

                  <div class="form-group">

                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="form-field-1"><b> First Name: </b></label>

                    <div class="col-xs-12 col-sm-9">
                      <input type="text" id="form-field-1" placeholder="First Name" name="FirstName" class="col-xs-10 col-sm-12" value ="<?php echo $record->FirstName;?>" required/> 
                      <input type="hidden" id="form-field-1" placeholder="First Name" name="ApplicantNumber" class="col-xs-10 col-sm-12" value ="<?php echo $record->ApplicantNumber;?>" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Middle Name: </b></label>

                    <div class="col-sm-9">
                      <input type="text" value ="<?php echo $record->MiddleName;?>" id="form-field-1" placeholder="Middle Name" name="MiddleName" class="col-xs-10 col-sm-12" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Last Name: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" value ="<?php echo $record->LastName;?>" placeholder="Last Name" name="LastName" class="col-xs-10 col-sm-12" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Address Line: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="House No, Street, Barangay" name="AddressLine" class="col-xs-10 col-sm-12" value ="<?php echo $record->AddressLine;?>" required/>
                      <input type="hidden" id="form-field-1" placeholder="House No, Street, Barangay" name="Address" class="col-xs-10 col-sm-12" value ="<?php echo $record->AddressLine;?>, <?php echo $record->City;?>" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> City Address: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" value ="<?php echo $record->City;?>" placeholder="City" name="City" class="col-xs-10 col-sm-12" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Email Address: </b></label>

                    <div class="col-sm-9">
                      <input type="email" id="form-field-1" placeholder="Email Address" value ="<?php echo $record->Email;?>" name="Email" class="col-xs-10 col-sm-12" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Gender: </b></label>
                      <div class="col-sm-9">
                        <select name="Gender" id="form-field-1"><?php echo $record->Gender;?>
                          <option id="form-field-1" value ="<?php echo $record->Gender;?>" name="Gender" required=""><?php echo $record->Gender;?></option>
                            <option id="form-field-1" value="Male" name="gender" required="">Male</option>
                            <option id="form-field-1" value="Female" name="gender" required="">Female</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Contact Number: </b></label>

                    <div class="col-sm-9">
                      <input type="tel" id="form-field-1" placeholder="Contact" value ="<?php echo $record->Contact;?>" name="Contact" class="col-xs-10 col-sm-12" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Date of Birth: </b></label>
                    <div class="col-sm-9">
                              <input type="date" class="col-xs-10 col-sm-12" value ="<?php echo $record->Birthday;?>" placeholder="Enter Birthday" name="Birthday" required/>

                    </div>
                  </div>

                  <div class="space-2"></div>

                  <h4><b>Educational Background:</b></h4>    
                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Tertiary </b></label>

                    <div class="col-sm-9">
                      <select class="chosen-select form-control col-xs-10 col-sm-5" id="Tschool" name="Tschool" id="" placeholder="University/College"><?php echo $record->Tschool;?>
                            <option value="<?php echo $record->Tschool;?>"><?php echo $record->Tschool;?></option>
                            <option value="">Select University</option>

                                <?php
                                   foreach($result as $row)
                                    {
                                      echo '

                                         <option value="'.$row["University"].'">'.$row["University"].'</option>
                                     
                                ';
                                    }   
                                    ?> 
                                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Degree </b></label>

                    <div class="col-sm-9">
                      <select class="chosen-select form-control col-xs-10 col-sm-5" name="Tdegree" id="" placeholder="Course">
                            <option value="<?php echo $record->Tdegree;?>"><?php echo $record->Tdegree;?></option>
                            <option value="">Select Course</option>

                                <?php
                                  foreach($result2 as $row)
                                {
                                  echo '

                                     <option value="'.$row["Course"].'">'.$row["Course"].'</option>
                                 
                          ';
                                }   
                                ?> 
                                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> From </b></label>

                    <div class="col-sm-9">
                      <select class="chosen-select form-control" id="form-field-select-3" name="Tfrom" id="" placeholder="Year/College"><option value="<?php echo $record->Tfrom;?>"><?php echo $record->Tfrom;?></option>

                          <?php
                               foreach(range(date('Y'), $earliest_year) as $x)
                                {
                                  echo '
                                  <option value="'.$x.'">'.$x.'</option>
                                 
                          ';
                                }   
                                ?> 
                                 </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> To </b></label>

                    <div class="col-sm-9">
                      <select class="chosen-select form-control" id="form-field-select-3" name="Tto" id="" placeholder="Year/College">
                        <option value="<?php echo $record->Tto;?>"><?php echo $record->Tto;?></option>
                          <?php
                               foreach(range(date('Y'), $earliest_year) as $x)
                                {
                                  echo '
                                  <option value="'.$x.'">'.$x.'</option>
                                 
                          ';
                                }   
                                ?> 
                                  </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Status </b></label>

                    <div class="col-sm-9">
                      <div class="checkbox">
                              <label class="col-sm-4 control-label">
                                <input class="form-field-checkbox ace" type="checkbox" name="Tgraduated" value="Graduated" <?php if($record->Tgraduated == 'Graduated') echo " checked='checked' "; ?>  />
                                <span class="lbl"> Graduated </span>
                              </label>
                      </div>
                    </div>
                  </div>

                  <div class="space-2"></div>

                 <h4><b>Previous Employment (Latest):</b></h4>

                 <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Company: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="Company" value ="<?php echo $record->Company;?>" name="Company" class="col-xs-10 col-sm-12" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Job: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="Job" value ="<?php echo $record->Job;?>" name="Job" class="col-xs-10 col-sm-12" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Duration </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="For how long?" value ="<?php echo $record->Duration;?>" name="Duration" class="col-xs-10 col-sm-12" />
                    </div>
                  </div>

                  <div class="col-sm-9">
                      <div class="checkbox">
                              <label class="col-sm-4 control-label">
                                <input class="form-field-checkbox ace" type="checkbox" name="NoExperience" value="No Experience" <?php if($record->NoExperience == 'No Experience') echo " checked='checked' "; ?>  />
                                <span class="lbl"> NoExperience </span>
                              </label>
                      </div>
                    </div>

                  <h3><b>Employment information:</b></h3>

                   <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Position Desired </b></label>
                              <div class="col-sm-9">
                              <select name="Desired" id="form-field-1" required=""> <?php echo $record->Desired;?>

                                <option id="form-field-1" value="<?php echo $record->Desired;?>" required=""><?php echo $record->Desired;?></option>
                                <option id="form-field-1" value="Associate" required="">Associate</option>
                                <option id="form-field-1" value="Administrator"  required="">Administrator</option>
                                <option id="form-field-1" value="Senior Administrator" required="">Senior Administrator</option>
                                <option id="form-field-1" value="Advisor" required="">Advisor</option>
                                <option id="form-field-1" value="Senior Advisor" name="Desired" required="">Senior Advisor</option>
                                <option id="form-field-1" value="Manager" required="">Manager</option>
                                <option id="form-field-1" value="Senior Manager" required="">Senior Manager</option>
                                <option id="form-field-1" value="Intern" required="">Intern</option>
                              </select>
                              
                            </div>
                   </div>

                   <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Referrer: </b></label>
                              <div class="col-sm-9">
                              <select class="chosen-select form-control" name="Employee" id="form-field-1" data-placeholder="Employee Name"><?php echo $record->Employee;?>
                                <option><?php echo $record->Employee;?></option>
                                <option></option>
                                <?php foreach($taos as $tao){?>
                                <option value="<?php echo $tao->First;?> <?php echo $tao->Last;?>"><?php echo $tao->First;?> <?php echo $tao->Last;?></option>
                                <?php }?>
                          </select>
                            </div>
                   </div>

                   <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Initial Interviewer: </b></label>
                              <div class="col-sm-9">
                              <input type="text" readonly=""  style="padding: 5px;" class="form-control" placeholder="" name="Interviewer" value=" <?php echo $record->First;?> <?php echo $record->Last;?>" >
                            </div>
                   </div>

                            </div>
                          </div>
                        </div>

                      <div class="modal-footer">

                        <button class="btn btn-success btn-sm" type="submit">
                          Finish
                          <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                        </button>

                        <button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                          <i class="ace-icon fa fa-times"></i>
                          Cancel
                        </button>
                      </form>
                   <?php }?>
                      </div>
                    </div>
                  </div>
                </div>

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    </div><!-- /.main-container -->

<div class="modal" id="withdraw" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: red">Warning</h4>
        </div>

        <div class="modal-body">
          Are you sure you want to withdraw the applicant in the interview?

            <form action="withdrawfinal" method="post">
             <input type="hidden" id="form-field-1" placeholder="First Name" name="ApplicantNumber" class="col-xs-10 col-sm-12" value ="<?php echo $record->ApplicantNumber;?>" required/>
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

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
      <script type="text/javascript">
  
  $(document).ready(function(){
/*
      $('.depart,.job,.cities').chosen({
        allow_single_deselect: true
        });
    /*Get the country list */

      $.ajax({
        type: "GET",
        url: "<?php echo base_url();?>index.php/recordmanagement/get_dept",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $('.depart').find("option:eq(0)").html("Please wait..");
        },                         
        success: function (data) {
          /*get response as json */
           $('.depart').find("option:eq(0)").html("Select Department");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.depart').append(option);
         });  
          $('.depart').trigger("chosen:updated");

          /*ends */
          
        }
      });


    $('.depart').change(function(){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>index.php/recordmanagement/get_job",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $(".jobs option:gt(0)").remove();
      $('.jobs').find("option:eq(0)").html("Please wait..");

        },                         
        success: function (data) {
          /*get response as json */
           $('.jobs').find("option:eq(0)").html("Select Job");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.jobs').append(option);
         });  

          /*ends */
          $('.jobs').trigger("chosen:updated");
          
        }
      });
    });


  });





</script>
    

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