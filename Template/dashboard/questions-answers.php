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
                    <div class="action-header__item action-header__item--search">
                        <form>
                            <input type="text"  class="hidden-xs" placeholder="Search Questions & Answers...">
                            <input type="text" class="visible-xs" placeholder="Search...">
                        </form>
                    </div>

                    <div class="action-header__item action-header__item--sort hidden-xs">
                        <span class="action-header__small">Sort by :</span>

                        <select class="select2">
                            <option>Newest to oldest</option>
                            <option>Oldest to newest</option>
                            <option>Answered</option>
                            <option>Non-answered</option>
                        </select>
                    </div>
                </div>

                <div class="main__container">
                    <header class="main__title">
                        <h2>Questions & Answers</h2>
                        <small>Praesent commodo cursus magnavel scelerisque nisl consectetur</small>
                    </header>

                    <div class="list-group list-group--block questions-answers">
                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>198</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Curabitur blandit tempus porttitor nteger posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.</strong>
                                    <small>Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Curabitur blandit tempus porttitor.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> David</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 02/08/2016</div>
                                        <div class="mdc-text-green-500 hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 210</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox" checked>
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>20</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Porta Risus Tellus etiam porta sem malesuada magna mollis euismod.</strong>
                                    <small>Aenean eu leo quam pellentesque ornare sem lacinia quam venenatis vestibulum cursus opellentesque elit</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Shane James</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 23/06/2016</div>
                                        <div class="mdc-text-green-500 hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 5</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox" checked>
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>0</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Curabitur blandit tempus porttitor vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</strong>
                                    <small>Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Williams</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 10/06/2016</div>
                                        <div class="hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 0</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>12</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</strong>
                                    <small>Donec id elit non mi porta gravida at eget metus.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Jane West</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 9/06/2016</div>
                                        <div class="mdc-text-red-400 hidden-xs"><i class="zmdi zmdi-thumb-down"></i> -10</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox" checked>
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>0</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</strong>
                                    <small>Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Nadal</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 9/06/2016</div>
                                        <div class="mdc-text-green-500 hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 55</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>0</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.</strong>
                                    <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Alen Drona</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 5/06/2016</div>
                                        <div class="mdc-text-green-500 hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 11</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox" checked>
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>198</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Curabitur blandit tempus porttitor nteger posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit.</strong>
                                    <small>Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Curabitur blandit tempus porttitor.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> David</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 02/08/2016</div>
                                        <div class="mdc-text-green-500 hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 210</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>20</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Porta Risus Tellus etiam porta sem malesuada magna mollis euismod.</strong>
                                    <small>Aenean eu leo quam pellentesque ornare sem lacinia quam venenatis vestibulum cursus opellentesque elit</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Shane James</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 23/06/2016</div>
                                        <div class="mdc-text-green-500 hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 5</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>0</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Curabitur blandit tempus porttitor vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</strong>
                                    <small>Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Williams</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 10/06/2016</div>
                                        <div class="hidden-xs"><i class="zmdi zmdi-thumb-up"></i> 0</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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

                        <div class="list-group__wrap">
                            <a href="questions-answers-detail.php" class="list-group-item media">
                                <div class="pull-left">
                                    <div class="questions-answers__votes">
                                        <h3>0</h3>
                                        <small>VOTES</small>
                                    </div>
                                </div>
                                <div class="media-body list-group__text">
                                    <strong>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</strong>
                                    <small>Donec id elit non mi porta gravida at eget metus.</small>

                                    <div class="list-group__attrs m-t-10">
                                        <div><i class="zmdi zmdi-account"></i> Jane West</div>
                                        <div><i class="zmdi zmdi-calendar"></i> 9/06/2016</div>
                                        <div class="mdc-text-red-400 hidden-xs"><i class="zmdi zmdi-thumb-down"></i> -10</div>
                                    </div>
                                </div>
                            </a>

                            <div class="actions questions-answers__favourite">
                                <div class="actions__toggle">
                                    <input type="checkbox">
                                    <i class="zmdi zmdi-star-border"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
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
                    </div>

                    <div class="load-more">
                        <a href=""><i class="zmdi zmdi-refresh-alt"></i> Load more Q & A</a>
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