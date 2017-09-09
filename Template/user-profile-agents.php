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

        <!-- rateYo - Ratings -->
        <link rel="stylesheet" href="vendors/bower_components/rateYo/src/jquery.rateyo.css">

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
            <?php include "header-top.php" ?>
            <?php include "header-top.main" ?>
        </header>

        <section class="section">
            <div class="container container--sm">
                <header class="section__title text-left">
                    <h2>Mallinda Hollaway</h2>
                    <small>5470 Madison Street Severna Park, MD 21146</small>

                    <div class="actions actions--section">
                        <div class="dropdown">
                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-share"></i></a>

                            <div class="dropdown-menu pull-right rmd-share">
                                <div></div>
                            </div>
                        </div>
                        <a href="profile-public.php" data-toggle="tooltip" title="Public profile"><i class="zmdi zmdi-eye"></i></a>
                    </div>
                </header>

                <div class="clearfix"></div>

                <div class="card profile">
                    <div class="profile__img">
                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                    </div>

                    <div class="profile__info">
                        <span class="label label-warning">Pro Member</span>

                        <div class="profile__review">
                            <span class="rmd-rate" data-rate-value="0" data-rate-readonly="true"></span>
                            <span>(0 Review)</span>
                        </div>

                        <ul class="rmd-contact-list">
                            <li><i class="zmdi zmdi-calendar"></i>Member since 01/10/2014</li>
                            <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                            <li><i class="zmdi zmdi-email"></i>malinda@inbound.plus</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="tab-nav tab-nav--justified" data-rmd-breakpoint="650">
                        <div class="tab-nav__inner">
                            <ul>
                                <li><a href="user-profile.php">Overview</a></li>
                                <li><a href="user-profile-searches.php">My Searches</a></li>
                                <li><a href="user-profile-listings.php">Saved Listings</a></li>
                                <li class="active"><a href="user-profile-agents.php">Saved Agents</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="list-group m-t-20">
                        <div class="list-group__wrap">
                            <a class="list-group-item media" href="agent-detail.php">
                                <div class="pull-left">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Sarah Zelermyer Diaz</strong>
                                    <small class="list-group__text">+1-202-555-0121 . sarahz@gmail.com</small>
                                    <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                </div>
                            </a>
                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">View</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="list-group__wrap">
                            <a class="list-group-item media" href="agent-detail.php">
                                <div class="pull-left">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Jean Wendlson</strong>
                                    <small class="list-group__text">+1-202-555-0188 . jean_wendlson87@gmail.com</small>
                                    <div class="rmd-rate" data-rate-value="2" data-rate-readonly="true"></div>
                                </div>
                            </a>
                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">View</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="list-group__wrap">
                            <a class="list-group-item media" href="agent-detail.php">
                                <div class="pull-left">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Mark Anderson</strong>
                                    <small class="list-group__text">+1-376-434-9355 . mark4eegh@gmail.com</small>
                                    <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                </div>
                            </a>
                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">View</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="list-group__wrap">
                            <a class="list-group-item media" href="agent-detail.php">
                                <div class="pull-left">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Paul Nitkinsion</strong>
                                    <small class="list-group__text">+1-324-547-5323 . paulzcoll@gmail.com</small>
                                    <div class="rmd-rate" data-rate-value="3" data-rate-readonly="true"></div>
                                </div>
                            </a>
                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">View</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="list-group__wrap">
                            <a class="list-group-item media" href="agent-detail.php">
                                <div class="pull-left">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>David Sheriff Jr.</strong>
                                    <small class="list-group__text">+1-323-432-4231 . sherifdavid@gmail.com</small>
                                    <div class="rmd-rate" data-rate-value="4" data-rate-readonly="true"></div>
                                </div>
                            </a>
                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">View</a></li>
                                        <li><a href="">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="load-more">
                            <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more listings</a>
                        </div>

                        <div class="p-20"></div>
                    </div>
                </div>

            </div>
        </section>

        <?php include "footer.php" ?>

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

        <!-- rateYo - Ratings -->
        <script src="vendors/bower_components/rateYo/src/jquery.rateyo.js"></script>

        <!-- Autosize Textarea -->
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- jsSocials - Social network sharing -->
        <script src="vendors/bower_components/jssocials/dist/jssocials.min.js"></script>

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