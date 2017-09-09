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
                            <input type="text" placeholder="Search activity log...">
                        </form>
                    </div>
                </div>

                <div class="main__container">
                    <header class="main__title">
                        <h2>Activity Log</h2>
                        <small>Aenean lacinia bibendum nulla sed consectetur</small>
                    </header>

                    <div class="activity-log">

                        <div class="activity-log__block">
                            <div class="activity-log__item activity-log__item--listing">
                                <div class="activity-log__date">
                                    02/08/2016
                                </div>

                                <div class="activity-log__content activity-log__content--listing">
                                    <div class="activity-log__time">08:30 AM</div>

                                    <div class="activity-log__list media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" width="60" alt="">
                                        </div>
                                        <div class="media-body activity-log__text">
                                            <a href="">Nulla vitae elit libero, a pharetra augue.</a>
                                            <small>Pellentesque ornare sem lacinia quam venenatis vestibulum.</small>
                                        </div>

                                        <div class="activity-log__attrs">
                                            <span>Listings</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">08:30 AM</span>
                                            <span class="activity-log__added pull-right">Added</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--lead">
                                    <div class="activity-log__time">10:31 AM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">304 East Wenatchee, WA 98801</a>
                                            <small>12/07/2016 . San Anthony . anthony_732@ymail.com . +1-202-555-0120</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Leads</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">10:31 AM</span>
                                            <span class="activity-log__updated pull-right">Messaged</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--contact">
                                    <div class="activity-log__time">11:21 AM</div>

                                    <div class="activity-log__list media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="img-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="media-body activity-log__text">
                                            <a href="">Melina Jackson</a>
                                            <small>melina_000@ymail.com . +1-103-421-9847</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Contacts</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">11:21 AM</span>
                                            <span class="activity-log__removed pull-right">Removed</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--task">
                                    <div class="activity-log__time">11:55 AM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Aivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</a>
                                            <small>Today at 8.30 AM</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Tasks</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">11:55 AM</span>
                                            <span class="activity-log__added pull-right">Completed</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--notes">
                                    <div class="activity-log__time">02:34 PM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Morbi leo risus porta consectetur vestibulum eros</a>
                                            <small>Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Notes</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">02:34 PM</span>
                                            <span class="activity-log__updated pull-right">Updated</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--calendar">
                                    <div class="activity-log__time">04:42 PM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Fusce dapibus tellus</a>
                                            <small>Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Calendar</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">04:42 PM</span>
                                            <span class="activity-log__added pull-right">Added</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--qa">
                                    <div class="activity-log__time">05:14 PM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus</a>
                                            <small>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. </small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Q & A</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">05:14 PM</span>
                                            <span class="activity-log__added pull-right">Answered</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--message">
                                    <div class="activity-log__time">05:43 PM</div>

                                    <div class="activity-log__list media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="img-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="media-body activity-log__text">
                                            <a href="">Vestibulum id ligula porta felis euismod semper</a>
                                            <small>Maecenas sed diam eget risus varius blandit sit amet non magna. </small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Messaging</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">05:43 PM</span>
                                            <span class="activity-log__updated pull-right">Messaged</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="activity-log__block">
                            <div class="activity-log__item activity-log__item--listing">
                                <div class="activity-log__date">
                                    01/08/2016
                                </div>

                                <div class="activity-log__content activity-log__content--listing">
                                    <div class="activity-log__time">07:52 AM</div>

                                    <div class="activity-log__list media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" width="60" alt="">
                                        </div>
                                        <div class="media-body activity-log__text">
                                            <a href="">Donec ullamcorper nulla non metus auctor fringilla</a>
                                            <small>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod</small>
                                        </div>

                                        <div class="activity-log__attrs">
                                            <span>Listings</span>
                                            <span>01/08/2016</span>
                                            <span class="hidden-xs">07:52 AM</span>
                                            <span class="activity-log__removed pull-right">Removed</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--lead">
                                    <div class="activity-log__time">09:32 AM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">123 West Cost, XS 37231</a>
                                            <small>11/08/2016 . Dames Joe . damesjoe@ymail.com . +2-323-323-5432</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Leads</span>
                                            <span>01/08/2016</span>
                                            <span class="hidden-xs">09:32 AM</span>
                                            <span class="activity-log__updated pull-right">Contacted</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="activity-log__block">
                            <div class="activity-log__item activity-log__item--listing">
                                <div class="activity-log__date">
                                    31/07/2016
                                </div>

                                <div class="activity-log__content activity-log__content--task">
                                    <div class="activity-log__time">11:55 AM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Aivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</a>
                                            <small>Today at 8.30 AM</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Tasks</span>
                                            <span>31/07/2016</span>
                                            <span class="hidden-xs">11:55 AM</span>
                                            <span class="activity-log__added pull-right">Completed</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--notes">
                                    <div class="activity-log__time">02:34 PM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Morbi leo risus porta consectetur vestibulum eros</a>
                                            <small>Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Notes</span>
                                            <span>02/08/2016</span>
                                            <span class="hidden-xs">02:34 PM</span>
                                            <span class="activity-log__updated pull-right">Updated</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--calendar">
                                    <div class="activity-log__time">04:42 PM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Fusce dapibus tellus</a>
                                            <small>Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Calendar</span>
                                            <span>31/07/2016</span>
                                            <span class="hidden-xs">04:42 PM</span>
                                            <span class="activity-log__added pull-right">Added</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--qa">
                                    <div class="activity-log__time">05:14 PM</div>

                                    <div class="activity-log__list">
                                        <div class="activity-log__text">
                                            <a href="">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus</a>
                                            <small>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. </small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Q & A</span>
                                            <span>31/07/2016</span>
                                            <span class="hidden-xs">05:14 PM</span>
                                            <span class="activity-log__added pull-right">Answered</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-log__content activity-log__content--message">
                                    <div class="activity-log__time">05:43 PM</div>

                                    <div class="activity-log__list media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=500&h=500" class="img-circle" width="40" height="40" alt="">
                                        </div>
                                        <div class="media-body activity-log__text">
                                            <a href="">Vestibulum id ligula porta felis euismod semper</a>
                                            <small>Maecenas sed diam eget risus varius blandit sit amet non magna. </small>
                                        </div>
                                        <div class="activity-log__attrs">
                                            <span>Messaging</span>
                                            <span>31/07/2016</span>
                                            <span class="hidden-xs">05:43 PM</span>
                                            <span class="activity-log__updated pull-right">Messaged</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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