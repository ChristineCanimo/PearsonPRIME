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

  <style>
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
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
          <a href="<?php echo base_url(); ?>index.php/Employees/addnew" class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #EA067E"><img src="<?php echo base_url();?>images/addperson2.png" alt="">
            </a>
        </div>

        <div class="w3-col m2">
          <div class="">
          <a href="<?php echo base_url(); ?>index.php/Employees/profile" class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #FFB81C"><img src="<?php echo base_url();?>images/persons2.png" alt=""><br>
            </a>
            </div>
        </div>

        <div class="w3-col m2">
          <a href="<?php echo base_url(); ?>index.php/Employees/referrals" class="w3-button w3-margin  w3-right w3-text-white w3-round-large" style="background-color: #84BD00"><img src="<?php echo base_url();?>images/incentives2.png" alt="">
            </a>
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

  <div class="w3-padding-24 w3-col m8  w3-white w3-round-large" style="padding: 70px;">
  <h1> Sign Up New HR Administrator</h1><br>
    <div class="w3-row-padding">
      <div class="w3-col m5">

      <div class="alert" style="color: #007fa3;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Success!</strong> The new HR Admministrator has been added.
      </div>

        <form role="search" action="<?php echo base_url(); ?>index.php/Login_c/reg_validation" method="post">
        <h3>Username:</h3>
        <input type="text" name=Username class="w3-input w3-border w3-round-large w3-white"><br>
        <h3>Password:</h3>
        <input type="password" name="Password" class="w3-input w3-border w3-round-large w3-white"><br>
        <h3>Person Number:</h3>
        <input type="Number" name="PersonNumber" class="w3-input w3-border w3-round-large w3-white">
      </div>
      <div class="w3-col m1">
      &nbsp;
      </div>

      <div class="w3-row-padding w3-margin-top">
      <button class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #DB0020">Reset</button>
      <button class="w3-button w3-margin w3-right w3-text-white w3-round-large" style="background-color: #DB0020;">Submit</button>
      </div>
        </form>
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
    <div class="w3-modal-content w3-round-large" style="width: 300px;">
      <div class="w3-container" style="padding: 20px;">
        <span onclick="document.getElementById('signout').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <br>
          <center><h2>Are you sure you want to sign out?</h2></center>

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