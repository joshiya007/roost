<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roost - Material Design Real Estate</title>

        <!-- Vendors -->
        <link href="../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="../vendors/bower_components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="../vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="../vendors/bower_components/nouislider/distribute/nouislider.min.css">

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
                    <a class="action-header__item action-header__back" href="contacts.php">
                        <i class="zmdi zmdi-long-arrow-left"></i> Back to contacts
                    </a>
                </div>

                <div class="main__container main__container-sm">
                    <header class="main__title">
                        <h2>Add new contact</h2>
                        <small>Nullam id dolor id nibh ultricies vehicula ut id elit</small>
                    </header>

                    <form class="card new-contact">
                        <div class="new-contact__img">
                            <img src="../img/user_empty.png" alt="">
                            <i class="new-contact__upload zmdi zmdi-camera"></i>
                        </div>

                        <div class="card__body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>First Name</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Last Name</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Company</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Job Title</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Email Address</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Website</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Mobile Phone</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Home Phone</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group--float">
                                <textarea class="form-control textarea-autoheight"></textarea>
                                <label>Address</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group form-group--float">
                                <textarea class="form-control textarea-autoheight"></textarea>
                                <label>Notes</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="clearfix"></div>

                            <div class="m-t-20">
                                <button class="btn btn-primary">Save Contact</button>
                                <button class="btn btn-link">Cancel</button>
                            </div>
                        </div>
                    </form>

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

        <!-- Autosize - Auto height Textarea -->
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