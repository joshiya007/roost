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

        <!-- SweetAlert2 - Custom Alerts -->
        <link rel="stylesheet" href="../vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">

        <!-- Select2 - Custom Selects -->
        <link rel="stylesheet" href="../vendors/bower_components/select2/dist/css/select2.min.css">

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
                            <input type="text" placeholder="Search for leads...">
                        </form>
                    </div>

                    <!-- <div class="action-header__item action-header__add">
                        <a href="" class="btn btn-danger btn-sm">Create New</a>
                    </div>. -->

                    <div class="action-header__item action-header__item--sort hidden-xs">
                        <span class="action-header__small">Sort by :</span>

                        <select class="select2">
                            <option>Newest to oldest</option>
                            <option>Oldest to newest</option>
                            <option>Contacted</option>
                            <option>Not Contacted</option>
                            <option>Cancelled</option>
                        </select>
                    </div>
                </div>

                <div class="main__container">
                    <header class="main__title">
                        <h2>Leads</h2>
                        <small>Cras mattis consectetur purus sit amet fermentum</small>
                    </header>

                    <div class="list-group list-group--block">
                        <div class="list-group__header text-left">
                            127 Total Leads
                        </div>

                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox" checked>
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">304 East Wenatchee, WA 98801</a></strong>
                                <small>12/07/2016 . San Anthony<span class="hidden-xs"> . anthony_732@ymail.com . +1-202-555-0120</span></small>
                                <small>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-green-400"><i class="zmdi zmdi-check-all hidden-xs"></i> Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox" checked>
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Fusce dapibus tellusac cursus vehicula bibendum</a></strong>
                                <small>11/07/2016 . Arran Loar<span class="hidden-xs"> . arralo@geocitiews.com . (843) 621-4099</span></small>
                                <small>Sonic id elit non mi porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel eu leo.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-orange-400"><i class="zmdi zmdi-minus-circle-outline hidden-xs"></i> Not Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Praesent commodo cursus magnavel scelerisque nisl</a></strong>
                                <small>09/07/2016 . Brigitte Higgs<span class="hidden-xs"> . brigitthi@infzoseller.com . (720) 782-3275</span></small>
                                <small>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-red-400"><i class="zmdi zmdi-close-circle hidden-xs"></i> Cancelled</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Lorem ipsum dolor sitamet consectetur adipiscing elit</a></strong>
                                <small>01/07/2016 . Aubin Hudgens<span class="hidden-xs"> . aubihudgen@frmail.com . (867) 808-2959</span></small>
                                <small>Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-green-400"><i class="zmdi zmdi-check-all hidden-xs"></i> Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox" checked>
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Fusce dapibus accursus commodo</a></strong>
                                <small>01/07/2016 . Divyesh Noone<span class="hidden-xs"> . divyesno@wwebmail.com . (980) 916-9762</span></small>
                                <small>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-green-400"><i class="zmdi zmdi-check-all hidden-xs"></i> Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Nullam iddolor idnibh ultricies vehicula</a></strong>
                                <small>30/06/2016 . Oma Ramsey<span class="hidden-xs"> . om.rams@hotmail.com . (780) 638-5421</span></small>
                                <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-green-400"><i class="zmdi zmdi-check-all hidden-xs"></i> Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Praesent commodo cursus magna scelerisque nisl consectetur</a></strong>
                                <small>20/06/2016 . Callista Johnsen<span class="hidden-xs"> . cal_joh@webmail.com . (709) 246-4097</span></small>
                                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-orange-400"><i class="zmdi zmdi-minus-circle-outline hidden-xs"></i> Not Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Bulla vitae elit libero, a pharetra augue</a></strong>
                                <small>20/06/2016 . Gerzson Murguia<span class="hidden-xs"> . gerzso-murg@info.com . (775) 602-9564</span></small>
                                <small>Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-green-400"><i class="zmdi zmdi-check-all hidden-xs"></i> Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Integer posuere erat a ante venenatis dapibus posuere velit aliquet</a></strong>
                                <small>18/06/2016 . Gerzson Murguia<span class="hidden-xs"> . pa-jul@myspace.com . (802) 868-6602</span></small>
                                <small>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Vestibulum id ligula porta felis euismod semper.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-red-400"><i class="zmdi zmdi-close-circle hidden-xs"></i> Cancelled</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Donec sedodio dui ipsum</a></strong>
                                <small>15/06/2016 . Renita Keifer<span class="hidden-xs"> . reni_keife@geocities.com . (902) 351-0776</span></small>
                                <small>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-orange-400"><i class="zmdi zmdi-minus-circle-outline hidden-xs"></i> Not Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Sonec ullamcorper nulla non metus auctor fringilla</a></strong>
                                <small>11/06/2016 . Kalidas Rodman<span class="hidden-xs"> . ka-rodma@webmine.com . (306) 560-1984</span></small>
                                <small>Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-green-400"><i class="zmdi zmdi-check-all hidden-xs"></i> Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
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

                                <div class="actions leads-favourite">
                                    <div class="actions__toggle">
                                        <input type="checkbox">
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media-body list-group__text">
                                <strong><a href="leads-deatil.php">Wedlit non mi porta gravida at eget metus</a></strong>
                                <small>10/06/2016 . Zani Fondren<span class="hidden-xs"> . za_fondre@google.com . (410) 719-0697</span></small>
                                <small>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</small>

                                <div class="list-group__label">
                                    <span class="mdc-bg-green-400"><i class="zmdi zmdi-check-all hidden-xs"></i> Connected</span>
                                    <a class="mdc-bg-blue-400" href="#leads-message" data-toggle="modal">Message</a>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="leads-deatil.php">View</a></li>
                                            <li><a href="">Close</a></li>
                                            <li><a href="" data-demo-action="delete-listing">Delete</a></li>
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

            <!-- Message Modal -->
            <div class="modal fade" id="leads-message" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Message to San Anthony <small>anthony_732@ymail.com</small></h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" placeholder="Subject" class="form-control">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control textarea-autoheight" placeholder="Message"></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                            <button type="button" class="btn btn-link">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>

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

        <!-- Autosize - Textarea Auto height -->
        <script src="../vendors/bower_components/autosize/dist/autosize.min.js"></script>

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