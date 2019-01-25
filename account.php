<?php include('header.php'); ?>
<!--Breadcrumb Area Start-->
<section class="fiscal-breadcromb-area section_50">
    <div class="overlay"></div><!--.overlay-->
    <div class="container">
        <div class="row">
            <div class="fiscal-breadcromb">
                <div class="col-md-6">
                    <div class="breadcromb-left">
                        <h3>Accounnt</h3>
                    </div><!--.breadcromb-left-->
                </div>
                <div class="col-md-6">
                    <div class="breadcromb-right">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i>home</a></li>
                            <li>/</li>
                            <li>Shop</li>
                            <li>/</li>
                            <li>Accounnt</li>
                        </ul>
                    </div><!--.breadcromb-right-->
                </div>
            </div>
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--Breadcrumb Area End-->
<!--News Area Start-->
<section class="fiscal-shop-account-area section-padding">
    <div class="container">
        <div class="row">
            <div class="fiscal-shop-account flex">  
                <div class="col-md-6">
                    <div class="fiscal-register">
                        <h3>Register Here</h3>
                        <form lpformnum="8">
                            <div class="register-form">
                                <div class="form-group">
                                    <label for="usnm">Username</label>
                                    <div class="account-form-group">
                                        <input type="text" id="usnm" name="username">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <div class="account-form-group">
                                        <input type="email" id="email" name="email">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form">
                                <div class="form-group">
                                    <label for="pass">password</label>
                                    <div class="account-form-group">
                                        <input type="password" id="pass" name="password" >
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cpass">Confirm Password</label>
                                    <div class="account-form-group">
                                        <input type="password" id="cpass" name="password">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form">
                                <div class="form-group">
                                    <label for="phn">Phone Number</label>
                                    <div class="account-form-group">
                                        <input type="tel" id="phn" name="phone">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="loc">Location</label>
                                    <div class="account-form-group">
                                        <input type="text" id="loc" name="location">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form">
                                <div class="form-group">
                                    <input type="checkbox" id="terms">
                                    <label for="terms">I agree the term’s &amp; conditions</label>
                                </div>
                            </div>
                            <div class="register-form-btn">
                                <div class="form-group">
                                    <button type="submit">create account</button>
                                </div>
                            </div>
                        </form>
                    </div><!--.fiscal-register-->
                </div>
                <div class="col-md-6">
                    <div class="fiscal-login">
                        <h3>Login Now</h3>
                        <form lpformnum="9">
                            <div class="register-form">
                                <div class="form-group">
                                    <label for="usnm2">Username</label>
                                    <div class="account-form-group">
                                        <input type="text" id="usnm2" name="username">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form">
                                <div class="form-group">
                                    <label for="pass2">password</label>
                                    <div class="account-form-group">
                                        <input type="password" id="pass2" name="password">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form fix">
                                <div class="col-md-6 no-padding">
                                    <div class="form-group">
                                        <div class="remember">
                                            <input type="checkbox" id="Remember">
                                            <label for="Remember">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 no-padding">
                                    <div class="form-group">
                                        <div class="forgot">
                                            <a href="#">forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form-btn">
                                <div class="form-group">
                                    <button type="submit">login now</button>
                                </div>
                            </div>
                        </form>
                    </div><!--.fiscal-login-->
                </div>
            </div><!--.fiscal-shop-account-->     
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--News Area End-->
<?php include('footer.php'); ?>