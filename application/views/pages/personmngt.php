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
        <button onclick="document.getElementById('signout').style.display='block'" class="w3-bar-item w3-button">Sign Out</button>
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
          <div class="">
          <button class="w3-button w3-margin activebtn w3-right w3-text-white w3-round-large" style="background-color: #FFB81C"><img src="<?php echo base_url();?>images/persons2.png" alt=""><br>
          <i class="fa fa-angle-double-down w3-xlarge" aria-hidden="true"></i>
            </button>
            </div>
        </div>

        <div class="w3-col m2">
          <button class="w3-button w3-margin  w3-right w3-text-white w3-round-large" style="background-color: #84BD00"><img src="<?php echo base_url();?>images/incentives2.png" alt="">
            </button>
      </div>

      <div class="w3-col m2">
          &nbsp;
        </div>
</div> 

<br>
<div class="w3-row-padding">

  <div class="w3-col m2">
  &nbsp;
  </div>

  <div class="w3-padding-24 w3-col m8  w3-white w3-round-large">



  <h1> Person Management: Search</h1><br>
    <div class="w3-row-padding">
      <div class="w3-col m5">
        <form role="search" action="<?php echo base_url(); ?>index.php/Login_c/tempologin" method="post">
        <h3>Name:</h3>
        <input type="text" class="w3-input w3-border w3-round-large w3-white"><br>
        <h3>Person Number:</h3>
        <input type="Number" class="w3-input w3-border w3-round-large w3-white">
      </div>
      <div class="w3-col m1">
      &nbsp;
      </div>
      <div class="w3-col m5">
      <h3>Effective As-of Date:</h3>
        <input type="date" class="w3-input w3-border w3-round-large w3-white""><br>
        <pre class="w3-right">**Atleast one is required.</pre>
      </div>
      <div class="w3-row-padding w3-margin-top">
      <button class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #DB0020">Reset</button>
      <button class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #DB0020;">Search</button>
      </div>
        </form>
    </div>
        <div class="w3-row-padding">
          <table class="w3-table-all w3-hoverable w3-cursor">
    <thead>
      <tr class="w3-light-grey">
        <th>Name</th>
        <th>Person Number</th>
        <th>Country</th>
        <th>Assignment Status</th>
        <th>Termination Date</th>
      </tr>
    </thead>
    <tr>
      <td><a href="<?php echo base_url(); ?>index.php/Employees/profile">Zayin May Penaflor</td>
      <td>3021056</td>
      <td>Philippines</td>
      <td>Active</td>
      <td></td>
      </a>
    </tr>
    <tr>
      <td><a href="<?php echo base_url(); ?>index.php/Employees/index">Eve</td>
      <td>Jackson</td>
      <td>United Kingdom</td>
      <td>Inactive</td>
      <td>21-Aug-2017</td>
      </a>
    </tr>
  </table>

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

<div id="signout" class="w3-modal">
    <div class="w3-modal-content w3-round-large" style="width: 500px;">
      <div class="w3-container" style="padding: 30px;">
        <span onclick="document.getElementById('signout').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <center><h1>LOGOUT Confirmation</h1></center>
        <br>
          <center><h2>Are you sure you want to logout?</h2></center>

            <a data-dismiss="modal" style="background-color: #DB0020" class="w3-button w3-text-white w3-round-large w3-right w3-margin-right">No</a></button>
            <a href="<?php echo base_url();?>index.php/Login_c/logout"  class="w3-button w3-text-white w3-margin-right w3-right w3-round-large" style="background-color: #DB0020">Yes</a></button><br>
        </div>
      </div>
      </div>
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
</body>
</html>