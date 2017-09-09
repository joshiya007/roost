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

        <!-- NoUiSlider - Input slider -->
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
            <?php include "header-top.php" ?>
            <?php include "header-main.php" ?>
        </header>

        <div class="action-header">
            <div class="container">
                <div class="action-header__item action-header__item--search">
                    <form>
                        <input type="text" placeholder="Agent name, Company"><!-- For desktop -->
                    </form>
                </div>

                <div class="action-header__item action-header__item--sort hidden-xs">
                    <span class="action-header__small">Sort by :</span>

                    <select class="select2">
                        <option>Recommended</option>
                        <option>Best Match</option>
                        <option>Featured</option>
                        <option>Sold Homes</option>
                        <option>Most Favourited</option>
                    </select>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <header class="section__title">
                    <h2>Duis mollisest non commodo luctus nisierat porttito</h2>
                    <small>Vestibulum id ligula porta felis euismod semper</small>
                </header>

                <div class="row listings-grid">
                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Danielle C. Whitted</h5>
                                    <small>daniellecwhitted@inbound.plus</small>
                                    <small>702-210-6015</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Jodi M. Heston</h5>
                                    <small>jodimheston@inbound.plus</small>
                                    <small>614-961-3453</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Mary C. Gibbs</h5>
                                    <small>marycgibbs@inbound.plus</small>
                                    <small>818-776-5595</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Terrence G. Lainez</h5>
                                    <small>terrenceglainez@inbound.plus</small>
                                    <small>305-260-0865</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Louis J. Belton</h5>
                                    <small>louisjbelton@inbound.plus</small>
                                    <small>732-640-8064</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Lucille R. Hargrove</h5>
                                    <small>lucillerhargrove@inbound.plus</small>
                                    <small>504-558-4028</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="4" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Tracy Serrano</h5>
                                    <small>tracyjserrano@inbound.plus</small>
                                    <small>831-769-3286</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="4" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Sarah Dee Sharma</h5>
                                    <small>sarahdsharma@inbound.plus</small>
                                    <small>573-395-4644</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="4" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Terry T. Martinez</h5>
                                    <small>terrytmartinez@inbound.plus</small>
                                    <small>956-357-1983</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="4" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Donald R. Bernardz</h5>
                                    <small>donaldrbernard@inbound.plus</small>
                                    <small>912-684-0803</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="3" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Randolph E. Kelly</h5>
                                    <small>randolphekelly@inbound.plus</small>
                                    <small>814-947-1383</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="3" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="agent-detail.php">
                                <div class="listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                </div>
                                <div class="listings-grid__body">
                                    <h5>Robert B. Osborne</h5>
                                    <small>robertbosborne@inbound.plus</small>
                                    <small>308-360-8938</small>
                                </div>

                                <ul class="listings-grid__attrs">
                                    <li class="rmd-rate" data-rate-value="3" data-rate-readonly="true"></li>
                                </ul>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load-more">
                    <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more Agents</a>
                </div>
            </div>
        </section>

        <!-- Advanced Agents Search -->
        <button class="btn btn--action btn--circle" data-rmd-action="block-open" data-rmd-target="#agent-search">
            <i class="zmdi zmdi-search-for"></i>
        </button>

        <aside id="agent-search" class="rmd-sidebar">
            <form class="card">
                <div class="card__header">
                    <h2>Advanced Agent Search</h2>
                </div>

                <div class="card__body">
                    <div class="form-group">
                        <label>Looking for (Agents)</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn active">
                                <input type="radio" name="advanced-search-beds" id="lf-all" checked>All
                            </label>
                            <label class="btn">
                                <input type="radio" name="advanced-search-beds" id="lf-buyers">Buyer's
                            </label>
                            <label class="btn">
                                <input type="radio" name="advanced-search-beds" id="lf-sellers">Seller's
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-group--float">
                        <input type="text" class="form-control" value="New York, NY">
                        <label>Location</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <label>Agent Type</label>

                        <select class="select2">
                            <option value="">Agents</option>
                            <option value="">Brokers</option>
                            <option value="">Mortgage Lenders</option>
                            <option value="">Developers</option>
                            <option value="">Builders</option>
                        </select>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Works in Price Range</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left"><span>$</span><span id="property-price-upper"></span></div>
                            <div class="pull-right"><span>$</span><span id="property-price-lower"></span></div>
                        </div>
                        <div id="property-price-range"></div>
                    </div>

                    <div class="form-group">
                        <label>Specialities</label>

                        <select class="select2" multiple>
                            <option value="" selected>Sollicitudin</option>
                            <option value="" selected>Pellentesque</option>
                            <option value="" selected>Inceptos</option>
                            <option value="" selected>Dapibus</option>
                            <option value="" selected>Mollis</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Languages</label>

                        <select class="select2" multiple>
                            <option value="" selected>English</option>
                            <option value="">Spanish</option>
                            <option value="">French</option>
                            <option value="">Russian</option>
                            <option value="">Chinese</option>
                        </select>
                    </div>
                </div>

                <div class="card__footer">
                    <button class="btn btn-sm btn-primary">Search</button>
                    <a href="" class="btn btn-sm btn-link" data-rmd-action="block-close" data-rmd-target="#agent-search">Cancel</a>
                </div>
            </form>
        </aside>

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

        <!-- NoUiSlider - Input slider -->
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

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