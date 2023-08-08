<?php
include "config/koneksi.php";
@session_start(); 
if (@$_SESSION['id_user']==null) {
  ?>
  <script>window.location.href="index.php"</script>
  <?php
}
$admin = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM login where id = '$_SESSION[id_user]'"));

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
  <title> Monitoring Alat Lab Farmasi | Admin Page</title>
  <link rel="shortcut icon" href="assets/farm.png" />

  <!-- <link rel="apple-touch-icon" sizes="60x60" href="assets/logonya.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/logonya.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/logonya.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/logonya.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/logonya.ico">
  <link rel="shortcut icon" type="image/png" href="assets/logonya.png"> -->
  
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
  <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/dropify.css">
  <!-- <link rel="stylesheet" type="text/css" href="assets/data-table/bootstrap.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="http://localhost/adhimix-vendor-new/public/backend/data-table/bootstrap.css"> -->

  <style type="text/css">
  html body{
    overflow-x: hidden;
  }
  .hide{
    display: none;
  }
  .alert{
    color:white!important;
  }
  .pull-right{
    float: right;
  }
</style>
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout  vertical-menu 2-columns  fixed-navbar">

  <!-- navbar-fixed-top-->
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-shadow navbar-border ">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
          <!-- <li class="nav-item"><a href="admin.php" class="navbar-brand nav-link"><img alt="branding logo" src="assets/farm.png" data-expand="assets/farm.png"  class="brand-logo" width="40"> </a></li> -->
          <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
        </ul>
      </div>
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          <ul class="nav navbar-nav">
            <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
            <!-- <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li> -->
          </ul>
          <ul class="nav navbar-nav float-xs-right">
            <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="assets/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?php echo $admin['fullname'] ?></span></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div><a href="admin.php?p=l" onclick="return confirm('Logout?')" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- main menu-->
  <div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header" style="">
      <center>
        <!-- <img  src="assets/farm.png"  style="width: 100px; height:90px;"> -->
          <br>
              <h3>Monitoring Alat
                <br>
                 Lab Farmasi IMY</h3>
      </center>  
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class=" nav-item"><a href="admin.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="?p=u"><i class="icon-user"></i><span data-i18n="nav.dash.main" class="menu-title">Data User</span></a>
        </li>
        <li class=" nav-item"><a href="?p=dc"><i class="icon-users"></i><span data-i18n="nav.dash.main" class="menu-title">Data Siswa</span></a>
        </li>
        <li class=" nav-item"><a href="?p=db"><i class="icon-cubes"></i><span data-i18n="nav.dash.main" class="menu-title">Data Alat</span></a>
        </li>
        <li class=" nav-item"><a href="?p=bm"><i class="icon-download"></i><span data-i18n="nav.dash.main" class="menu-title">Alat Masuk</span></a>
        </li>
        <li class=" nav-item"><a href="?p=bk"><i class="icon-outbox"></i><span data-i18n="nav.dash.main" class="menu-title">Alat Keluar</span></a>
        </li>
        <li class=" nav-item"><a href="?p=lk"><i class="icon-paper"></i><span data-i18n="nav.dash.main" class="menu-title">Laporan Alat Keluar</span></a>
        </li>
        
      </ul>
    </div>  
  </div>
  <!-- / main menu-->

  <div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-body"><!-- Statistics -->
        <?php 
        $p = @$_GET['p'];
        if ($p==null || $p=='') {
          include "dashboard.php";
        }elseif ($p=="dc") {
          include "kostumer.php";
        }elseif ($p=="db") {
          include "barang.php";
        }elseif ($p=="bm") {
          include "barangmasuk.php";
        }elseif ($p=="bk") {
          include "barangkeluar.php";
        }elseif ($p=="lk") {
          include "laporankeluar.php";
        }elseif ($p=="u") {
          include "user.php";
        }elseif ($p=='l') {
          @session_destroy();
          ?>
          <script>window.location.href="index.php"</script>
          <?php
        }
         ?>
      </div>
    </div>
  </div>
  <footer style="width: 100%;left: 0;position: down;" class="footer footer-static footer-light navbar-border">
             Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>SMK Insan Mulia Yogyakarta || Created By KKL 4 STMIK EL RAHMA</a>
  </footer>

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
  <script src="assets/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN ROBUST JS-->
  <script src="assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="assets/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="assets//data-table/datatable.js" type="text/javascript"></script>
  <script src="assets//data-table/datatableButton.js" type="text/javascript"></script>
  <script src="assets//data-table/flash.js" type="text/javascript"></script>
  <script src="assets//data-table/html5.js" type="text/javascript"></script>
  <script src="assets//data-table/jzip.js" type="text/javascript"></script>
  <script src="assets//data-table/pdf.js" type="text/javascript"></script>
  <script src="assets//data-table/print.js" type="text/javascript"></script>
  <script src="assets//data-table/vfs.js" type="text/javascript"></script>
  <script src="assets//js/dropify.js" type="text/javascript"></script>
  <!-- <script src="{{ asset('public/assets/js/sweetalert.js') }}"></script> -->
  <script src="assets//data-table/select2.js" type="text/javascript"></script>
  <!-- END ROBUST JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="assets/app-assets/js/scripts/pages/dashboard-2.js" type="text/javascript"></script>
  <script>
    $('#example23').DataTable({
      dom: 'Bfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
    $('#example22').DataTable({
      dom: 'Bfrtip',
      buttons: [
    // 'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });
    $('.tableku').DataTable({
    // dom: 'Bfrtip',
    buttons: [
    // 'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });
    $('.guru').DataTable({
    dom: 'Bfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });
    $(".select2").select2();
    $(".dropify").dropify();
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script>
    function cek() {
      if ($("#lama").val()!=='') {
        $.ajax({
          type: "GET",
          url: "admin/carilama/"+$("#lama").val(),
          success: function (data) {
            var dataa = data;
            if (dataa==1) {
              $("#btnganti").prop('disabled',true);
              $("#msgpassword").removeClass('hide');
            }else{
              $("#btnganti").prop('disabled',false);
              $("#msgpassword").addClass('hide');
            }
          }
        }); 
      }else{
        $("#msgpassword").addClass('hide');
        $("#btnganti").prop('disabled',false);
      }
    }

    function sama() {
      if ($("#baru").val()!=='' && $("#baru2").val()!=='') {
       if ($("#baru").val()===$("#baru2").val()) {
        $("#msg2").addClass('hide');
        $("#btnganti").prop('disabled',false);
      }else{
        $("#msg2").removeClass('hide');
        $("#btnganti").prop('disabled',true);
      }
    }else{
      $("#msg2").addClass('hide');
      $("#btnganti").prop('disabled',false);
    }
  }

  function liat() {
    $("#lama").attr('type','text');
          // alert('haha');
        }
        function tutup() {
          $("#lama").attr('type','password');
          // alert('haha');
        }
        function liat2(id) {
          $("#baru"+id.toString()).attr('type','text');
          // alert('haha');
        }
        function tutup2(id) {
          $("#baru"+id.toString()).attr('type','password');
          // alert('haha');
        }
      </script>   
      
      <!-- END PAGE LEVEL JS-->
    </body>
    </html>
