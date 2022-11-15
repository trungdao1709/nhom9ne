<?php
include 'inc/header.php';
?>

        <!-- offcanvas END -->

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
                                <span>Register</span>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div> 
        </div>
        <!-- top breadcrumb end -->

        <!-- register page content -->
        <div class="register-page-area">
            <div class="container">
                <form class="form-register" action="#">
                    <fieldset>
                        <legend>Thông tin cá nhân của bạn</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Họ và tên</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="f-name" placeholder="Họ và tên">
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Tài khoản</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="l-name" placeholder="Tài khoản">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Your Password</legend>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Mật khẩu</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="pwd" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group d-md-flex align-items-md-center">
                            <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Xác nhận lại mật khẩu</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="pwd-confirm" placeholder="Confirm password">
                            </div>
                        </div>
                    </fieldset>
                    <div class="terms">
                        <div class="float-md-right">
                            <span>I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a></span>
                            <input type="checkbox" name="agree" value="1"> &nbsp;
                            <input type="submit" value="Continue" class="return-customer-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
        include 'inc/footer.php';
        ?>