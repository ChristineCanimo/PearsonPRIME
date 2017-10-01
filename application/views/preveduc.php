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
            <form id="msform" action="<?php echo base_url(); ?>index.php/Interview/updateeduc" method="post">
                <ul id="progressbar">
                    <li>Personal Details</li>
                    <li class="active">Educational Background</li>
                    <li>Interview Details</li>
                </ul>

                
                <fieldset>
                    <h2 class="fs-title">Fill up Educational Details</h2>
                    <h3 class="fs-subtitle">Step 2</h3>
                    <?php foreach($educs as $educ){?>
                    <input type="hidden" class="form-control input-md" placeholder="Enter First Name" name="ApplicantNumber" value="<?php echo $educ->ApplicantNumber;?>"/>

                  <label>Tertiary:</label>
                  <input type="text" class="form-control input-md" placeholder="School" name="Tschool" value="<?php echo $educ->Tschool;?>" required/>
                  <label>Degree:</label>
                  <input type="text" class="form-control input-md" placeholder="Degree" name="Tdegree" value="<?php echo $educ->Tdegree;?>" required/>
                  <label>From:</label>
                  <input type="text" class="form-control input-md" placeholder="Year" name="Tfrom" value="<?php echo $educ->Tfrom;?>" required/>
                  <label>To:</label>
                  <input type="text" class="form-control input-md" placeholder="Year" name="Tto" value="<?php echo $educ->Tto;?>" required/>
                  <input type="checkbox" name="Tgraduated" value="graduated">Graduated<br>


                  <label>Secondary:</label>
                  <input type="text" class="form-control input-md" placeholder="School" name="Sschool" value="<?php echo $educ->Sschool;?>" required/>
                  <label>From:</label>
                  <input type="text" class="form-control input-md" placeholder="Year" name="Sfrom" value="<?php echo $educ->Sfrom;?>" required/>
                  <label>To:</label>
                  <input type="text" class="form-control input-md" placeholder="Year" name="Sto" value="<?php echo $educ->Sto;?>" required/>
                  <input type="checkbox" name="Sgraduated" value="graduated">Graduated<br>


                  <label>Primary:</label>
                  <input type="text" class="form-control input-md" placeholder="School" name="Pschool" value="<?php echo $educ->Pschool;?>" required/>
                  <label>From:</label>
                  <input type="text" class="form-control input-md" placeholder="Year" name="Pfrom" value="<?php echo $educ->Pfrom;?>" required/>
                  <label>To:</label>
                  <input type="text" class="form-control input-md" placeholder="Year" name="Pto" value="<?php echo $educ->Pto;?>" required/>
                  <input type="checkbox" name="Pgraduated" value="graduated">Graduated<br>
                  

                  <h2 class="fs-title">Fill up Previous Employments</h2>

                  <label>Company:</label>
                  <input type="text" class="form-control input-md" placeholder="Company" name="company" value="<?php echo $educ->company;?>" />
                  <label>Company Position:</label>
                  <input type="text" class="form-control input-md" placeholder="Position" name="position" value="<?php echo $educ->position;?>" />
                  <label>Work Duration:</label>
                  <input type="text" class="form-control input-md" placeholder="Duration" name="duration" value="<?php echo $educ->duration;?>" />


                  <div class="form-group">
                    <input type="submit" class="btn btn-block btn-lg btn-primary next action-button" value="Next" />

                    <a href="<?php echo base_url(); ?>index.php/Interview/backinfo" class="btn btn-block btn-lg btn-primary">Previous</a>
                  </div>
                  <?php }?>
                </fieldset>
        </form>
          
        <!-- JS includes -->



        <script src="<?php echo base_url(); ?>assetsko/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assetsko/js/main.js"></script>

    </body>
</html>
