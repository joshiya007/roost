<div class="header__main">
    <div class="container">
        <a class="logo" href="index.php">
            <img src="img/logo.png" alt="">
            <div class="logo__text">
                <span>Roost</span>
                <span>Material Design Real Estate</span>
            </div>
        </a>

        <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
            <i class="zmdi zmdi-menu"></i>
        </div>

        <ul class="navigation">
            <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href=""><i class="zmdi zmdi-long-arrow-right"></i></a></li>
            
            <li class="navigation__dropdown">
                <a href="listings-list.php">Properties</a>
            </li>

            <li><a href="contact.php">Contact</a></li>



            <li class="navigation__dropdown">
                <a href="" class="prevent-default">More</a>

                <ul class="navigation__drop-menu navigation__drop-menu--right">
                    <?php 
                    $isLoggedIn = true;
                    if($isLoggedIn === true){ ?>
                        <li><a href="dashboard/index.php">Dashboard</a></li>
                    <?php } ?>
                    <!-- Edit profile is required only when user is logged in -->
                    <?php 
                    $isLoggedIn = true;
                    if($isLoggedIn === true){ ?>
                        <li><a href="user-profile.php">Edit Profile</a></li>
                    <?php } ?>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="team.php">Our Team</a></li>
                    <!-- Logout is required only when user is logged in -->
                    <?php 
                    $isLoggedIn = true;
                    if($isLoggedIn === true){ ?>
                        <li><a href="logout.php">Logout</a></li>
                    <?php } ?>
                </ul>
            </li>
            <!-- Submit Property should check if user is logged in or not and if yes then goto add property page or take to login page -->
            <li><a href="dashboard/new-listing.php" class="btn btn-warning">Submit Property</a></li>
        </ul>

    </div>
</div>