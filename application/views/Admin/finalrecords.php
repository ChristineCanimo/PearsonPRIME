<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Pearson People Services</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url()?>interviewassets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>interviewassets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
		<!-- ace settings handler -->
		<script src="<?php echo base_url()?>interviewassets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			table label{
				width: 60%;
				float: right;
				font-weight: bold;
			}
		</style>
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

							<li>
								For Final Interview
							</li>
							<li class="active">Applicant for Final Interview</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<!--/ .can add other functions here-->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->


								<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										
									</div>
								</div>

<?php  
 $earliest_year = "1950";
 $connect = mysqli_connect("localhost", "root", "", "login");  
 $query ="SELECT * FROM `universities`";  
 $result = mysqli_query($connect, $query);  
 
 $courses ="SELECT * FROM `courses` order by course ASC";  
 $result2 = mysqli_query($connect, $courses);  

 ?>        
                  <div class="hr hr-24"></div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="widget-header widget-header-large">
                        <h4 class="widget-title">
                          Applicant's Information
                        </h4>

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
                          	<form method="Post" if="initial" action="<?php echo base_url()?>index.php/recordmanagement/insert_final">
									<?php foreach($records as $record){?>
                            <table width="80%">
                              <tr>
                                <td >
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8">Applicant Number : </label>
                            </div>
                                <td>
                                	<input type="hidden" value="<?php echo $record->ApplicantNumber;?>" name="ApplicantNumber">
                                  <?php echo $record->ApplicantNumber;?>
                                </td>
                                </td>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8">Submission Date : </label>
                            </div>
                                </td>
                                <td>
                                  <?php echo $record->date_added;?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                            <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8">Applicant Name : </label>
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
                              <label style="float: right;" for="form-field-8">Gender : </label>
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
                              <label style="float: right;" for="form-field-8">Email Address : </label>
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
                              <label style="float: right;" for="form-field-8">Contact Info : </label>
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
                              <label style="float: right;" for="form-field-8">Address : </label>
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
                              <label style="float: right;" for="form-field-8">Date of Birth : </label>
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
                              <label style="float: right;" for="form-field-8">College (Tertiary) : </label>
                                  </div>
                                </td>
                                <td>
                                  <?php echo $record->Tschool;?>
                                </td>
                                <td>
                                  <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8">Degree : </label>
                                  </div>
                                </td>
                                <td>
                                  <?php echo $record->Tdegree;?>
                                </td>
                                <tr>
                                  <td>
                                    <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8">From : </label>
                                    </div>
                                  </td>
                                  <td>
                                  <?php echo $record->Tfrom;?>
                                </td>
                                  <td>
                                    <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8">To : </label>
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
                              <label style="float: right;" for="form-field-8"><?php if($record->Company != Null) echo "</del> Company : </del> "; ?></label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Company;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><?php if($record->Job != Null) echo "</del> Position/Job : </del> "; ?> </label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Job;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><?php if($record->Duration != Null) echo "</del> Duration : </del> "; ?> </label>
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
                                      <div style="padding: 8px;">
                                        <h5 class="widget-title blue"><b>Employment Information</b></h5>
                                    </div>
                                	</td>
                                </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-8">Position Desired : </label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Desired;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-8">Referred By : </label>
                                    </div>
                                    </td>
                                     <td>
                                	<input type="hidden" value="<?php echo $record->ReferredBy;?>" name="ReferredBy">

                                      <?php echo $record->ReferredBy;?>
                                    </td>
                                  </tr>
                                    <tr>
                                      <td>
                            <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-9">Initial Interviewer : </label>
                            </div>
                                  </td>
                                	<input type="hidden" value="<?php echo $record->Interviewer;?>" name="Initialinterviewer">
                                  <td>
                                      <?php echo $record->Interviewer;?>
                                    </td>
                                </tr>
                                <tr>
                                  <td>
                            <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-8">Comments : </label>
                            </div>
                            </td>
                          		<td>
                            	<?php echo $record->Comments;?>
                            	</td>
                            </tr>
                            <tr>
                                  <td>
                              <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-8">Result: </label>
                                  </div>
                                    </td>
                                    <td>
                                  <?php echo $record->Result;?>
                                    </td>
                                  </tr>
                                <tr>
                                  <td>
                              <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-8">Assigned Department : </label>
                                  </div>
                                    </td>
                                    <td>
                                  <?php echo $record->DepartmentName;?>
                                    </td>
                                  </tr>
                                <tr>
                                  <td>
                              <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-8">Assigned Manager : </label>
                                  </div>
                                    </td>
                                    <td>
                                  <?php echo $record->Manager;?>
                                    </td>
                                </tr>
                                <tr>
                                  <td>
                              <div style="padding: 8px;">
                              <label style="float: right;" for="form-field-8">Assigned Position : </label>
                                  </div>
                                    </td>
                                    <td>
                                  <?php echo $record->AssignedPosition;?>
                                    </td>
                                  </tr>
                        </table>

                            <?php }?>

<br>
<br>
<br>

                  <div class="clearfix form-actions">
                    <div class="col-md-offset-5 col-md-9">
                      <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/interviewprocess/aforfinal">
                        <i class="ace-icon fa fa-arrow-left bigger-110"></i>
                        Back
                      </a>

                      </form>
                    </div>
                  </div>
                            <hr />

                          
                          </div>
                        </div>
                    </div><!-- /.span -->


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
                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/adminforms/updateinfo" method="post">

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Full Name: </b></label>

                    <div class="col-sm-9">
                      <input type="text" value ="<?php echo $record->ApplicantName;?>" id="form-field-1" placeholder="First and Last Name" name="ApplicantName" class="col-xs-10 col-sm-12" required/>
                    </div>
                  </div>

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
<div class="space-2"></div>
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
                              <input type="text" readonly=""  style="padding: 5px;" class="form-control" placeholder="" name="Interviewer" value="<?php echo $record->Interviewer;?>" >
                            </div>
                   </div>

                   <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Comments: </b></label>
                              <div class="col-sm-9">
                              <input type="text" readonly=""  style="padding: 5px;" class="form-control" placeholder="" name="Comments" value="<?php echo $record->Comments;?>" >
                            </div>
                   </div>

                   <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Result: </b></label>
                              <div class="col-sm-9">
                              <input type="text" readonly=""  style="padding: 5px;" class="form-control" placeholder="" name="Result" value="<?php echo $record->Result;?>">
                            </div>
                   </div>

                   <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Assigned Department: </b></label>
                              <div class="col-sm-9">
                              <input type="text" readonly=""  style="padding: 5px;" class="form-control" placeholder="" name="DepartmentName" value="<?php echo $record->DepartmentName;?>">
                            </div>
                   </div>

                   <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Manager: </b></label>
                              <div class="col-sm-9">
                              <input type="text" readonly="" id="manager" style="padding: 5px;" class="form-control" placeholder="Manager" name="Manager" value="<?php echo $record->Manager;?>">
                            </div>
                   </div>

                 <div class="form-group">
                          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Assigned Position: </b></label>
                            <div class="col-sm-9">
                              <input type="text" readonly=""  style="padding: 5px;" class="form-control" placeholder="" name="AssignedPosition" value="<?php echo $record->AssignedPosition;?>">
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

        $(document).ready(function() {

	    $("#choose option").filter(function() {
	        return $(this).val() == $("#manager").val();
	    }).attr('selected', true);

	    $("#choose").live("change", function() {

	        $("#manager").val($(this).find("option:selected").attr("value"));
	    });
	});
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
		<script src="<?php echo base_url()?>nterviewassets/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url()?>interviewassets/js/dataTables.select.min.js"></script> 
		
    <script src="<?php echo base_url()?>interviewassets/js/wizard.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery-additional-methods.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/bootbox.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url()?>interviewassets/js/select2.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url()?>interviewassets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url()?>interviewassets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
      jQuery(function($) {
      
        $('[data-rel=tooltip]').tooltip();
      
        $('.select2').css('width','500px').select2({allowClear:true})
        .on('change', function(){
          $(this).closest('form').validate().element($(this));
        }); 
      
      
        var $validation = false;
        $('#fuelux-wizard-container')
        .ace_wizard({
          //step: 2 //optional argument. wizard will jump to step "2" at first
          //buttons: '.wizard-actions:eq(0)'
        })
        .on('actionclicked.fu.wizard' , function(e, info){
          if(info.step == 1 && $validation) {
            if(!$('#validation-form').valid()) e.preventDefault();
          }
        })
        //.on('changed.fu.wizard', function() {
        //})
        .on('finished.fu.wizard', function(e) {
          bootbox.dialog({
            message: "Thank you! Your information was successfully saved!", 
            buttons: {
              "success" : {
                "label" : "OK",
                "className" : "btn-sm btn-primary"
              }
            }
          });
        }).on('stepclick.fu.wizard', function(e){
          //e.preventDefault();//this will prevent clicking and selecting steps
        });
      
      
        //jump to a step
        /**
        var wizard = $('#fuelux-wizard-container').data('fu.wizard')
        wizard.currentStep = 3;
        wizard.setState();
        */
      
        //determine selected step
        //wizard.selectedItem().step
      
      
      
        //hide or show the other form which requires validation
        //this is for demo only, you usullay want just one form in your application
        $('#skip-validation').removeAttr('checked').on('click', function(){
          $validation = this.checked;
          if(this.checked) {
            $('#sample-form').hide();
            $('#validation-form').removeClass('hide');
          }
          else {
            $('#validation-form').addClass('hide');
            $('#sample-form').show();
          }
        })
      
      
      
        //documentation : http://docs.jquery.com/Plugins/Validation/validate
      
      
        $.mask.definitions['~']='[+-]';
        $('#phone').mask('(999) 999-9999');
      
        jQuery.validator.addMethod("phone", function (value, element) {
          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
        }, "Enter a valid phone number.");
      
        $('#validation-form').validate({
          errorElement: 'div',
          errorClass: 'help-block',
          focusInvalid: false,
          ignore: "",
          rules: {
            email: {
              required: true,
              email:true
            },
            password: {
              required: true,
              minlength: 5
            },
            password2: {
              required: true,
              minlength: 5,
              equalTo: "#password"
            },
            name: {
              required: true
            },
            phone: {
              required: true,
              phone: 'required'
            },
            url: {
              required: true,
              url: true
            },
            comment: {
              required: true
            },
            state: {
              required: true
            },
            platform: {
              required: true
            },
            subscription: {
              required: true
            },
            gender: {
              required: true,
            },
            agree: {
              required: true,
            }
          },
      
          messages: {
            email: {
              required: "Please provide a valid email.",
              email: "Please provide a valid email."
            },
            password: {
              required: "Please specify a password.",
              minlength: "Please specify a secure password."
            },
            state: "Please choose state",
            subscription: "Please choose at least one option",
            gender: "Please choose gender",
            agree: "Please accept our policy"
          },
      
      
          highlight: function (e) {
            $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
          },
      
          success: function (e) {
            $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
            $(e).remove();
          },
      
          errorPlacement: function (error, element) {
            if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
              var controls = element.closest('div[class*="col-"]');
              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
              else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
            }
            else if(element.is('.select2')) {
              error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
            }
            else if(element.is('.chosen-select')) {
              error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
            }
            else error.insertAfter(element.parent());
          },
      
          submitHandler: function (form) {
          },
          invalidHandler: function (form) {
          }
        });
      
        
        
        
        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        
        
        /**
        $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
          $(this).closest('form').validate().element($(this));
        });
        
        $('#mychosen').chosen().on('change', function(ev) {
          $(this).closest('form').validate().element($(this));
        });
        */
        
        
        $(document).one('ajaxloadstart.page', function(e) {
          //in ajax mode, remove remaining elements before leaving page
          $('[class*=select2]').remove();
        });
      })
    </script>
	</body>
</html>
