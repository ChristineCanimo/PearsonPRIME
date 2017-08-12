<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Person Management</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="<?php echo base_url()?>css/background.css" rel="stylesheet">
  <link href="<?php echo base_url()?>css/font.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="w3-bar  w3-margin-bottom" style="background-color: midnightblue;">
    <a href="#" class="w3-bar-item"><img src="<?php echo base_url();?>images/pearson-white1.png" alt="pearson">
    </a>
    <div class="w3-bar-item w3-dropdown-click w3-right" style="padding: 0px;margin: 20px 20px;">
      <button class="w3-button w3-hover-white w3-text-white" onclick="navdrpdown()">
        Zayin May Penaflor <i class="fa fa-caret-down"></i>
      </button>
      <div id="demo" class="w3-dropdown-content w3-bar-block w3-card-2">
        <a href="#" class="w3-bar-item w3-button">Change Password</a>
        <a href="#" class="w3-bar-item w3-button">Sign Out</a>
      </div>
    </div>
  </div>

<div class="w3-row-padding w3-center">
        <div class="w3-col m3">
          &nbsp;
        </div>
        <div class="w3-col m2">
          <button class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #EA067E"><img src="<?php echo base_url();?>images/addperson2.png" alt="">
            </button>
        </div>

        <div class="w3-col m2">
          <button class="w3-button w3-margin activebtn w3-right w3-text-white w3-round-large" style="background-color: #FFB81C"><img src="<?php echo base_url();?>images/persons2.png" alt=""><br>
          <i class="fa fa-angle-double-down w3-xlarge" aria-hidden="true"></i>
            </button>
        </div>

        <div class="w3-col m2">
          <button class="w3-button w3-margin  w3-right w3-text-white w3-round-large" style="background-color: #84BD00"><img src="<?php echo base_url();?>images/incentives2.png" alt="">
            </button>
      </div>

      <div class="w3-col m2">
          &nbsp;
        </div>
</div> 

<div class="w3-row-padding">
  
  <div class="w3-col m2">
  &nbsp;
  </div>

  <div class="w3-padding-24 w3-col m8  w3-white w3-round-large">

              <div class="w3-row-padding">

            <div class="w3-col m6 ">
            <h1>Zayin May Penaflor</h1>
            <h3>Person Number: 3021056</h3><br>
              </div>
            <div class="w3-col m6 ">
            <a href="<?php echo base_url(); ?>index.php/Employees/index" class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #505759">Done</a>
            </div>
      <div class="w3-container">

            <div class="w3-bar w3-text-white" style="background-color: #005a70">
              <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'Employment')">Employment</button>
              <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Employee')">Employee</button>
              <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Referrals')">Referrals</button>
            </div>
            
            <div id="Employment" class="w3-container w3-border city">
              <br>
              <div class="w3-row">
              <div class="w3-col m6 ">
              <h3>Manage Employment</h3>
               </div>
               <div class="w3-col m6 ">
              <a href="<?php echo base_url(); ?>index.php/Employees/employmentedit" class="w3-button w3-margin-right w3-right w3-text-white w3-round-large" style="background-color: #505759">Edit</a>
              </div>
               </div>

              <div class="w3-col m6 ">
              <p>
              <b>Legal Employer:</b> Pearson Services Management Philippines, Inc. <br>
              <b>Hire Date:</b> 06/05/1997 <br><br>

              <h3>Job Details</h3>
              <b>Business Unit:</b> Human Resources<br>
              <b>Person Type:</b> Limited Term Employee<br>
              <b>Job:</b> Intern<br>
              <b>Assignment Name:</b> Workforce and Assignment Trainee<br>
              <b>Grade:</b> A<br>
              <b>Department:</b> HR Operations - PPS Manila<br>
              <b>Location:</b> PH-Manila-Makati-Trident Tower<br>
              <b>Assignment Category:</b> Full-time temporary<br><br>

              <h3>Manager Details</h3>
              <b>Name:</b> Mary Hope Mercado
              </p>
              </div>

              <div class="w3-col m1">
              &nbsp;
              </div>

              <div class="w3-col m4">

              <p>
              <b>Country:</b> Philippines<br>
              <b>Assignment Status:</b> Active
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <b>Type:</b> Line Manager
              </p>
              </div>
            </div>

            <div id="Employee" class="w3-container w3-border city" style="display:none">
              <br>
              <div class="w3-row">
              <div class="w3-col m6 ">
              <h3>Manage Employee</h3>
               </div>
               <div class="w3-col m6 ">
              <a href="<?php echo base_url(); ?>index.php/Employees/employedit" class="w3-button w3-margin-right w3-right w3-text-white w3-round-large" style="background-color: #505759">Edit</a>
              </div>
               </div>

              <div class="w3-col m6 ">
              <p>
              <h3>Name</h3>
              <b>Title:</b> Ms.<br>
              <b>Last Name:</b> Penaflor<br>
              <b>First Name:</b> Zayin May<br>
              <b>Middle Name:</b> Azuelo<br>
              <br>

              <h3>Addresses</h3>
              <b>Home Address:</b> 226 Parklane Ext Sangandaan<br>Quezon City<br>Philippines<br>
              <b>Primary Mailing:</b> 226 Parklane Ext Sangandaan<br>Quezon City<br>Philippines<br><br>
              <h3>Communication Methods</h3>
              <b>Home Mobile Phone:</b> 09367097503<br><br>
              <b>Home E-mail:</b> zaytino11@gmail.com<br>
              <b>Work E-mail:</b> zayin.penaflor@pearson.com<br>
              </p>
              </div>

              <div class="w3-col m1">
              &nbsp;
              </div>

              <div class="w3-col m4">

              <p>
              <b>Date of Birth:</b> 11-Sep-1997<br>
              <b>Gender:</b> Female
              </p>
              </div>
            </div>

            <div id="Referrals" class="w3-container w3-border city" style="display:none">
              <h2>Referrals</h2>
              <p>Tokyo is the capital of Japan.</p>
            </div>
          </div>
          



</div>
  </div>


</div>

<div class="w3-row-padding">

  <div class="w3-col m2">
  &nbsp;
  </div>


<footer class="w3-row-padding w3-col m8 w3-round-large w3-text-white">

<div class="w3-col m4">
<h4 class=" w3-center ">ABOUT PEARSON</h4>
<h5>Learning isn’t a destination, starting and stopping at the classroom door. It’s a never-ending road of discovery, challenge, inspiration, and wonder.</h5>
<h6>In today's world, education isn’t just about gaining qualifications: it's about helping learners at every stage of the journey discover a love of learning that helps provide opportunities throughout their lives.
<br>
Because wherever learning flourishes, so do people.</h6>

</div>

<div class="w3-col m4">
<h4 class=" w3-center ">Descriptions?</h4>
</div>

<div class="w3-col m4">
<h4 class=" w3-center ">Ewan ko na!</h4>
</div>


</footer>

<div class="w3-col m2">
&nbsp;
</div>
</div>


<script>
function navdrpdown() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-blue";
}
</script>
</body>
</html>