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
            <form id="msform" action="<?php echo base_url(); ?>index.php/Interview/insertinitial" method="post">
                <ul id="progressbar">
                    <li>Personal Details</li>
                    <li>Educational Background</li>
                    <li class="active">Interview Details</li>
                </ul>


                <fieldset>
                    <h2 class="fs-title">Initial Interview</h2>
                    <h3 class="fs-subtitle">Step 3</h3>

                    <input type="hidden" class="form-control input-md" placeholder="Enter First Name" name="ApplicantNumber" value=""/>
                  <label>Interviewer:</label>
                  <input type="text" class="form-control input-md" placeholder="Interviewer" name="Interviewer" required/>
                  <label>Applicant Name:</label>
                  <input type="text" class="form-control input-md" placeholder="Name" name="Applicant" required/>
                  <label>Position Desired:</label>
                  <input type="text" class="form-control input-md" placeholder="Position" name="DesiredPosition" required/>
                  <label>Comments:</label>
                  <input type="textarea" class="form-control input-md" placeholder="Comments" name="Comments" required/>
                  <input type="checkbox" name="Pass" value="Passed">Pass<br>
                  <input type="checkbox" name="Fail" value="Failed">Fail<br>


                  <label>Department:</label>
                  <input type="text" class="form-control input-md" placeholder="Department" name="Department" required/>
                  <label>Manager:</label>
                  <input type="text" class="form-control input-md" placeholder="Manager" name="Manager" required/>
                  <label>Position:</label>
                  <input type="text" class="form-control input-md" placeholder="Position" name="Position" required/>


                  <div class="form-group">

                    <input type="submit" class="btn btn-block btn-lg btn-primary" value="Submit"/>

                    <a href="<?php echo base_url(); ?>index.php/Interview/backeduc" class="btn btn-block btn-lg btn-primary">Previous</a>

                    <a href="<?php echo base_url(); ?>index.php/Interview/cancel" class="btn btn-block btn-lg btn-primary">Cancel</a>
                  </div>
                </fieldset>
        </form>
          
        <!-- JS includes -->



        <script src="<?php echo base_url(); ?>assetsko/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assetsko/js/main.js"></script>

    </body>
</html>
