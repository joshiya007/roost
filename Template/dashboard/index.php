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

        <!-- Calendar -->
        <link rel="stylesheet" href="../vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

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
                <div class="quick-stats clearfix">
                    <div class="col-md-3 col-sm-6 hidden-xs">
                        <div class="quick-stats__item">
                            <header>
                                <h2>288</h2>
                                <small>Total Properties Sold</small>

                                <div class="quick-stats__change quick-stats__change--up">
                                    <i class="zmdi zmdi-long-arrow-up"></i>
                                </div>
                            </header>

                            <div class="quick-stats__list">
                                <h3>32</h3>
                                <small>Total in Transaction</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--down">
                                    <i class="zmdi zmdi-long-arrow-down"></i>
                                </div>
                            </div>

                            <div class="quick-stats__list">
                                <h3>14</h3>
                                <small>Total Cancelled</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--up">
                                    <i class="zmdi zmdi-long-arrow-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                        <div class="quick-stats__item">
                            <header>
                                <h2>3218</h2>
                                <small>Total Leads Recieved</small>

                                <div class="quick-stats__change quick-stats__change--down">
                                    <i class="zmdi zmdi-long-arrow-down"></i>
                                </div>
                            </header>

                            <div class="quick-stats__list">
                                <h3>543</h3>
                                <small>Total Contacted</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--down">
                                    <i class="zmdi zmdi-long-arrow-down"></i>
                                </div>
                            </div>

                            <div class="quick-stats__list">
                                <h3>125</h3>
                                <small>Total Not Contacted</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--up">
                                    <i class="zmdi zmdi-long-arrow-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                        <div class="quick-stats__item">
                            <header>
                                <h2>1542</h2>
                                <small>Total Property Listings</small>

                                <div class="quick-stats__change quick-stats__change--down">
                                    <i class="zmdi zmdi-long-arrow-down"></i>
                                </div>
                            </header>

                            <div class="quick-stats__list">
                                <h3>401</h3>
                                <small>Total for Rents</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--down">
                                    <i class="zmdi zmdi-long-arrow-down"></i>
                                </div>
                            </div>

                            <div class="quick-stats__list">
                                <h3>1141</h3>
                                <small>Total for Sales</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--up">
                                    <i class="zmdi zmdi-long-arrow-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="quick-stats__item">
                            <header>
                                <h2>$5,503</h2>
                                <small>Total Earnings this month</small>

                                <div class="quick-stats__change quick-stats__change--up">
                                    <i class="zmdi zmdi-long-arrow-up"></i>
                                </div>
                            </header>

                            <div class="quick-stats__list">
                                <h3>$4,500</h3>
                                <small>Total from properties</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--up">
                                    <i class="zmdi zmdi-long-arrow-up"></i>
                                </div>
                            </div>

                            <div class="quick-stats__list">
                                <h3>$1,003</h3>
                                <small>Total from others</small>

                                <div class="quick-stats__change quick-stats__change--sm quick-stats__change--down">
                                    <i class="zmdi zmdi-long-arrow-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main__container">
                    <header class="main__title">
                        <h2>Analytics</h2>
                        <small>Aenean lacinia bibendum nulla sed consectetur</small>
                    </header>

                    <div class="card">
                        <div class="card__header">
                            <h2>Properties Sold</h2>
                            <small>Nullam quis risus eget urna mollis ornare vel eu leo</small>
                        </div>
                        <div class="card__body">
                            <div id="flot-chart--line" class="flot-chart"></div>
                            <div class="flot-chart__legends flot-chart__legends--bar"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card__header">
                                    <h2>Listings</h2>
                                    <small>Integer posuere erat a ante venenatis dapibus posuere velit</small>
                                </div>

                                <div class="list-group">
                                    <a href="" class="list-group-item media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Vivamus sagittis lacus vel augue laoreet rutrum faucibus</strong>
                                            <small>$810,000 . 04 Beds . 03 Baths</small>
                                        </div>
                                    </a>

                                    <a href="" class="list-group-item media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Fusce dapibus tellusac cursus</strong>
                                            <small>$910,300 . 03 Beds . 02 Baths</small>
                                        </div>
                                    </a>

                                    <a href="" class="list-group-item media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Praesent commodo cursus magnavel scelerisque nisl</strong>
                                            <small>$2,560,000 . 08 Beds . 07 Baths</small>
                                        </div>
                                    </a>

                                    <a href="" class="list-group-item media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Lorem ipsum dolor sitamet consectetur adipiscing elit</strong>
                                            <small>$1,140,650 . 06 Beds . 03 Baths</small>
                                        </div>
                                    </a>

                                    <a href="" class="list-group-item media">
                                        <div class="pull-left">
                                            <img src="https://placeholdit.imgix.net/~text?&w=400&h=266" alt="" class="list-group__img" width="60">
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Fusce dapibus accursus commodo</strong>
                                            <small>$780,900 . 02 Beds . 02 Baths</small>
                                        </div>
                                    </a>

                                    <a class="view-more" href="listings.php">
                                        View all listings
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__header">
                                    <h2>Upcoming Appointments</h2>
                                    <small>Etiam porta sem malesuada magna mollis euismod</small>
                                </div>

                                <div class="list-group">
                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <div class="event-date">
                                                <span class="event-date__day">24</span>
                                                <span class="event-date__month-time">Jul 05:00</span>
                                            </div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Vestibulum ligula porta felis euismod</strong>
                                            <small>Praesent commodo cursus magnavel scelerisque nisl consectetur</small>
                                        </div>
                                    </a>

                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <div class="event-date">
                                                <span class="event-date__day">30</span>
                                                <span class="event-date__month-time">Jul 14:15</span>
                                            </div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Porta gravida eget metus</strong>
                                            <small>Consectetur adipiscing elit</small>
                                        </div>
                                    </a>

                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <div class="event-date">
                                                <span class="event-date__day">02</span>
                                                <span class="event-date__month-time">Aug 08:30</span>
                                            </div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Maecenas faucibus mollis</strong>
                                            <small>Ligula idporta felis euismod semper</small>
                                        </div>
                                    </a>

                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <div class="event-date">
                                                <span class="event-date__day">13</span>
                                                <span class="event-date__month-time">Aug 09:00</span>
                                            </div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Lorem ipsum dolor sit amet</strong>
                                            <small>Etiam porta sem malesuada magna mollis euismod</small>
                                        </div>
                                    </a>

                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <div class="event-date">
                                                <span class="event-date__day">15</span>
                                                <span class="event-date__month-time">Aug 14:10</span>
                                            </div>
                                        </div>
                                        <div class="media-body list-group__text">
                                            <strong>Donec sed odio dui</strong>
                                            <small>Sagittis lacus augue laoreet rutrum faucibus</small>
                                        </div>
                                    </a>

                                    <a class="view-more" href="">
                                        View all listings
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__header">
                                    <h2>Tasks Lists</h2>
                                    <small>Duis mollis estnon commodo luctus nisi erat porttitor</small>
                                </div>

                                <div class="list-group tasks-lists">
                                    <div class="list-group-item">
                                        <div class="checkbox checkbox--char">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox__helper"><i class="mdc-bg-amber-400">A</i></span>
                                                <span class="tasks-list__info">
                                                    Aivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                                                    <small class="text-muted">Today at 8.30 AM</small>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="list-group__attrs">
                                            <div>#Apartments</div>
                                            <div>!!!</div>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <div class="dropdown">
                                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="">Mark as done</a></li>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="checkbox checkbox--char">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox__helper"><i class="mdc-bg-blue-400">N</i></span>
                                                <span class="tasks-list__info">
                                                    Nullam id dolor id nibh ultricies vehicula ut id elit
                                                    <small class="text-muted">Today at 12.30 PM</small>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="list-group__attrs">
                                            <div>#Clients</div>
                                            <div>!!</div>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <div class="dropdown">
                                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="">Mark as done</a></li>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="checkbox checkbox--char">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox__helper"><i class="mdc-bg-purple-400">C</i></span>
                                                <span class="tasks-list__info">
                                                    Cras mattis consectetur purus sit amet fermentum
                                                    <small class="text-muted">Tomorrow at 10.30 AM</small>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="list-group__attrs">
                                            <div>#Clients</div>
                                            <div>!!</div>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <div class="dropdown">
                                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="">Mark as done</a></li>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="checkbox checkbox--char">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox__helper"><i class="mdc-bg-green-400">M</i></span>
                                                <span class="tasks-list__info">
                                                    Maecenas sed diam eget risus varius blandit sit amet non magna aecen faucibus mollis interdum Aenean.
                                                    <small class="text-muted">Tomorrow at 05.10 PM</small>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="list-group__attrs">
                                            <div>#Marketing</div>
                                            <div>!!!</div>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <div class="dropdown">
                                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="">Mark as done</a></li>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="checkbox checkbox--char">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkbox__helper"><i class="mdc-bg-blue-grey-400">I</i></span>
                                                <span class="tasks-list__info">
                                                    Integer posuere erat a ante venenatis dapibus posuere velit aliquet
                                                    <small class="text-muted">05/08/2016 at 08.00 AM</small>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="list-group__attrs">
                                            <div>#Mortgage</div>
                                            <div>!</div>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <div class="dropdown">
                                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="">Mark as done</a></li>
                                                    <li><a href="">Edit</a></li>
                                                    <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="view-more" href="tasks-lists.php">
                                        View all tasks lists
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card__header">
                                    <h2>Recent Leads</h2>
                                    <small>Curabitur blandit tempus porttitor ullamcorper consectetur</small>
                                </div>

                                <div class="list-group">
                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="leads-status-alt mdc-bg-green-400">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </div>
                                        </div>

                                        <div class="media-body list-group__text">
                                            <strong>304 East Wenatchee, WA 98801</strong>

                                            <small class="leads-info">
                                                David Lentman . <span class="hidden-xs">david_l@gmail.com</span>
                                            </small>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="">View listing</a></li>
                                                <li><a href="">Edit lead</a></li>
                                                <li><a href="">Delete lead</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="leads-status-alt mdc-bg-amber-600">
                                                <i class="zmdi zmdi-minus-circle-outline"></i>
                                            </div>
                                        </div>

                                        <div class="media-body list-group__text">
                                            <strong>21 Shop St, San Francisco</strong>

                                            <small>
                                                San Anthony . <span class="hidden-xs">anthony_732@ymail.com</span> . +1-202-555-0120
                                            </small>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="">View listing</a></li>
                                                <li><a href="">Edit lead</a></li>
                                                <li><a href="">Delete lead</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="leads-status-alt mdc-bg-green-400">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </div>
                                        </div>

                                        <div class="media-body list-group__text">
                                            <strong>Beverly Hills, CA 90210</strong>

                                            <small>
                                                Deen Jones . <span class="hidden-xs">jjdeen_88@gmail.com</span>
                                            </small>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="">View listing</a></li>
                                                <li><a href="">Edit lead</a></li>
                                                <li><a href="">Delete lead</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="leads-status-alt mdc-bg-green-400">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </div>
                                        </div>

                                        <div class="media-body list-group__text">
                                            <strong>132 Lockslee, San Francisco</strong>

                                            <small>
                                                Sarah Diaz . <span class="hidden-xs">sarahdiaz@yahoo.com</span>
                                            </small>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="">View listing</a></li>
                                                <li><a href="">Edit lead</a></li>
                                                <li><a href="">Delete lead</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="list-group-item media">
                                        <div class="pull-left">
                                            <div class="leads-status-alt mdc-bg-red-400">
                                                <i class="zmdi zmdi-close-circle"></i>
                                            </div>
                                        </div>

                                        <div class="media-body list-group__text">
                                            <strong>21120 Broadway St, San Fransisco</strong>

                                            <small>
                                                Stephen Franklin . <span class="hidden-xs">stf_599@outlook.com</span>
                                            </small>
                                        </div>

                                        <div class="actions list-group__actions">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="">View listing</a></li>
                                                <li><a href="">Edit lead</a></li>
                                                <li><a href="">Delete lead</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <a class="view-more" href="leads.php">
                                        View all leads
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card__header">
                                    <h2>Earning Summary</h2>
                                    <small>Vestibulum id ligula porta felis euismod semper</small>
                                </div>

                                <div class="card__body">
                                    <div class="flot-chart" id="pie-chart"></div>
                                    <div class="flot-chart__legends flot-chart__legends--pie"></div>
                                </div>
                            </div>

                            <!-- Calendar -->
                            <div class="card" id="calendar-widget">
                                <div class="card__header mdc-bg-teal-500">
                                    <div class="calendar-widget__year"></div>
                                    <div class="calendar-widget__day"></div>

                                    <a class="btn mdc-bg-light-green-500 btn--circle btn--float" href="calendar.php">
                                        <i class="zmdi zmdi-plus"></i>
                                    </a>
                                </div>

                                <div class="calendar-widget__body"></div>
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

        <!-- Calendar -->
        <script src="../vendors/bower_components/moment/min/moment-with-locales.min.js"></script>
        <script src="../vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts -->
        <script src="../vendors/bower_components/Flot/jquery.flot.js"></script>
        <script src="../vendors/bower_components/Flot/jquery.flot.pie.js"></script>
        <script src="../vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="../vendors/bower_components/Flot/jquery.flot.resize.js"></script>

        <!-- IE9 Placeholder -->
        <!--[if IE 9 ]>
        <script src="../vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Site functions and actions -->
        <script src="../js/app.min.js"></script>

        <!-- Demo only -->
        <script src="../js/demo/demo.js"></script>
        <script src="../js/demo/charts/line-chart.js"></script>
        <script src="../js/demo/charts/pie-chart.js"></script>
    </body>
</html>