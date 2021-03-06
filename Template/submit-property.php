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
                <header class="section__title">
                    <h2>Submit your property</h2>
                    <small>Praesent commodo cursus magnavel sceleris quenisl consecte turet</small>
                </header>

                <div class="submit-property">
                    <ul class="submit-property__steps">
                        <li class="active"><a href="#submit-property-1"  data-toggle="tab">1</a></li>
                        <li><a href="#submit-property-2" data-toggle="tab">2</a></li>
                        <li><a href="#submit-property-3" data-toggle="tab">3</a></li>
                        <li><a href="#submit-property-4" data-toggle="tab">4</a></li>
                        <li><a href="#submit-property-5" data-toggle="tab">5</a></li>

                        <li class="submit-property__caret"></li>
                    </ul>

                    <div class="tab-content submit-property__content">
                        <div class="tab-pane fade in active" id="submit-property-1">
                            <div class="card">
                                <div class="card__header">
                                    <h2>Property Location</h2>
                                    <small>Aenean lacinia bibendum nulla sed consectetur</small>
                                </div>

                                <form class="card__body">
                                    <div class="form-group form-group--float m-b-5">
                                        <input type="text" class="form-control">
                                        <i class="form-group__bar"></i>
                                        <label>Address</label>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                Hide Street number on listing
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group form-group--float m-b-5">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Unit/Floor/Block</label>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                Hide U/Floor/Block on listing
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#submit-property-2" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                        <i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="submit-property-2">
                            <div class="card">
                                <div class="card__header">
                                    <h2>Contact Information</h2>
                                    <small>Curabitur blandit tempus porttitor ligula malesuada</small>
                                </div>

                                <form class="card__body">
                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Full Name</label>
                                    </div>

                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Organization Name (Opt.)</label>
                                    </div>

                                    <div class="form-group form-group--float form-group--float-center m-b-5">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Email Address</label>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                                <i class="input-helper"></i>
                                                Hide Email Address on listing
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Contact Number</label>
                                    </div>

                                    <a href="#submit-property-3" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                        <i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="submit-property-3">
                            <div class="card">
                                <div class="card__header">
                                    <h2>Sale Information</h2>
                                    <small>Nullam iddolor dnibh ultricies vehicula utielit</small>
                                </div>

                                <form class="card__body">
                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Askin Price</label>
                                    </div>

                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Maintenance amount per month</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Owner Information</label>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn active">
                                                <input type="radio" name="advanced-search-beds" checked>Agent
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="advanced-search-beds">Owner
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="advanced-search-beds">Other
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#submit-property-4" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
                                        <i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="submit-property-4">
                            <div class="card">
                                <div class="card__header">
                                    <h2>Property Information</h2>
                                    <small>Sed posuere consectetur estat lobortis ultricies</small>
                                </div>

                                <form class="card__body">
                                    <div class="form-group">
                                        <label>Property Type</label>

                                        <select class="select2">
                                            <option value="">Single Family Home</option>
                                            <option value="">Condo</option>
                                            <option value="">Townhome</option>
                                            <option value="">Apartment Community</option>
                                            <option value="">Room</option>
                                        </select>
                                    </div>

                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Property title</label>
                                    </div>

                                    <div class="form-group form-group--float form-group--float-center">
                                        <textarea class="form-control text-center textarea-autoheight"></textarea>
                                        <i class="form-group__bar"></i>
                                        <label>Description</label>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group--float form-group--float-center">
                                                <input type="text" class="form-control text-center">
                                                <i class="form-group__bar"></i>
                                                <label>Square Feet</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group form-group--float form-group--float-center">
                                                <input type="text" class="form-control text-center">
                                                <i class="form-group__bar"></i>
                                                <label>Lot Size</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group--float form-group--float-center">
                                        <input type="text" class="form-control text-center">
                                        <i class="form-group__bar"></i>
                                        <label>Year Built</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Bedrooms</label>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">1
                                            </label>
                                            <label class="btn active">
                                                <input type="radio" name="inner-search-beds" checked>2
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">3
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">4
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">4+
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Bathrooms</label>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">1
                                            </label>
                                            <label class="btn active">
                                                <input type="radio" name="inner-search-beds" checked>2
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">3
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">4
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">4+
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>No. of Floors</label>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">1
                                            </label>
                                            <label class="btn active">
                                                <input type="radio" name="inner-search-beds" checked>2
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">3
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">4
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">4+
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Parking Space</label>
                                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">1
                                            </label>
                                            <label class="btn active">
                                                <input type="radio" name="inner-search-beds" checked>2
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">3
                                            </label>
                                            <label class="btn">
                                                <input type="radio" name="inner-search-beds">3+
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#submit-property-5" data-toggle="tab" class="btn btn--circle btn-primary submit-property__button">
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
                                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                </div>
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