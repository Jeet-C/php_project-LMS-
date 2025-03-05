
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>NOTES-BANK</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images\logos\logo_img.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="student/js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

    <!-- Modal -->
    <!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Customer Login</h4>
                </div>
                <div class="modal-body customer-box row">
                    <div class="col-md-12">
                        Nav tabs
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                        </ul>
                        Tab panes
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="exampleInputPassword1" name="email"
                                                placeholder="Email" type="email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="form-control" id="exampleInputPassword1" name="pass"
                                                placeholder="Password" type="password">
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <button type="submit" name="submit"
                                                class="btn btn-light btn-radius btn-brd grd1">
                                                Submit
                                            </button>
                                            <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>
                             
                                <?php
                                   
                                   //    if(isset($_POST['submit'])){
                                   //       $em=$_POST['email'];
                                   //        $pa=$_POST['pass'];
                                   //        if($_POST['email']!="" && $_POST['pass']!=""){
                                   //        $se="SELECT * FROM admin WHERE email='$em' And password='$pa'"; 
                                   //         $ra=$con->query($se);
                                          
                                   //         if($ra->num_rows>0){
                                   //              $row=$ra->fetch_assoc();
                                   //              $_SESSION['us']=$row['name'];
                                   //             header("location:admin/dashboard.php");
                                   //         }
                                   //        }
                                       //    if($role=="teacher"){
                                       //    $see="SELECT * FROM teacher WHERE email='$em'And role='$role' And password='$pa'";
                                       //    $rs=$con->query($see);
                                       //    if($rs->num_rows>0){
                                       //        $row=$rs->fetch_assoc();
                                       //       $_SESSION['us']=$row['name'];
                                             
                                       //       header("location:teacher/dashboard.php"); 
                                       //    }
                                       //    }
                                      // }
                                      //}
                                      
                                      ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- LOADER -->
    <div id="preloader">
        <div class="loading">
            <div class="finger finger-1">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-2">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-3">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-4">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="last-finger">
                <div class="last-finger-item"><i></i></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo_img1.jpg" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="#">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#cont">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div id="home" class="first-section" style="background-image:url('uploads/education_img_01.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="images/logos/logo_img.png" alt="image">
                                    <h2 data-animation="animated zoomInRight">Best <strong>Management courses</strong>
                                    </h2>
                                    <p class="lead" data-animation="animated fadeInLeft"></p>
                                    <a data-scroll href="student/dashboard.php"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Student Area</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- <button class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight" data-toggle="modal"
                                        data-target="#login">Teacher Area</button> -->
                                        <a href="login.php" class="btn btn-light btn-radius btn-brd effect-1 slide-btn">Teacher Area</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section" style="background-image:url('uploads/education_img_02.webp');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="images/logos/logo_img.png" alt="image">
                                    <h2 data-animation="animated zoomInRight">Find the right <strong>Education</strong>
                                    </h2>
                                    <p class="lead" data-animation="animated fadeInLeft"> </p>
                                    <a data-scroll href="student/dashboard.php"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Student Area</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- <button class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight" data-toggle="modal"
                                        data-target="#login">Teacher Area</button> -->
                                        <a href="login.php" class="btn btn-light btn-radius btn-brd effect-1 slide-btn">Teacher Area</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section" style="background-image:url('uploads/slider-03.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="images/logos/logo_img.png" alt="image">
                                    <h2 data-animation="animated zoomInRight">Best <strong>Shared Hosting</strong>
                                        Company</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive
                                        landing page template, you can promote your all hosting, domain and email
                                        services. </p>
                                    <a data-scroll href="student/dashboard.php"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Student Area</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- <button class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight" data-toggle="modal"
                                        data-target="#login">Teacher Area</button> -->
                                        <a href="login.php" class="btn btn-light btn-radius btn-brd effect-1 slide-btn">Teacher Area</a>



                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="about" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_04.jpg'); ">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers!
                    <br>Let's see what others say about Landigoo website template!
                </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>

                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>

                        </div>



                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    <section class="section nopad cac text-center">
        <a href="#">
            <h3>Interesting our awesome web design services? Just drop an email to us and get quote for free!</h3>
        </a>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-hosting-light.png" alt="">
                            <small>Web Hosting Template</small>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
                            bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis
                            dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.
                        </p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#cont">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12" id="cont">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">alexroy32456@gmail.com</a></li>
                            <li><a href="mailto:#">gm5094214@gmail.com</a></li>
                            <li>+91 9883270662</li>
                            <li>+91 7001543619</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-facebook"></i> 22.543 Likes</a></li>
                            <li><a href="#"><i class="fa fa-github"></i> 128 Projects</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i> 12.860 Followers</a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i> 3312 Shots</a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i>3331 Pins</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 Design By: <a
                            href="https://html.design/">html design</a> Distributed By: <a
                            href="https://themewagon.com/">ThemeWagon</a></p>
                </div>

                <div class="footer-right">
                    <form method="get" action="#">
                        <input placeholder="Subscribe our newsletter.." name="search">
                        <i class="fa fa-envelope-o"></i>
                    </form>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>


</body>

</html>