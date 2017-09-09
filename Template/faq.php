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
            <div class="header__top">
                <div class="container">
                    <ul class="top-nav">
                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="">Register</a>

                            <form class="dropdown-menu stop-propagate">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                    <i class="form-group__bar"></i>
                                </div>

                                <p><small>By Signing up with Roost, you're agreeing to our <a href="">terms and conditions</a>.</small></p>

                                <button class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                                <div class="text-center"><small><a href="">Are you an Agent?</a></small></div>

                                <div class="top-nav__auth">
                                    <span>or</span>

                                    <div>Sign in using</div>

                                    <a href="" class="mdc-bg-blue-500">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>

                                    <a href="" class="mdc-bg-cyan-500">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>

                                    <a href="" class="mdc-bg-red-400">
                                        <i class="zmdi zmdi-google"></i>
                                    </a>
                                </div>

                            </form>
                        </li>

                        <li class="dropdown top-nav__guest">
                            <a data-toggle="dropdown" href="" data-rmd-action="switch-login">Login</a>

                            <div class="dropdown-menu">
                                <div class="tab-content">
                                    <form class="tab-pane active in fade" id="top-nav-login">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                                        <div class="text-center">
                                            <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                                        </div>

                                        <div class="top-nav__auth">
                                            <span>or</span>

                                            <div>Sign in using</div>

                                            <a href="" class="mdc-bg-blue-500">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>

                                            <a href="" class="mdc-bg-cyan-500">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>

                                            <a href="" class="mdc-bg-red-400">
                                                <i class="zmdi zmdi-google"></i>
                                            </a>
                                        </div>
                                    </form>

                                    <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                                        <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Emaill Address">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <button class="btn btn-warning btn-block">Reset Password</button>
                                    </form>
                                </div>
                            </div>
                        </li>

                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-twitter"></i></a>
                        </li>
                        <li class="pull-right top-nav__icon">
                            <a href=""><i class="zmdi zmdi-google"></i></a>
                        </li>

                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>hello@Roost.com</span></li>
                        <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>001-541-754-3010</span></li>
                    </ul>
                </div>
            </div>

            <div class="header__main">
                <div class="container">
                    <a class="logo" href="index.html">
                        <img src="img/logo.png" alt="">
                        <div class="logo__text">
                            <span>Roost</span>
                            <span>Material Design Real Estate</span>
                        </div>
                    </a>

                    <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
                        <i class="zmdi zmdi-menu"></i>
                    </div>

                    <ul class="navigation">
                        <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href=""><i class="zmdi zmdi-long-arrow-right"></i></a></li>

                        <li class="navigation__dropdown">
                            <a href="index.html">Home</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="after-login.html">After Login</a></li>
                                <li><a href="home-alternative.html">Home Alternative</a></li>
                                <li><a href="dashboard/index.html">Dashboard</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="" class="prevent-default">Listings</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="listings-grid.html">Grid view</a></li>
                                <li><a href="listings-list.html">List view</a></li>
                                <li><a href="listings-map.html">Map view</a></li>
                                <li><a href="listing-detail.html">Listing Detail</a></li>
                            </ul>
                        </li>

                        <li><a href="submit-property.html">Submit</a></li>

                        <li class="navigation__dropdown">
                            <a href="mortgage.html">Mortgages</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="mortgage-detail.html">Mortgage Detail</a></li>
                                <li><a href="mortgage-detail-reviews.html">Mortgage Reviews</a></li>
                                <li><a href="mortgage-detail-disclaimer.html">Mortgage Disclaimer</a></li>
                            </ul>
                        </li>

                        <li class="navigation__dropdown">
                            <a href="agents.html">Agents</a>

                            <ul class="navigation__drop-menu">
                                <li><a href="agent-detail.html">Agent Detail</a></li>
                                <li><a href="agent-detail-properties.html">Agent Properties</a></li>
                                <li><a href="agent-detail-reviews.html">Agent Reviews</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact</a></li>

                        <li class="active navigation__dropdown">
                            <a href="" class="prevent-default">More</a>

                            <ul class="navigation__drop-menu navigation__drop-menu--right">
                                <li><a href="profile.html">Profile Private</a></li>
                                <li><a href="profile-public.html">Profile Public</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Detail</a></li>
                                <li><a href="neighborhood-guide.html">Neighborhood Guide</a></li>
                                <li class="active"><a href="faq.html">FAQ</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="email/listing-mail.html">Email Template</a></li>
                                <li><a href="404.html">Error - 404</a></li>
                                <li><a href="empty-page.html">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="action-header">
            <div class="container">
                <div class="action-header__item action-header__item--search">
                    <form>
                        <input type="text" placeholder="Search for questions...">
                    </form>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <header class="section__title">
                    <h2>Frequently Asked Questions</h2>
                    <small>Duis mollis estnon commodo luctus nisierat porttitor ligula eget lacinia odio semnec</small>
                </header>

                <div class="row">
                    <div class="col-md-8 faq">
                        <div class="card faq__item">
                            <div class="card__header">
                                <h2>Donec id elit non mi porta gravida at eget metus?</h2>
                            </div>
                            <div class="card__body">
                                Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            </div>
                        </div>

                        <div class="card faq__item">
                            <div class="card__header">
                                <h2>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec pharetra Ligula Parturient elit?</h2>
                            </div>
                            <div class="card__body">
                                Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue.
                            </div>
                        </div>

                        <div class="card faq__item">
                            <div class="card__header">
                                <h2>Maecenas sed diam eget risus varius blandit sit amet non magna?</h2>
                            </div>
                            <div class="card__body">
                                Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum.
                            </div>
                        </div>

                        <div class="card faq__item">
                            <div class="card__header">
                                <h2>Risus Fermentum Cras Tristique?</h2>
                            </div>
                            <div class="card__body">
                                Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                            </div>
                        </div>

                        <div class="card faq__item">
                            <div class="card__header">
                                <h2>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor?</h2>
                            </div>
                            <div class="card__body">
                                Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                            </div>
                        </div>

                        <div class="card faq__item">
                            <div class="card__header">
                                <h2>Integer posuere erat a ante venenatis dapibus posuere velit aliquet?</h2>
                            </div>
                            <div class="card__body">
                                Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur.

                                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 rmd-sidebar-mobile" id="write-to-us">
                        <form class="card">
                            <div class="card__header">
                                <h2>Write to us</h2>
                                <small>Aeneanquam ellentesque ornare lacinia</small>
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
                                <button class="btn btn-link">Reset</button>
                                <button class="btn btn-link visible-sm-inline visible-xs-inline" data-rmd-action="block-close" data-rmd-target="#write-to-us">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Write Button for mobile -->
        <button class="btn btn--action btn--circle visible-sm visible-xs" data-rmd-action="block-open" data-rmd-target="#write-to-us">
            <i class="zmdi zmdi-edit"></i>
        </button>

        <footer id="footer">
            <div class="container hidden-xs">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <a class="logo clearfix" href="">
                                <div class="logo__text">
                                    <span>Roost</span>
                                    <span>Material Design Real Estate</span>
                                </div>
                            </a>

                            <address class="m-t-20 m-b-20 f-14">
                                44-46 Morningside Road,
                                Edinburgh, Scotland
                            </address>

                            <div class="f-20">0062-345678910</div>
                            <div class="f-14 m-t-5">hello@Roost.com / info@Roost.com</div>

                            <div class="f-20 m-t-20">
                                <a href="" class="m-r-10"><i class="zmdi zmdi-google"></i></a>
                                <a href="" class="m-r-10"><i class="zmdi zmdi-facebook"></i></a>
                                <a href=""><i class="zmdi zmdi-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block footer__block--blog">
                            <div class="footer__title">Latest from our blog</div>

                            <a href="">
                                Aenean lacinia bibendum nulla sed
                                <small>On 2016/06/20 at 6:00 PM</small>
                            </a>
                            <a href="">
                                Vestibulum id ligula porta felis euismod semper
                                <small>On 2016/06/18 at 7:12 PM</small>
                            </a>
                            <a href="">
                                Etiam porta sem malesuada magna mollis euismod
                                <small>On 2016/06/10 at 12:59 PM</small>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__block">
                            <div class="footer__title">Disclaimer</div>

                            <div>Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="container">
                    <span class="footer__copyright">© Roost Real Estates</span>

                    <a href="">About Us</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Careers</a>
                    <a href="">Agent Login</a>
                </div>

                <div class="footer__to-top" data-rmd-action="scroll-to" data-rmd-target="html">
                    <i class="zmdi zmdi-chevron-up"></i>
                </div>
            </div>
        </footer>

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

        <!-- Autosize - Auto height textarea -->
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>