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
<?php  
 $connect = mysqli_connect("localhost", "root", "", "login");  
 $query ="SELECT * FROM `interview` JOIN `educinfo` ON Interview.ApplicantNumber=educinfo.ApplicantNumber WHERE interview.Status = 'For Initial'";  
 $result = mysqli_query($connect, $query);  
 ?>  

								<div class="row">
									<div class="col-xs-12">
									   
										<div class="page-header">
							              <h1>
							                <b>Initial Interview</b>
							                <small>
							                  <i class="ace-icon fa fa-angle-double-right"></i>
							                  Test for Communication Skills
							                </small>
							              </h1>
							            </div><!-- /.page-header -->



                    

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="widget-header">
                          <h4 class="widget-title"><b>Applicant's Information</b></h4>
                        </div>

                        <div class="widget-body">
                          <div class="widget-main">
                          	<form method="Post" if="initial" action="<?php echo base_url();?>index.php/interviewprocess/ainsert_initial">
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

                                  <?php echo $record->FirstName;?> <?php echo $record->LastName;?>
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
                                      <div style="padding: 5px;">
                                        <h5 class="widget-title blue"><b>To be filled up by the Interviewer</b></h5>
                                    </div>
                                	</td>
                                </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8">Position Desired : </label>
                                    </div>
                                    </td>
                                     <td>
                                      <?php echo $record->Desired;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div style="padding: 5px;">
                              <label style="float: right;" for="form-field-8"><?php if($record->Employee != Null) echo "</del> Referred By : </del> "; ?></label>
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
                    <div class="col-md-offset-4 col-md-9">

                      <a href="<?php echo base_url();?>index.php/Interview/" class="btn btn-primary" >
                        <i class="ace-icon fa fa-arrow-left bigger-110"></i>
                        Back
                      </a>
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
		<script src="interviewassets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='interviewassets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="interviewassets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="interviewassets/js/jquery.dataTables.min.js"></script>
		<script src="interviewassets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="interviewassets/js/dataTables.buttons.min.js"></script>
		<script src="interviewassets/js/buttons.flash.min.js"></script>
		<script src="interviewassets/js/buttons.html5.min.js"></script>
		<script src="interviewassets/js/buttons.print.min.js"></script>
		<script src="interviewassets/js/buttons.colVis.min.js"></script>
		<script src="interviewassets/js/dataTables.select.min.js"></script> 
		


		<!-- ace scripts -->
		<script src="interviewassets/js/ace-elements.min.js"></script>
		<script src="interviewassets/js/ace.min.js"></script>

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
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
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