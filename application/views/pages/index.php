<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Person HR</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="<?php echo base_url()?>css/background.css" rel="stylesheet">
  <link href="<?php echo base_url()?>css/font.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="w3-bar  w3-margin-bottom" style="background-color: midnightblue;">
    <a href="#" class="w3-bar-item"><img src="<?php echo base_url();?>images/pearson-white1.png" alt="pearson">
    </a>
    <div class="w3-bar-item w3-right" style="padding: 0px;margin: 20px 20px;">
    <form action="<?php echo base_url(); ?>index.php/Login_c/login" method="POST">
    <input type="text" name="Username" class="w3-border w3-bar-item w3-white" placeholder="Username">
    <input type="password" name="Password" class=" w3-border w3-bar-item w3-white" placeholder="Password">&nbsp;
    <input type="submit" class="w3-bar-item w3-border w3-button w3-green" value="LOGIN">
    </form>
    </div>
    
  </div>


<div class="w3-row-padding">

  <div class="w3-col m2">
  &nbsp;
  </div>

  <div class="w3-padding-24 w3-col m8  w3-white w3-round-large">

    <div class="w3-row-padding">
   
        <div class="w3-content w3-round-large w3-center w3-section" style="max-width:1000px">
          <img class="mySlides" src="<?php echo base_url();?>images/11.gif" style="width:100%">
          <img class="mySlides" src="<?php echo base_url();?>images/22.png" style="width:100%">
          <img class="mySlides" src="<?php echo base_url();?>images/33.gif" style="width:100%">
          <img class="mySlides" src="<?php echo base_url();?>images/44.png" style="width:100%">
        </div>
    </div>
<br>
        <div class="w3-row-padding">
          <h1 class="w3-center">Our people</h1>
<h3>We hire the best people to help us deliver our mission and objectives across a variety of disciplines. People who share our values, improve results and drive initiatives, embracing innovation and technology to provide the best learning experience for students all over the world.
<br><br>
We’re proud of our people and of their talent, drive and enthusiasm. We have a simple but ambitious goal: to be the best company to work for in the world, so that our people have the skills to leave but choose to stay.</h3>

        </div>
  </div>

<br>
<div class="w3-col m2">
&nbsp;
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
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>