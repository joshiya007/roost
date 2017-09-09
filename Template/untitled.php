<li class="dropdown top-nav__guest">
                <a data-toggle="dropdown" href="" data-rmd-action="switch-loginuser">Login</a>
                <div class="dropdown-menu">
                    <div class="tab-content">
                        <form class="tab-pane active in fade" id="top-nav-loginuser">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address/Mobile Number">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                                <i class="form-group__bar"></i>
                            </div>

                            <button class="btn btn-primary btn-block m-t-10 m-b-10">loginuser</button>

                            <div class="text-center">
                                <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                            </div>

                        </form>

                        <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                            <a href="#top-nav-loginuser" class="top-nav__back" data-toggle="tab"></a>

                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mobile Number">
                                <i class="form-group__bar"></i>
                            </div>

                            <a href="#top-nav-change-password" class="btn btn-warning btn-block m-t-10 m-b-10" data-toggle="tab">Send OTP</a>
                        </form>


                        <form class="tab-pane fade forgot-password" id="top-nav-change-password">
                            <a href="#top-nav-forgot-password" class="top-nav__back" data-toggle="tab"></a>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="One Time Password">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="New Password">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Confirm Passwod">
                                <i class="form-group__bar"></i>
                            </div>

                            <button class="btn btn-warning btn-block">Change Password</button>
                        </form>
                    </div>
                </div>
            </li>