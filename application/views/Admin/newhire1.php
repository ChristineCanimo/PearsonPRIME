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

      
        
        

      
      </div>

      <div class="main-content">
        <div class="main-content-inner">
          

          <div class="page-content">
            <!--/ .can add other functions here-->

            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
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

 $query3 ="SELECT * FROM `universities`";  
 $result3 = mysqli_query($connect, $query3);  
 
 $courses4 ="SELECT * FROM `courses`";  
 $result4 = mysqli_query($connect, $courses4); 

 ?>                    <!-- div.dataTables_borderWrap -->
              <ul id="progressbar main-content-inner">
                <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/adminforms/addnewhire" method="post">

                  <h4><b>Personal Information:</b></h4>
                  <br>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Full Name: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="First and Last Name" name="FullName" class="col-xs-10 col-sm-5" value ="" required/>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Username: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="Enter your username" name="Username" class="col-xs-10 col-sm-5" required value=""/>

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Password: </b></label>

                    <div class="col-sm-9">
                      <input type="password" id="form-field-1" placeholder="Enter your password" name="Password" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> First Name: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="First Name" name="First" class="col-xs-10 col-sm-5" value ="" required/>
                      <input type="hidden" id="form-field-1" placeholder="First Name" name="AppNumber" class="col-xs-10 col-sm-5" value ="" required/>
                      
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Middle Name: </b></label>

                    <div class="col-sm-9">
                      <input type="text" value ="" id="form-field-1" placeholder="Middle Name" name="Middle" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Last Name: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" value ="" placeholder="Last Name" name="Last" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Address Line: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="House No, Street, Barangay" name="EAddressLine" class="col-xs-10 col-sm-5" value ="" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> City Address: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" value ="" placeholder="City" name="ECity" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Personal Email Address: </b></label>

                    <div class="col-sm-9">
                      <input type="email" id="form-field-1" placeholder="Personal Email" value ="" name="EEmail" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Work Email Address: </b></label>

                    <div class="col-sm-9">
                      <input type="email" id="form-field-1" placeholder="first.lastname@pearson.com" name="WorkEmail" class="col-xs-10 col-sm-5" value="" required/>
                    </div>
                  </div>

                  <div class="form-group">
                              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Gender: </b></label>
                              <div class="col-sm-9">
                              <select name="EGender" required="" id="form-field-1">
                                <option id="form-field-1" value =""></option>
                                <option id="form-field-1" value="Male" name="gender" required="">Male</option>
                                <option id="form-field-1" value="Female" name="gender" required="">Female</option>
                              </select>
                            </div>
                            </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Contact Number: </b></label>

                    <div class="col-sm-9">
                      <input type="tel" id="form-field-1" placeholder="Contact" value ="" name="ContactNumber" class="col-xs-10 col-sm-5" required/>
                    </div>
                  </div>

                            <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Date of Birth: </b></label>
                    <div class="col-sm-9">
                              <input type="date" class="col-xs-10 col-sm-5" value ="" placeholder="Enter Birthday" name="DateofBirth" required/>
                            </div>
                            </div>


                   <input type="hidden" name="Date_added" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>">
                   
          <div class="space-2"></div>

                  <h4><b>Educational Background:</b></h4>    
                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Tertiary </b></label>

                    <div class="col-sm-4">
                       <select class="chosen-select form-control col-xs-10 col-sm-5" id="Tschool" name="Tertiary" id="" placeholder="University/College">
                            <option value="">Select University</option>

                                <?php
                                   foreach($result3 as $row)
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

                    <div class="col-sm-4">
                          <select class="chosen-select form-control col-xs-10 col-sm-5" name="Degree" id="" placeholder="Course">
                            <option value="">Select Course</option>

                                <?php
                                  foreach($result4 as $row)
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

                    <div class="col-sm-4">
                      <select class="chosen-select form-control" id="form-field-select-3" name="Edfrom" id="" placeholder="Year/College">

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

                    <div class="col-sm-4">
                      <select class="chosen-select form-control" id="form-field-select-3" name="Edto" id="" placeholder="Year/College">

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
                      <div class="control-group">
                            <div class="checkbox">
                              <label class="col-sm-4 control-label">
                                <input class="form-field-checkbox ace" type="checkbox" name="EStatus" value="Graduated"   />
                                <span class="lbl"> Graduated </span>
                              </label>
                            </div>
                          </div>
                    </div>
                  </div>

                  <input type="hidden" name="Date_added" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>">

              <div class="space-2"></div>

                 <h4><b>Employment Background:</b></h4>

                 <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Company: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="Company" id="Company" value ="" name="ECompany" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Job: </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="Job" value ="" id="Job" name="EmJob" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Duration </b></label>

                    <div class="col-sm-9">
                      <input type="text" id="form-field-1" placeholder="For how long?" id="Duration" value ="" name="EmDuration" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>

              <div class="space-2"></div>

                   <h3><b>Employment information:</b></h3>

                   <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Date of Hire: </b></label>
                              <div class="col-sm-9">
                              <input type="date" style="padding: 5px;" class="form-control" placeholder="Date of Hire" name="HireDate" value="" required="">
                            </div>
                   </div>

                   <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Referred? </b></label>

                    <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="control-group">
                        <div class="radio">
                          <label>
                            <input onclick="pass()" id="yesCheck" name="" value="1" type="radio" class="ace" />
                            <span class="lbl"> Yes</span>
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            <input onclick="fail()" id="noCheck" name="" value="0" type="radio" class="ace" />
                            <span class="lbl"> No</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.row -->

                  </div>

                  <section id="mypass" form="msform" style="display: none;">
                  <div class="form-group">

                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> By: </b></label>

                          <div class="col-sm-9">
                    
                          <select class="chosen-select form-control" name="Referrer" id="form-field-1" data-placeholder="Employee Name">
                                <option></option>
                                <?php foreach($taos as $tao){?>
                                <option value="<?php echo $tao->First;?> <?php echo $tao->Last;?>"><?php echo $tao->First;?> <?php echo $tao->Last;?></option>
                                <?php }?>
                          </select>
                         </div>     
                    </div>
                  </section>
                            

                   <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Department: </b></label>
                              <div class="col-sm-9">
                                <select class="chosen-select form-control depart" name="EDepartment" id="choose" data-placeholder="Department Name">
                                     <option value="">Select Department</option>
                                
                              </select>
                            </div>
                   </div>

                 <div class="form-group">
                              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Job Title: </b></label>
                              <div class="col-sm-9">
                                 <select class="chosen-select form-control jobs" style="padding: 5px;" name="JobTitle" id="form-field-1" data-placeholder="Job Title" >
                                             <option value="">Select Job</option>
                                
                              </select>
                            </div>
                  </div>


                   <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> User Type: </b></label>
                              <div class="col-sm-9">
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
                </div>
                  </div>
                </div>

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

          <form action="<?php echo base_url(); ?>index.php/adminforms" method="post">

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
           $('.depart').find("option:eq(0)").html("");
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
           $('.jobs').find("option:eq(0)").html("");
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