<?php 
include "config/koneksi.php";
@session_start();

if (isset($_POST['submit'])) {
    $cek = mysqli_query($koneksi,"SELECT * from login where username = '$_POST[username]' AND password = '$_POST[password]'");
    if (mysqli_num_rows($cek) > 0 ) {
        $data = mysqli_fetch_array($cek);
        $_SESSION['id_user'] = $data['id'];
        ?>
        <script>window.location.href="admin.php"</script>
        <?php
    }else{
        ?>
        <script>alert('username atau password salah');window.location.href="index.php"</script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Monitoring Alat Lab Farmasi | Login Page</title>
    <link rel="shortcut icon" href="assets/farm.png" />

    <!-- <link rel="apple-touch-icon" sizes="60x60" href="assets/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="assets/app-assets/images/ico/favicon-32.png"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
            <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header no-border">
                        <div class="card-title text-xs-center">
                            <div class="p-1"><img src="assets/farm.png" style="width: 50%;height: 50%" alt="branding logo"></div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2" style="margin-top: -20px"><span>Lab Farmasi IMY</span></h6>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form-horizontal form-simple" method="post" >
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input required="" type="text" class="form-control form-control-lg input-lg" autocomplete="off" id="user-name" name="username" placeholder="Masukan Username" required>
                                    <div class="form-control-position">
                                        <i class="icon-head"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input required="" type="password" class="form-control form-control-lg input-lg" id="user-password" autocomplete="off" name="password" placeholder="Masukan Password" required>
                                    <div class="form-control-position">
                                        <i class="icon-key3"></i>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group row">
                                </fieldset>
                                <button name="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

    </div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="assets/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script src="assets/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
<script src="assets/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="assets/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
<script src="assets/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
<script src="assets/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="assets/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
<script src="assets/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="assets/app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>
