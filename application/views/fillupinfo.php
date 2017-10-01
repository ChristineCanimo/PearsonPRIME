<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Applicant's Information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/bootsnav.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/interview.css">

        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/responsive.css" />

        <script src="assetsko/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	</head>

    <body>
            <center>
                <img src="<?php echo base_url()?>assetsko/img/Pearson-Logo2.png">
            </center>
            <form id="msform" action="<?php echo base_url(); ?>index.php/Interview/fillupinfo" method="post">
                <ul id="progressbar">
                    <li class="active">Personal Details</li>
                    <li>Educational Background</li>
                    <li>Interview Details</li> 
                </ul>

                <fieldset>
                    <center>
                    <h2 class="fs-title">Fill up Personal Details</h2>
                    <h3 class="fs-subtitle">Step 1</h3>
                    </center>

                  <input type="hidden" class="form-control input-md" placeholder="Enter First Name" name="ApplicantNumber" value=""/>

                  <label>First Name:</label>
                  <input type="text" class="form-control input-md" placeholder="Enter First Name" name="FirstName" required/>

                  <label>Middle Name:</label>
                  <input type="text" class="form-control input-md" placeholder="Enter Middle Name" name="MiddleName" required/>

                  <label>Last Name:</label>
                  <input type="text" class="form-control input-md" placeholder="Enter Last Name" name="LastName" required/>

                  <label>City Address:</label>
                  <div class="form-group">
                    <input type="text" class="form-control input-md" placeholder="Enter City Address" name="Address" required/>
                  </div>

                  <label>Email Address:</label>
                  <div class="form-group">
                    <input type="email" class="form-control input-md" placeholder="(e.g juantamad@yahoo.com)" name="Email" required/>
                  </div>

                  <div class="form-group">
                    <label>Gender:</label>
                    <select name="Gender">
                      <option value="" name="gender" required=""></option>
                      <option value="Male" name="gender" required="">Male</option>
                      <option value="Female" name="gender" required="">Female</option>
                    </select>
                  </div>

                  <label>Contact:</label>
                  <div class="form-group">
                    <input type="tel" class="form-control input-md" placeholder="Enter Contact" name="Contact" required/>
                  </div>

                  <label>Date of Birth:</label>
                  <div class="form-group">
                    <input type="date" class="form-control input-md" placeholder="Enter Birthday" name="Birthday" required/>
                  </div>

                    <input type="hidden" name="Date_added" value="<?php date_default_timezone_set("Asia/Manila"); echo date("Y/m/d h:i:sa") ?>"/>
<br>
                  <div class="form-group">

                    <input type="submit" class="btn btn-block btn-lg btn-primary" value="Next" />
                    <a href="<?php echo base_url(); ?>index.php/Interview/cancel" class="btn btn-block btn-lg btn-primary">Cancel</a>
                  </div>
                </fieldset>
        </form>
          <br>
          <br>
        <!-- JS includes -->



        <script src="<?php echo base_url(); ?>assetsko/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assetsko/js/main.js"></script>

    </body>
</html>
