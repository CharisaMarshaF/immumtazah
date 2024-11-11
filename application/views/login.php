<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="icon" href="<?= base_url('assets/upload/immumtazah/pp.jpg') ?>" type="image/x-icon">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/notika/green') ?>/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets/notika/notika/green') ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->

        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
              <form action="<?= base_url('auth/login'); ?>" method="post" role="form" >
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
              </form>
            </div>

        </div>

       

        <!-- Forgot Password -->
        
    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/knob/jquery.knob.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/knob/jquery.appear.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>js/wave/waves.min.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/icheck/icheck.min.js"></script>
    <script src="<?= base_url('assets/notika/green') ?>/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('assets/notika/green') ?>/js/main.js"></script>
</body>

</html>