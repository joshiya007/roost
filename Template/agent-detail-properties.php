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
            <?php include "header-main.php" ?>
        </header>

        <section class="section">
            <div class="container">
                <header class="section__title text-left">
                    <h2>Robert B. Osborne</h2>
                    <small>5470 Madison Street Severna Park, MD 21146</small>

                   
                </header>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card profile">
                            <div class="profile__img">
                                <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                            </div>

                            <div class="profile__info">
                                <span class="label label-warning">Pro Member</span>
                                <span class="label label-success">Premium Agent</span>

                                <div class="profile__review">
                                    <span class="rmd-rate" data-rate-value="3" data-rate-readonly="true"></span>
                                    <span>(263 Review)</span>
                                </div>

                                <ul class="rmd-contact-list">
                                    <li><i class="zmdi zmdi-assignment"></i>License Number(s): #10491201592</li>
                                    <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                                    <li><i class="zmdi zmdi-email"></i>malinda@inbound.plus</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="tab-nav tab-nav--justified" data-rmd-breakpoint="500">
                                <div class="tab-nav__inner">
                                    <ul>
                                        <li><a href="agent-detail.php">Overview</a></li>
                                        <li class="active"><a href="agent-detail-properties.php">Properties</a></li>
                                        <li><a href="agent-detail-reviews.php">Reviews</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="listings-list listings-list--alt">
                                <div class="listings-grid__item">
                                    <a href="listings-details.php" class="media">
                                        <div class="listings-grid__main pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$1,200,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>304 East Wenatchee, WA 98801</small>
                                                <h5>Nullam iddolor idnibh ultricies vehicula</h5>
                                            </div>
                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 00</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item listings-grid__item--sold">
                                    <a href="listing-detail.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$1,175,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>21 Shop St, San Francisco</small>
                                                <h5>Integer tempor luctus maximus</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item listings-grid__item--sold">
                                    <a href="listing-detail.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$1,200,000</div>
                                        </div>
                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>Beverly Hills, CA 90210</small>
                                                <h5>Duis sollicitudin ante bibendum</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item">
                                    <a href="listings-details.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$910,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>132 04th St, San Francisco</small>
                                                <h5>Fusce quis libero nonorcious</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item">
                                    <a href="listings-details.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$2,542,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>132 Lockslee, San Francisco</small>
                                                <h5>Pellentesque habitant</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item">
                                    <a href="listings-details.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$823,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>San Francisco, CA 900212 </small>
                                                <h5>Maecenas sed purus lorem aliquet cursus</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item">
                                    <a href="listings-details.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$1,120,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>21120 Broadway St, San Fransisco</small>
                                                <h5>Maecenas sed purus at lorem</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item listings-grid__item--sold">
                                    <a href="listing-detail.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$3,000,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>San Francisco, CA 937202</small>
                                                <h5>Nullam finibus libero at hendrerit</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <div class="listings-grid__item">
                                    <a href="listings-details.php" class="media">
                                        <div class="pull-left listings-grid__main">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                            <div class="listings-grid__price">$1,175,000</div>
                                        </div>

                                        <div class="media-body">
                                            <div class="listings-grid__body">
                                                <small>4313 Beverly Hills, CA 90210</small>
                                                <h5>Donec ullamcorper nulla non metus auctor fringilla</h5>
                                            </div>

                                            <ul class="listings-grid__attrs">
                                                <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                                <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="load-more m-b-30">
                                <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more listings</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 rmd-sidebar-mobile" id="agent-question">
                        <form class="card">
                            <div class="card__header">
                                <h2>Ask a Question</h2>
                                <small>Aeneanquam ellentesque ornare lacinia venenatis</small>
                            </div>

                            <div class="card__body m-t-10">
                                <div class="form-group form-group--float">
                                    <input type="text" class="form-control">
                                    <i class="form-group__bar"></i>
                                    <label>Name</label>
                                </div>
                                <div class="form-group form-group--float">
                                    <input type="text" class="form-control">
                                    <i class="form-group__bar"></i>
                                    <label>Email Address</label>
                                </div>
                                <div class="form-group form-group--float">
                                    <input type="text" class="form-control">
                                    <i class="form-group__bar"></i>
                                    <label>Contact Number</label>
                                </div>
                                <div class="form-group form-group--float">
                                    <textarea class="form-control textarea-autoheight"></textarea>
                                    <i class="form-group__bar"></i>
                                    <label>Message</label>
                                </div>

                                <small class="text-muted">By sending us your information, you agree to Root’s Terms of Use & Privacy Policy.</small>
                            </div>

                            <div class="card__footer">
                                <button class="btn btn-primary">Submit</button>
                                <button class="btn btn-sm btn-link">Reset</button>
                                <button class="btn btn-sm btn-link visible-sm-inline visible-xs-inline" data-rmd-action="block-close" data-rmd-target="#agent-question">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Button for mobile -->
        <button class="btn btn--action btn--circle visible-sm visible-xs" data-rmd-action="block-open" data-rmd-target="#agent-question">
            <i class="zmdi zmdi-comment-alt-text"></i>
        </button>

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

        <!-- jsSocials - Social network sharing -->
        <script src="vendors/bower_components/jssocials/dist/jssocials.min.js"></script>

        <!-- Autosize Textarea -->
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