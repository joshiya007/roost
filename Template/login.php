<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roost - Material Design Real Estate</title>

        <!-- Vendors -->

        <!-- Material design colors -->
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS animations -->
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

        <!-- Select2 - Custom Selects -->
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- NoUiSlider - Input Slider -->
        <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">

        <!-- Site -->
        <link rel="stylesheet" href="css/app_1.min.css">
        <link rel="stylesheet" href="css/app_2.min.css">

        <!-- Page Loader JS -->
        <script src="js/page-loader.min.js" async></script>
    </head>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        <header id="header">
            <?php include 'header-top.php' ?>
            <?php include 'header-main.php' ?>
        </header>

        <section class="section">
            <div class="container">
                <div class="submit-property">
                    <div class="tab-content submit-property__content">
                        <div class="tab-pane fade in active" id="submit-property-1">
                            <div class="card">
                                <div class="card__header">
                                    <h3>Secure Login</h3>
                                    <small>Access all your saved properties, searches, notes and more</small>
                                </div>
                                <form class="card__body">
                                    <form class="tab-pane active in fade" id="top-nav-loginuser">
                                        <div class="form-group form-group--left form-group--float">
                                            <input type="text" class="form-control" placeholder="">
                                            <label>Email Address/Mobile Number</label>
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="form-group form-group--float">
                                            <input type="password" class="form-control" placeholder="">
                                            <label>Password</label>
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="text-center">
                                            <a href="#submit-property-2" data-toggle="tab">Trouble logging in?</a>
                                        </div>

                                        <a href="index.php" class="btn btn--circle btn-success submit-property__button">
                                            <i class="zmdi zmdi-check"></i>
                                        </a>
                                    </form>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="submit-property-2">
                            <div class="card">

                                <div class="card__header">
                                    <a href="#submit-property-1" class="top-nav__back" data-toggle="tab"></a>
                                    <h2>Forgot Your Password</h2>
                                    <small>Step 1</small>
                                </div>


                                <form class="card__body">
                                    <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">

                                        <div class="form-group form-group--float">
                                            <input type="text" class="form-control" placeholder="">
                                            <label>Mobile Number</label>
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <a href="#submit-property-3" data-toggle="tab" class="btn btn--circle btn-warning submit-property__button">
                                            <i class="zmdi zmdi-long-arrow-right"></i>
                                        </a>
                                    </form>
                                    
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="submit-property-3">
                            <div class="card">
                                <div class="card__header">
                                    <a href="#submit-property-2" class="top-nav__back" data-toggle="tab"></a>
                                    <h2>Forgot Your Password</h2>
                                    <p>Step 2</p>
                                </div>

                                <form class="card__body">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" placeholder="">
                                        <label>One Time Password</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" placeholder="">
                                        <label>New Password</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control" placeholder="">
                                        <label>Confirm Passwod</label>
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <a href="#submit-property-5" data-toggle="tab" class="btn btn--circle btn-success submit-property__button">
                                        <i class="zmdi zmdi-check"></i>
                                    </a>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="submit-property-5">
                            <div class="card">
                                <div class="submit-property__success">
                                    <i class="zmdi zmdi-check"></i>

                                    <h2>Successful!</h2>
                                    <p>You have successfully changed password.</p>
                                </div>

                                <a href="#submit-property-1" data-toggle="tab" class="">
                                    <p>Goto Login</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="ie-warning__inner">
                <ul class="ie-warning__download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
        <![endif]-->


        <!-- Javascript -->

        <!-- jQuery -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Waves button ripple effects -->
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Select 2 - Custom Selects -->
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- Slick Carousel - Custom Alerts -->
        <script src="vendors/bower_components/slick-carousel/slick/slick.min.js"></script>

        <!-- NoUiSlider -->
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

        <!-- Autosize - Textarea -->
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Demo only -->
        <script src="js/demo/demo.js"></script>
    </body>
</html>