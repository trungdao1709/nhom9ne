<?php
include 'inc/header.php';
?>

<!-- top breadcrumb -->
<div class="top_breadcrumb">
    <div class="breadcrumb_container ">
        <div class="container">
            <nav data-depth="3" class="breadcrumb">
                <ol>
                    <li>
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Sign in</span>
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- top breadcrumb end -->
<!-- login page content -->
<div class="login-page-area">
    <div class="container">
        <div class="login-area">
            <!-- New Customer Start -->
            <div class="row">
                <div class="col-md-6">
                    <div class="well mb-sm-30">
                        <div class="new-customer">
                            <h3 class="custom-title">new customer</h3>
                            <p class="mtb-10"><strong>Register</strong></p>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                            <a class="customer-btn" href="register.php">continue</a>
                        </div>
                    </div>
                </div>
                <!-- New Customer End -->
                <!-- Returning Customer Start -->
                <div class="col-md-6">
                    <div class="well">
                        <div class="return-customer">
                            <h3 class="mb-10 custom-title">returnng customer</h3>
                            <p class="mb-10"><strong>I am a returning customer</strong></p>
                            <form action="#">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Enter your email address..." id="input-email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="pass" placeholder="Password" id="input-password" class="form-control">
                                </div>
                                <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                                <input type="submit" value="Login" class="return-customer-btn">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Returning Customer End -->
            </div>
        </div>
    </div>
</div>
<!-- login page content end -->
<!-- footer start -->
<footer id="footer">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="rows">
                    <div class="ft_newsletter">
                        <div id="block-newsletter-label">
                            <div class="title-newsletter">
                                <h2>Newsletter sign up</h2>
                                <p class="desc">(Get 30% OFF coupon today subscibers)</p>
                            </div>
                        </div>
                        <form action="#">
                            <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter" value="Subscribe" type="submit">
                            <div class="input-wrapper">
                                <input name="email" value="" placeholder="Your email address" aria-labelledby="block-newsletter-label" type="text">
                            </div>
                        </form>
                    </div>
                    <div class="pos_logo product_block_container">
                        <div class="row pos_content">
                            <div class="logo-slider owl-carousel">
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/1.html" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/2.html" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/3.html" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/4.html" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/5.html" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/6.html" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/1.html" alt="harosa brand logo">
                                    </a>
                                </div>
                                <div class="item-banklogo">
                                    <a href="#">
                                        <img src="images/brand/2.html" alt="harosa brand logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include 'inc/footer.php';
        ?>