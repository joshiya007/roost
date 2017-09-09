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

        <!-- Select2 - Custom Selects -->
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
                    <a class="action-header__item action-header__back" href="questions-answers.php">
                        <i class="zmdi zmdi-long-arrow-left"></i> Back to Q & A
                    </a>
                </div>

                <div class="main__container questions-answers">
                    <div class="questions-answers__main media">
                        <div class="pull-left">
                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" height="60" alt="">

                            <div class="questions-answers__voting">
                                <span>
                                    <input type="radio" name="qa-voting" checked>
                                    <i class="zmdi zmdi-thumb-up"></i>
                                </span>
                                <span>
                                    <input type="radio" name="qa-voting">
                                    <i class="zmdi zmdi-thumb-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="media-body">
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                            <div class="questions-answers__attrs">
                                <a href=""><i class="zmdi zmdi-account"></i> Dave James</a>
                                <span><i class="zmdi zmdi-calendar"></i> 10/08/2016</span>
                                <span class="mdc-text-green-500"><i class="zmdi zmdi-thumb-up"></i> 233</span>
                                <span class="mdc-text-red-400"><i class="zmdi zmdi-thumb-down"></i> 10</span>

                                <div class="actions questions-answers__actions">
                                    <div class="actions__toggle">
                                        <input type="checkbox" checked>
                                        <i class="zmdi zmdi-star-border"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>

                                    <a href="#flag-question" data-toggle="modal">
                                        <i class="zmdi zmdi-flag"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group list-group--block questions-answers__reply">
                        <div class="list-group__header text-left m-0">
                            Total 2 replies

                            <a href="" class="pull-right"><span class="hidden-xs">VIEW REPLY</span></a>
                        </div>

                        <div class="list-group-item">
                            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <div class="list-group__attrs">
                                <div><i class="zmdi zmdi-calendar"></i> 10/08/2016</div>
                                <div class="mdc-text-green-500"><i class="zmdi zmdi-thumb-up"></i> 198</div>
                            </div>

                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu dropdown-menu--icon pull-right">
                                        <li><a href=""><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                        <li><a href="" data-demo-action="delete-listing"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="list-group-item">
                            <p>Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui.</p>

                            <div class="list-group__attrs">
                                <div><i class="zmdi zmdi-calendar"></i> 9/08/2016</div>
                                <div class="mdc-text-green-500"><i class="zmdi zmdi-thumb-up"></i> 21</div>
                            </div>

                            <div class="actions list-group__actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu dropdown-menu--icon pull-right">
                                        <li><a href=""><i class="zmdi zmdi-edit"></i> Edit</a></li>
                                        <li><a href="" data-demo-action="delete-listing"><i class="zmdi zmdi-delete"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group">
                                <textarea class="form-control textarea-autoheight" placeholder="Reply Question..."></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                            <button class="btn btn-primary">Reply</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Flag question modal -->
            <div class="modal fade note-view" id="flag-question" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Flag this question</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <select class="select2">
                                    <option>Select Reason</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control textarea-autoheight" placeholder="Message..."></textarea>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                            <button type="button" class="btn btn-link">Report</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "dashboard-top.php" ?>
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