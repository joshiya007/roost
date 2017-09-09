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
        <link href="../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS animations -->
        <link rel="stylesheet" href="../vendors/bower_components/animate.css/animate.min.css">

        <!-- Select 2 - Custom Selects -->
        <link rel="stylesheet" href="../vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- SweetAlert2 - Custom Alerts -->
        <link rel="stylesheet" href="../vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">

        <!-- Site -->
        <link rel="stylesheet" href="../css/app_1.min.css">
        <link rel="stylesheet" href="../css/app_2.min.css">

        <!-- Page Loader JS -->
        <script src="../js/page-loader.min.js" async></script>
    </head>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->

        <?php include "dashboard-top.php" ?>

        <main id="main">
            <?php include "dashboard-side.php" ?>

            <section id="main__content">
                <div class="action-header-alt">
                    <div class="action-header__item action-header__item--search">
                        <form>
                            <input type="text" placeholder="Search for listings...">
                        </form>
                    </div>

                    <div class="action-header__item action-header__add">
                        <a href="new-listing.php" class="btn btn-danger btn-sm">Add New <span class="hidden-xs">Listing</span></a>
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

                <div class="main__container">
                    <header class="main__title">
                        <h2>Listings</h2>
                        <small>Aenean lacinia bibendum nulla sed consectetur</small>
                    </header>

                    <div class="list-group list-group--block">
                        <div class="list-group__header text-left">
                            87 Total Property Listings
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Vivamus sagittis lacus vel augue laoreet rutrum faucibus</a></strong>
                                <small>$810,000 . 04 Beds . 03 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 6421
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> High
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Fusce dapibus tellusac cursus vehicula bibendum</a></strong>
                                <small>$910,300 . 03 Beds . 02 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 1865
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> Medium
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Praesent commodo cursus magnavel scelerisque nisl</a></strong>
                                <small>$2,560,000 . 08 Beds . 07 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 1000
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> Low
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Lorem ipsum dolor sitamet consectetur adipiscing elit</a></strong>
                                <small>$1,140,650 . 06 Beds . 03 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 5215
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> High
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Fusce dapibus accursus commodo</a></strong>
                                <small>$780,900 . 02 Beds . 02 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 3761
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> High
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Nullam iddolor idnibh ultricies vehicula</a></strong>
                                <small>$1,200,000 . 01 Beds . 01 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 1134
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> Medium
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Praesent commodo cursus magna scelerisque nisl consectetur</a></strong>
                                <small>$980,000 . 02 Beds . 01 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 1543
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> Medium
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Bulla vitae elit libero, a pharetra augue</a></strong>
                                <small>$4,000,000 . 06 Beds . 06 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 4312
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> High
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Integer posuere erat a ante venenatis dapibus posuere velit aliquet</a></strong>
                                <small>$1,200,000 . 01 Beds . 01 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 0783
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> Low
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Donec sedodio dui ipsum</a></strong>
                                <small>$2,300,000 . 03 Beds . 03 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 0321
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> Low
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Sonec ullamcorper nulla non metus auctor fringilla</a></strong>
                                <small>$1,230,000 . 03 Beds . 02 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 3214
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> High
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                            </div>
                            <div class="media-body list-group__text">
                                <strong><a href="">Wedlit non mi porta gravida at eget metus</a></strong>
                                <small>$864,000 . 01 Beds . 01 Baths</small>

                                <div class="list-group__label list-group__label--float">
                                    <span class="mdc-bg-teal-400" data-toggle="tooltip" data-title="Weekly Views">
                                        <i class="zmdi zmdi-eye"></i> 1209
                                    </span>
                                    <span class="mdc-bg-cyan-400" data-toggle="tooltip" data-title="Viewer Interest">
                                        <i class="zmdi zmdi-thumb-up"></i> Medium
                                    </span>
                                </div>

                                <div class="actions list-group__actions list-group__actions--centered">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">View</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="load-more">
                        <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more listings</a>
                    </div>
                </div>
            </section>

            <?php include "dashboard-footer.php" ?>
        </main>

        <!-- Javascript -->

        <!-- jQuery -->
        <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Waves button ripple effects -->
        <script src="../vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Select 2 - Custom Selects -->
        <script src="../vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- SweetAlert2 - Custom Alerts -->
        <script src="../vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
        <script src="../vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="../js/app.min.js"></script>

        <!-- Demo only -->
        <script src="../js/demo/demo.js"></script>
    </body>
</html>