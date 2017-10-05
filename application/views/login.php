<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Pearson HR - Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/slick/slick.css"> 
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/slick/slick-theme.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/iconfont.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/bootsnav.css">

        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assetsko/css/responsive.css" />

        <script src="assetsko/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
         <style>
		.bg { 
	    background-image: url("assetsko/img/bg1.jpg");
	    height: 100%; 
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
		}
		.modal-backdrop {
	    position: fixed;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    left: 0;
	    z-index: auto;
	    background-color: #000;
	}
		</style>
	</head>

    <body class="bg">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->



            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Pearson HR</strong></h2>
                                            <h1 class="text-white">Learning makes us</h1>
                                            <h3 class="text-white">- We hire the  <strong>Best</strong> people -</h3>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Pearson HR</strong></h2>
                                            <h1 class="text-white">- B I D A -</h1>
                                            <h3 class="text-white">Brave | Imaginative | Decent | Accountable</h3>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Pearson HR</strong></h2>
                                            <h1 class="text-white">To help people make progress through better learning</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into Education -</h3>
                                        </div>

                                    </div><!-- End off slid item -->
                                </div>
                                <div class="home_btns m-top-40">
                                            <a href="" class="btn btn-primary m-top-20" data-toggle="modal" data-target="#myModal">Login</a>
                                        </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->
            <!-- Modal -->
  <div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">

       <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Please.</h4>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <form action="<?php echo base_url(); ?>index.php/Login/login" method="post">

              <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			      <input id="email" type="text" class="form-control" name="Username" placeholder="Username" required="">
			    </div><br>
			    <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			      <input id="password" type="password" class="form-control" name="Password" placeholder="Password" required="">
			    </div>
			    <br>
               <div class="form-group">
                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

 
        <!-- JS includes -->

        <script src="assetsko/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assetsko/js/vendor/bootstrap.min.js"></script>
        <script src="assetsko/js/owl.carousel.min.js"></script>
        <script src="assetsko/js/jquery.magnific-popup.js"></script>
        <script src="assetsko/css/slick/slick.js"></script>
        <script src="assetsko/css/slick/slick.min.js"></script>
        <script src="assetsko/js/jquery.collapse.js"></script>



        <script src="assetsko/js/plugins.js"></script>
        <script src="assetsko/js/main.js"></script>

    </body>
</html>
