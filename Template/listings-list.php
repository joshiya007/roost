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

        <!-- rateYo - Ratings -->
        <link rel="stylesheet" href="vendors/bower_components/rateYo/min/jquery.rateyo.min.css">

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

            <?php include 'header-main.php';?>
        </header>

        <div class="action-header">
            <div class="container">
                <div class="action-header__item action-header__item--search">
                    <form>
                        <input class="hidden-xs" type="text" placeholder="Search by neighborhood, city, zip or address..."><!-- For desktop -->
                        <input class="visible-xs" type="text" placeholder="Search..."><!-- For mobile -->
                    </form>
                </div>

                <div class="action-header__item action-header__views hidden-xs">
                    <a href="listings-grid.php" class="zmdi zmdi-apps"></a>
                    <a href="listings-list.php" class="zmdi zmdi-view-list active"></a>
                </div>

                <div class="action-header__item action-header__item--sort hidden-xs">
                    <span class="action-header__small">Sort by :</span>

                    <select class="select2">
                        <option>Featured listings</option>
                        <option>Newest to oldest</option>
                        <option>Oldest to Newest</option>
                        <option>Price hight to low</option>
                        <option>Price low to high</option>
                        <option>Newest to Oldest</option>
                        <option>No. of photos</option>
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

                <div class="row">
                    <div class="col-sm-8 listings-list">
                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="listings-grid__item">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$2,675,000</div>
                                </div>

                                <div class="media-body">
                                    <div class="listings-grid__body">
                                        <small>121 Hickory Mount, MD 21771</small>
                                        <h5>Integer posuere eratante venenatis</h5>
                                    </div>

                                    <ul class="listings-grid__attrs">
                                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                    </ul>
                                </div>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$575,000</div>
                                </div>

                                <div class="media-body">
                                    <div class="listings-grid__body">
                                        <small>677 Morris Lemont, IL 60439</small>
                                        <h5>Praesent commodo cursus scelerisque consectetur</h5>
                                    </div>

                                    <ul class="listings-grid__attrs">
                                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                    </ul>
                                </div>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$4299,000</div>

                                </div>

                                <div class="media-body">
                                    <div class="listings-grid__body">
                                        <small>451 Henry Livingston, NJ 07039</small>
                                        <h5>Morbi leorisus consectetur vestibulum</h5>
                                    </div>

                                    <ul class="listings-grid__attrs">
                                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 06</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                                    </ul>
                                </div>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$2,329,980</div>
                                </div>

                                <div class="media-body">
                                    <div class="listings-grid__body">
                                        <small>722 Chestnut Dublin, GA 31021</small>
                                        <h5>Curabitur blandit tempus porttitor</h5>
                                    </div>

                                    <ul class="listings-grid__attrs">
                                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 04</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 04</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 04</li>
                                    </ul>
                                </div>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$1,100,900</div>
                                </div>

                                <div class="media-body">
                                    <div class="listings-grid__body">
                                        <small>409 Magnolia Mansfield, MA 02048</small>
                                        <h5>Aenean Pellentesque lacinia quam venenatis vestibulum</h5>
                                    </div>

                                    <ul class="listings-grid__attrs">
                                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                    </ul>
                                </div>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">$3,400,110</div>
                                </div>

                                <div class="media-body">
                                    <div class="listings-grid__body">
                                        <small>277 Elm Avenue, TN 37128</small>
                                        <h5>Cras mattis consectetur purus sit amet fermentum</h5>
                                    </div>

                                    <ul class="listings-grid__attrs">
                                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                                    </ul>
                                </div>
                            </a>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
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

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <div class="listings-grid__item">
                            <a href="listing-detail.php" class="media">
                                <div class="pull-left listings-grid__main">
                                    <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="">
                                    <div class="listings-grid__price">900,900</div>
                                </div>

                                <div class="media-body">
                                    <div class="listings-grid__body">
                                        <small>735 San Angelo, TX 76901</small>
                                        <h5>Cras justo odio dapibus facilisis egestas</h5>
                                    </div>

                                    <ul class="listings-grid__attrs">
                                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                                    </ul>
                                </div>
                            </a>

                            <div class="actions listings-grid__favorite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                    <i class="zmdi zmdi-favorite"></i>
                                </div>
                            </div>
                        </div>

                        <nav class="text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="zmdi zmdi-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="zmdi zmdi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <aside class="col-sm-4 hidden-xs">
                        

                        <div class="card">
                            <div class="card__header">
                                <h2>Talk to an Agent</h2>
                                <small>Nullam dolorid nibh ultricies vehicula elit</small>
                            </div>
                            <div class="list-group">
                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                    </div>
                                    <div class="media-body list-group__text">
                                        <strong>Sarah Zelermyer Diaz</strong>
                                        <small class="list-group__text">+1-202-555-0121</small>
                                        <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                    </div>
                                    <div class="media-body list-group__text">
                                        <strong>Malinda Hollaway</strong>
                                        <small class="list-group__text">+1-202-555-0188</small>
                                        <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                    </div>
                                    <div class="media-body list-group__text">
                                            <strong>Dave Williams Jr.</strong>
                                        <small class="list-group__text">+1-202-555-0132</small>
                                        <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                    </div>
                                </a>

                                <a class="list-group-item media" href="">
                                    <div class="pull-left">
                                        <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="" class="list-group__img img-circle" width="65" height="65">
                                    </div>
                                    <div class="media-body list-group__text">
                                        <strong>Stephen Franklin</strong>
                                        <small class="list-group__text">+1-202-555-0141</small>
                                        <div class="rmd-rate" data-rate-value="5" data-rate-readonly="true"></div>
                                    </div>
                                </a>

                                <a href="" class="view-more">View all Agents</a>
                            </div>
                        </div>

                        <div class="card subscribe mdc-bg-light-blue">
                            <div class="subscribe__icon">
                                <i class="zmdi zmdi-email"></i>
                            </div>

                            <h2>Subscribe for Newsletters</h2>
                            <small>Curabitur blandit tempus porttitor adipiscing maecenas faucibus mollis interdum</small>

                            <form>
                                <div class="form-group form-group--light form-group--float">
                                    <input type="text" class="form-control text-center" placeholder="Email Address">
                                    <i class="form-group__bar"></i>
                                </div>

                                <button class="btn btn--circle">
                                    <i class="zmdi zmdi-check mdc-text-light-blue"></i>
                                </button>
                            </form>
                        </div>
                        <div class="card">
                            <div class="card__header">
                                <h2>Properties near your location</h2>
                                <small>Cras mattis consectetur purus sitamet fermentum</small>
                            </div>

                            <div class="map-widget">
                                <div id="nearby-properties" class="map-widget__item"></div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- Advanced Listing Search -->
        <button class="btn btn--action btn--circle" data-rmd-action="block-open" data-rmd-target="#advanced-search">
            <i class="zmdi zmdi-search-for"></i>
        </button>

        <aside id="advanced-search" class="rmd-sidebar">
            <form class="card">
                <div class="card__header">
                    <h2>Advanced Property Search</h2>

                    <div class="dropdown m-t-5">
                        <a data-toggle="dropdown" href="" class="text-muted">08 Saved Searches<i class="caret"></i></a>

                        <ul class="dropdown-menu dropdown-menu--block dropdown-menu--icon">
                            <li><a href=""><i class="zmdi zmdi-time"></i>10/08/2014 at 08:10 PM</a></li>
                            <li><a href=""><i class="zmdi zmdi-time"></i>01/08/2014 at 10:12 PM</a></li>
                            <li><a href=""><i class="zmdi zmdi-time"></i>01/08/2014 at 10:13 PM</a></li>
                            <li><a href=""><i class="zmdi zmdi-time"></i>22/07/2014 at 09:34 AM</a></li>
                            <li><a href=""><i class="zmdi zmdi-time"></i>14/07/2014 at 05:43 AM</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card__body m-t-20">
                    <div class="form-group form-group--float">
                        <input type="text" class="form-control" value="New York, NY">
                        <label class="fg-float">Location</label>
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <label>Listing Type</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn active">
                                <input type="radio" name="advanced-search-beds" id="rent" checked>Rent
                            </label>
                            <label class="btn">
                                <input type="radio" name="advanced-search-beds" id="buy">Buy
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ownership Type</label>

                        <select class="select2">
                            <option value="">Single Family Home</option>
                            <option value="">Condo</option>
                            <option value="">Townhome</option>
                            <option value="">Apartment Community</option>
                            <option value="">Room</option>
                        </select>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Price Range</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left"><span>$</span><span id="property-price-upper"></span></div>
                            <div class="pull-right"><span>$</span><span id="property-price-lower"></span></div>
                        </div>
                        <div id="property-price-range"></div>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Area Size (sqft)</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-area-upper"></div>
                            <div class="pull-right" id="property-area-lower"></div>
                        </div>
                        <div id="property-area-range"></div>
                    </div>

                    <div class="form-group">
                        <label>Bedrooms</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed1">1
                            </label>
                            <label class="btn active">
                                <input type="checkbox" name="inner-search-beds" id="bed2" checked>2
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-beds" id="bed5">4+
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Bathrooms</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath1">1
                            </label>
                            <label class="btn active">
                                <input type="checkbox" name="inner-search-baths" id="bath2" checked>2
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-baths" id="bath5">4+
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Garages</label>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage1">1
                            </label>
                            <label class="btn active">
                                <input type="checkbox" name="inner-search-garage" id="garage2" checked>2
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage3">3
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage4">4
                            </label>
                            <label class="btn">
                                <input type="checkbox" name="inner-search-garage" id="garage5">4+
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Lot Size (sqft)</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-lot-upper"></div>
                            <div class="pull-right" id="property-lot-lower"></div>
                        </div>
                        <div id="property-lot-range"></div>
                    </div>

                    <div class="form-group form-group--range">
                        <label>Year Built</label>
                        <div class="input-slider-values clearfix">
                            <div class="pull-left" id="property-yb-upper"></div>
                            <div class="pull-right" id="property-yb-lower"></div>
                        </div>
                        <div id="property-year-built"></div>
                    </div>
                </div>

                <div class="card__footer">
                    <button class="btn btn-sm btn-primary">Search</button>
                    <a href="" class="btn btn-link" data-rmd-action="block-close" data-rmd-target="#advanced-search">Save</a>
                    <a href="" class="btn btn-link" data-rmd-action="block-close" data-rmd-target="#advanced-search">Cancel</a>
                </div>
            </form>
        </aside>

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

        <!-- NoUiSlider - Input Slider -->
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

        <!-- rateYo - Ratings -->
        <script src="vendors/bower_components/rateYo/min/jquery.rateyo.min.js"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Demo only -->
        <script src="js/demo/maps/nearby-properties.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyD_nanUpVqytOmHHfuW4htZsiLH7YUzJ1A" async defer></script>
        <script src="js/demo/demo.js"></script>
    </body>
</html>