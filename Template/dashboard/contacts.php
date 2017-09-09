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
                            <input type="text" placeholder="Search for contacts...">
                        </form>
                    </div>

                    <div class="action-header__item action-header__add">
                        <a href="new-contact.php" class="btn btn-danger btn-sm">New Contact</a>
                    </div>

                    <div class="action-header__item action-header__item--sort hidden-xs">
                        <span class="action-header__small">Sort by :</span>

                        <select class="select2">
                            <option>Names: A to Z</option>
                            <option>Names: Z to A</option>
                            <option>Frequently Contacted</option>
                        </select>
                    </div>
                </div>

                <div class="main__container">
                    <header class="main__title">
                        <h2>Contacts</h2>
                        <small>Praesent commodo cursus magnavel scelerisque nisl consectetur</small>
                    </header>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="list-group list-group--block contact-lists">
                                <div class="list-group__header text-left">
                                    455 Total Contacts
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <div class="avatar-char mdc-bg-amber-400">T</div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Tyrek Pusateri</strong>

                                            <div class="list-group__attrs">
                                                <div>tyr_pu@yoohoo.com</div>
                                                <div>(203) 991-4171</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="list-group__img img-circle" width="50" height="50" alt="">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Kayna Bojorquez</strong>

                                            <div class="list-group__attrs">
                                                <div>kayna_bojorqu@info.com</div>
                                                <div>(902) 093-3923</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="list-group__img img-circle" width="50" height="50" alt="">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Thorberta Jewell</strong>

                                            <div class="list-group__attrs">
                                                <div>tho_je@yoohoo.com</div>
                                                <div>(626) 203-6822</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="list-group__img img-circle" width="50" height="50" alt="">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Mohit Dowell</strong>

                                            <div class="list-group__attrs">
                                                <div>moh_dowell@yahoo.ca</div>
                                                <div>(720) 567-4728</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <div class="avatar-char mdc-bg-red-400">Z</div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Zelman Fujii</strong>

                                            <div class="list-group__attrs">
                                                <div>zelman.fu@freespace.com</div>
                                                <div>(709) 393-5895</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <div class="avatar-char mdc-bg-teal-400">C</div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Cody Cancel</strong>

                                            <div class="list-group__attrs">
                                                <div>co_canc@google.com</div>
                                                <div>(902) 183-6342</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="list-group__img img-circle" width="50" height="50" alt="">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Queena Lundell</strong>

                                            <div class="list-group__attrs">
                                                <div>quee_lundell@myspace.com</div>
                                                <div>(819) 011-5935</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <div class="avatar-char mdc-bg-pink-400">G</div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Glynis Apple</strong>

                                            <div class="list-group__attrs">
                                                <div>glynis.ap@myspace.com</div>
                                                <div>(709) 394-3435</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group__wrap">
                                    <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                                        <div class="pull-left">
                                            <div class="avatar-char mdc-bg-blue-400">T</div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Tivona Hinnant</strong>

                                            <div class="list-group__attrs">
                                                <div>tivon.hinna@yoohoo.com</div>
                                                <div>(709) 101-9503</div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="actions list-group__actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#add-to-group" data-toggle="modal">Add to group</a></li>
                                                <li><a href="">Edit</a></li>
                                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="load-more">
                                <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more contacts</a>
                            </div>
                        </div>

                        <div class="col-md-4 visible-lg visible-md">
                            <div class="card">
                                <div class="card__header">
                                    <h2>Groups</h2>
                                    <small>Etiam porta malesuada mollis</small>
                                </div>

                                <div class="groups-grid groups-grid--widget">
                                    <a class="groups-grid__item" href="group-details.php">
                                        <div class="groups-grid__img">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                        </div>

                                        <div class="groups-grid__info">
                                            <strong>Sold Properties</strong>
                                            <small class="text-muted">106 Contacts</small>
                                        </div>
                                    </a>

                                    <a class="groups-grid__item" href="group-details.php">
                                        <div class="groups-grid__img">
                                            <div class="groups-grid__avatar avatar-char avatar-char--sm mdc-bg-light-blue-400">A</div>
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <div class="groups-grid__avatar avatar-char avatar-char--sm mdc-bg-pink-400">D</div>
                                        </div>

                                        <div class="groups-grid__info">
                                            <strong>San Fransisco</strong>
                                            <small class="text-muted">12 Contacts</small>
                                        </div>
                                    </a>

                                    <a class="groups-grid__item" href="group-details.php">
                                        <div class="groups-grid__img">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <div class="groups-grid__avatar avatar-char avatar-char--sm mdc-bg-orange-400">E</div>
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                        </div>

                                        <div class="groups-grid__info">
                                            <strong>Pending Leads</strong>
                                            <small class="text-muted">42 Contacts</small>
                                        </div>
                                    </a>

                                    <a class="groups-grid__item" href="group-details.php">
                                        <div class="groups-grid__img">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="https://placeholdit.imgix.net/~text?&w=500&h=500" alt="">
                                            <img class="groups-grid__avatar" src="../img/group_empty.jpg" alt="">
                                        </div>

                                        <div class="groups-grid__info">
                                            <strong>Management</strong>
                                            <small class="text-muted">3 Contacts</small>
                                        </div>
                                    </a>

                                    <div class="clearfix"></div>

                                    <a href="groups.php" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- View Contact -->
            <div class="modal fade" id="view-contact">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <div class="view-contact__img">
                                <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="img-circle" width="150" height="150" alt="">
                            </div>

                            <div class="m-t-25">
                                <h4>Mallinda Hollaway</h4>
                                <small>421 Walnut St. Hartford, CT 06106, United States</small>
                            </div>

                            <div class="m-t-25">
                                <small>Email Address</small>
                                <div class="text-strong m-t-5">mallinda-h@gmail.com</div>
                            </div>

                            <div class="m-t-25">
                                <small>Mobile Phone</small>
                                <div class="text-strong m-t-5">(203) 991-4171</div>
                            </div>

                            <div class="m-t-25">
                                <small>Home Phone</small>
                                <div class="text-strong m-t-5">(902) 093-3923</div>
                            </div>
                        </div>

                        <div class="modal-footer text-center modal-footer--bordered">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Add to group modal -->
            <div class="modal fade" id="add-to-group" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add to group</h4>
                        </div>

                        <div class="contact-highlight media">
                            <div class="pull-left">
                                <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="img-circle" width="50" height="50" alt="">
                            </div>
                            <div class="media-body">
                                <strong>Mallinda Hollaway</strong>

                                <div class="list-group__attrs m-t-5">
                                    <div>mallinda-h@hmail.com</div>
                                    <div>(203) 991-4171</div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="form-group m-0">
                                <input type="text" class="form-control" placeholder="Group name...">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                            <button type="button" class="btn btn-link">Add</button>
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