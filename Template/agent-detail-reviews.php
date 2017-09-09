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

                        <div class="card agent-reviews">
                            <div class="tab-nav tab-nav--justified" data-rmd-breakpoint="500">
                                <div class="tab-nav__inner">
                                    <ul>
                                        <li><a href="agent-detail.php">Overview</a></li>
                                        <li><a href="agent-detail-properties.php">Properties</a></li>
                                        <li class="active"><a href="agent-detail-reviews.php">Reviews</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card__body">
                                <div class="card__sub">
                                    <div class="list-group list-group--bordered list-group--condensed list-group--striped">
                                        <div class="media list-group-item">
                                            <div class="pull-right">
                                                <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                            </div>
                                            <div class="media-body">
                                                Fusce dapibus tellus accursus commodo
                                            </div>
                                        </div>
                                        <div class="media list-group-item">
                                            <div class="pull-right">
                                                <div class="rmd-rate" data-rate-value="4" data-rate-readonly="true"></div>
                                            </div>
                                            <div class="media-body">
                                                Nulla vitae elit libero a pharetra augue dolor
                                            </div>
                                        </div>
                                        <div class="media list-group-item">
                                            <div class="pull-right">
                                                <div class="rmd-rate" data-rate-value="2" data-rate-readonly="true"></div>
                                            </div>
                                            <div class="media-body">
                                                Nullam quis risus eget urna mollis ornare vel eu leo
                                            </div>
                                        </div>
                                        <div class="media list-group-item">
                                            <div class="pull-right">
                                                <div class="rmd-rate" data-rate-value="2" data-rate-readonly="true"></div>
                                            </div>
                                            <div class="media-body">
                                                Curabitur blandit tempus porttitor
                                            </div>
                                        </div>
                                        <div class="media list-group-item">
                                            <div class="pull-right">
                                                <div class="rmd-rate" data-rate-value="1" data-rate-readonly="true"></div>
                                            </div>
                                            <div class="media-body">
                                                Aenean lacinia bibendum nulla sed consectetur
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card__sub">
                                    <h4>263 User reviews</h4>

                                    <div class="agent-reviews__item">
                                        <div class="text-strong">By Jeannette Newport on 20th June 2016</div>
                                        <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>

                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    </div>

                                    <div class="agent-reviews__item">
                                        <div class="text-strong">By Cammy Tubman on 15th June 2016</div>
                                        <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>

                                        <p>Cras mattis consectetur purus sit amet fermentum Vestibulum id ligula porta felis euismod semper Cras mattis consectetur purus sit amet fermentum.</p>
                                    </div>

                                    <div class="agent-reviews__item">
                                        <div class="text-strong">By Jayson Leffingwell on 2nd May 2016</div>
                                        <div class="rmd-rate" data-rate-value="4" data-rate-readonly="true"></div>

                                        <p>Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus.</p>
                                        <p>Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p>
                                    </div>
                                </div>

                                <div class="load-more">
                                    <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more reviews</a>
                                </div>
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