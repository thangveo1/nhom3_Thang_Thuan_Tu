<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title></title>
  
  <link rel="stylesheet" href="../bootstrap/css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<?php 
  session_start();
  if(!isset($_SESSION['name']))
  {
    header("Location:../login.php");
  }
  include('../config/opp.php');
  $db = new Database;
  $db->connect();
  
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Trang chủ</a>
        </li>
        
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dịch vụ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Khám bệnh</a>
            <a class="dropdown-item" href="#">Thủ thuật</a>
            <a class="dropdown-item" href="#">Thuốc</a>
            <a class="dropdown-item" href="#">Kính</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quản lý
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="nhanvien.php">Nhân viên</a>
            <a class="dropdown-item" href="benhnhan.php">Bệnh nhân</a>
            <a class="dropdown-item" href="khothuoc.php">Kho</a>
            <a class="dropdown-item" href="#">Dịch vụ</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="themthuoc.php">Nhập thuốc</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="thongke.php">Thống kê</a>
        </li>
        
      </ul>
      <div class="navbar-right navbar-nav">
        <span class="mr-5 py-2" style="color:#070F04!important"> 
          <?php if (isset($_SESSION['name']))
            {
                echo 'Xin chào bác sĩ: <b>' . $_SESSION['name'].'</b>';
            }
          ?></span>
       <a class="nav-link" href="logout.php">Đăng xuất</a>
     </div>
   </div>
 </nav>
