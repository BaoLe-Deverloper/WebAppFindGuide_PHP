<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tìm Hướng Dẫn Viên &mdash;Trang Web Tìm Hướng Dẫn Viên Hàng Đầu Thế Giới</title>
  <meta name="description" content="Free Bootstrap Theme by uicookies.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> 
  <link rel="stylesheet" href="publics/asset_site/css/styles-merged.css">
  <link rel="stylesheet" href="publics/asset_site/css/style.css">
  <link rel="stylesheet" type="text/css" href="publics/asset_site/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/asset_site/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="publics/asset_site/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link rel="stylesheet" type="text/css" href="publics/asset_site/css/plugins/jquery.timepicker.css">
  <link rel="stylesheet" href="publics/asset_site/css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- START: header -->
    <div class="probootstrap-loader"></div>
    <header role="banner" class="probootstrap-header">
      <div class="container">
        <a href="index.html" class="probootstrap-logo">Bao_Le<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="animated fadeInLeft probootstrap-main-nav">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="properties.html">Đặt Xe</a></li>
            <li><a href="agents.html">Lịch Trình</a></li>
            <li><a href="about.html">Thông Tin</a></li>
            <?php
            
            session_start();
            if(!isset($_SESSION['time']) || $_SESSION['time'] < (time()-3600))
            {
              session_regenerate_id();
              $_SESSION['time'] = time();

            }
            
            if (isset($_SESSION['name']))
            {
             echo  ' <li class=dropdown avatar-dropdown ">
            <img src="publics/img/'.$_SESSION['avata'].'" class="img-circle avatar_user" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <ul class="dropdown-menu pull-right user-dropdown">
            <li><a href="#"><span class="icon-user"></span>'.$_SESSION['name'].'</a></li>
            <li><a href="#"><span class="icon-calendar"></span> My Calendar</a></li>

            <li class="more">
            <ul>
            <li><a href=""><span class="icon-cogs"></span></a></li>
            <li><a href="LogOut.php"><span class="icon-lock"></span></a></li>
            <li><a href=""><span class="icon-power-cord"></span></a></li>
            </ul>
            </li>
            </ul>
            </li>';
           } 
           else
           {
             if(isset($_COOKIE["user"]))
             {
              $cookie = explode("||", $_COOKIE["user"]);
              $_SESSION['name'] = $cookie[0];
              $_SESSION['avata'] = $cookie[1];
              echo ' <li class=dropdown avatar-dropdown ">
            <img src="publics/img/'.$_SESSION['avata'].'" class="img-circle avatar_user" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <ul class="dropdown-menu pull-right user-dropdown">
            <li><a href="#"><span class="icon-user"></span>'.$_SESSION['name'].'</a></li>
            <li><a href="#"><span class="icon-calendar"></span> My Calendar</a></li>

            <li class="more">
            <ul>
            <li><a href=""><span class="icon-cogs"></span></a></li>
            <li><a href="LogOut.php"><span class="icon-lock"></span></a></li>
            <li><a href=""><span class="icon-power-cord"></span></a></li>
            </ul>
            </li>
            </ul>
            </li>';
            }
            else
            {
              echo ' <li><a href="SignUp.php" >Đăng Kí</a></li>
              <li><a href = "LogIn.php">Đăng Nhập</a></li>';
            }
          }
          ?>

        </ul>
        <div class="extra-text visible-xs"> 
          <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
          <h5>Địa Chỉ</h5>
          <p>198 West 21th Street, Suite 721 New York NY 10016</p>
          <h5>Liên Lạc</h5>
          <ul class="social-buttons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>     
  </header>