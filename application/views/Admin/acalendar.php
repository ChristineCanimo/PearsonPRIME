<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Pearson People Services</title>

    <meta name="description" content="with draggable and editable events" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/css/fullcalendar.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>interviewassets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo base_url(); ?>interviewassets/js/ace-extra.min.js"></script>

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
              <li>
                Calendar Of Activities
              </li>
            </ul><!-- /.breadcrumb -->

            
          </div>

          <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container"></div>
                            <div class="ace-settings-item"></div>
            </div><!-- /.ace-settings-container -->

            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                  <div class="col-sm-9">
                    <div class="space"></div>

                    <div id="calendar"></div>
                  </div>

                  <div class="col-sm-3">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4>Draggable events</h4>
                      </div>

                      <div class="widget-body">
                        <div class="widget-main no-padding">
                          <div id="external-events">
                            <div class="external-event label-grey" data-class="label-grey">
                              <i class="ace-icon fa fa-arrows"></i>
                              My Event 1
                            </div>

                            <div class="external-event label-success" data-class="label-success">
                              <i class="ace-icon fa fa-arrows"></i>
                              My Event 2
                            </div>

                            <div class="external-event label-danger" data-class="label-danger">
                              <i class="ace-icon fa fa-arrows"></i>
                              My Event 3
                            </div>

                            <div class="external-event label-purple" data-class="label-purple">
                              <i class="ace-icon fa fa-arrows"></i>
                              My Event 4
                            </div>

                            <div class="external-event label-yellow" data-class="label-yellow">
                              <i class="ace-icon fa fa-arrows"></i>
                              My Event 5
                            </div>

                            <div class="external-event label-pink" data-class="label-pink">
                              <i class="ace-icon fa fa-arrows"></i>
                              My Event 6
                            </div>

                            <div class="external-event label-info" data-class="label-info">
                              <i class="ace-icon fa fa-arrows"></i>
                              My Event 7
                            </div>

                            <label>
                              <input type="checkbox" class="ace ace-checkbox" id="drop-remove" />
                              <span class="lbl"> Remove after drop</span>
                            </label>
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

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?php echo base_url(); ?>interviewassets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="<?php echo base_url(); ?>interviewassets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>interviewassets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url(); ?>interviewassets/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>interviewassets/js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>interviewassets/js/bootbox.js"></script>

    <!-- ace scripts -->
    <script src="<?php echo base_url(); ?>interviewassets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url(); ?>interviewassets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
      jQuery(function($) {

/* initialize the external events
  -----------------------------------------------------------------*/

  $('#external-events div.external-event').each(function() {

    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
    // it doesn't need to have a start or end
    var eventObject = {
      title: $.trim($(this).text()) // use the element's text as the event title
    };

    // store the Event Object in the DOM element so we can get to it later
    $(this).data('eventObject', eventObject);

    // make the event draggable using jQuery UI
    $(this).draggable({
      zIndex: 999,
      revert: true,      // will cause the event to go back to its
      revertDuration: 0  //  original position after the drag
    });
    
  });




  /* initialize the calendar
  -----------------------------------------------------------------*/

  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();


  var calendar = $('#calendar').fullCalendar({
    //isRTL: true,
    //firstDay: 1,// >> change first day of week 
    
    buttonHtml: {
      prev: '<i class="ace-icon fa fa-chevron-left"></i>',
      next: '<i class="ace-icon fa fa-chevron-right"></i>'
    },
  
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    events: [
      {
      title: 'All Day Event',
      start: new Date(y, m, 1),
      className: 'label-important'
      },
      {
      title: 'Long Event',
      start: moment().subtract(5, 'days').format('YYYY-MM-DD'),
      end: moment().subtract(1, 'days').format('YYYY-MM-DD'),
      className: 'label-success'
      },
      {
      title: 'Some Event',
      start: new Date(y, m, d-3, 16, 0),
      allDay: false,
      className: 'label-info'
      }
    ]
    ,
    
    /**eventResize: function(event, delta, revertFunc) {

      alert(event.title + " end is now " + event.end.format());

      if (!confirm("is this okay?")) {
        revertFunc();
      }

    },*/
    
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar !!!
    drop: function(date) { // this function is called when something is dropped
    
      // retrieve the dropped element's stored Event Object
      var originalEventObject = $(this).data('eventObject');
      var $extraEventClass = $(this).attr('data-class');
      
      
      // we need to copy it, so that multiple events don't have a reference to the same object
      var copiedEventObject = $.extend({}, originalEventObject);
      
      // assign it the date that was reported
      copiedEventObject.start = date;
      copiedEventObject.allDay = false;
      if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
      
      // render the event on the calendar
      // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
      $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
      
      // is the "remove after drop" checkbox checked?
      if ($('#drop-remove').is(':checked')) {
        // if so, remove the element from the "Draggable Events" list
        $(this).remove();
      }
      
    }
    ,
    selectable: true,
    selectHelper: true,
    select: function(start, end, allDay) {
      
      bootbox.prompt("New Event Title:", function(title) {
        if (title !== null) {
          calendar.fullCalendar('renderEvent',
            {
              title: title,
              start: start,
              end: end,
              allDay: allDay,
              className: 'label-info'
            },
            true // make the event "stick"
          );
        }
      });
      

      calendar.fullCalendar('unselect');
    }
    ,
    eventClick: function(calEvent, jsEvent, view) {

      //display a modal
      var modal = 
      '<div class="modal fade">\
        <div class="modal-dialog">\
         <div class="modal-content">\
         <div class="modal-body">\
           <button type="button" class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>\
           <form class="no-margin">\
            <label>Change event name &nbsp;</label>\
            <input class="middle" autocomplete="off" type="text" value="' + calEvent.title + '" />\
           <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Save</button>\
           </form>\
         </div>\
         <div class="modal-footer">\
          <button type="button" class="btn btn-sm btn-danger" data-action="delete"><i class="ace-icon fa fa-trash-o"></i> Delete Event</button>\
          <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
         </div>\
        </div>\
       </div>\
      </div>';
    
    
      var modal = $(modal).appendTo('body');
      modal.find('form').on('submit', function(ev){
        ev.preventDefault();

        calEvent.title = $(this).find("input[type=text]").val();
        calendar.fullCalendar('updateEvent', calEvent);
        modal.modal("hide");
      });
      modal.find('button[data-action=delete]').on('click', function() {
        calendar.fullCalendar('removeEvents' , function(ev){
          return (ev._id == calEvent._id);
        })
        modal.modal("hide");
      });
      
      modal.modal('show').on('hidden', function(){
        modal.remove();
      });


      //console.log(calEvent.id);
      //console.log(jsEvent);
      //console.log(view);

      // change the border color just for fun
      //$(this).css('border-color', 'red');

    }
    
  });


})
    </script>
  </body>
</html>
