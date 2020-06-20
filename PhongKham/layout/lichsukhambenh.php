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
  	<link rel="stylesheet" href="../bootstrap/css/bootstrap-tu.css">
 
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
	  	<span class="mr-5 py-2"> 
	  		<?php if (isset($_SESSION['name']))
	  		{
	  			echo 'Xin chào bác sĩ: <b>' . $_SESSION['name'].'</b>';
	  		}
	  		?></span>
	  		<a class="nav-link" href="logout.php">Đăng xuất</a>
	  	</div>
	  </div>
	</nav>

<div class="container">
	<div class="col-md-12 px-0">
		<h2 class="text-center text-info my-4">LỊCH SỬ KHÁM BỆNH</h2>
		<div class="col-12 py-2 px-0">
			<div class="navbar-form">

			</div>
		</div>		
	</div>
	<div class="col-md-12">
		<?php 
			$data = $db->select_bn_id($_GET['id']);
			if($data['gioi_tinh']==0){
				$GioiTinh = 'Nam';
			}else{
				$GioiTinh = 'Nữ';
			}
		?>
		<div class="col-md-2">
			<div class="form-group">
				<label>Mã Bệnh Nhân</label>
				<p><?php echo $data['id']; ?></p>	
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Họ và tên</label>
				<p><?php echo $data['name']; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Số điện thoại</label>
				<p><?php echo $data['phone']; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Ngày sinh</label>
				<p><?php echo $data['ngay_sinh']; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Giới Tính</label>
				<p><?php echo $GioiTinh; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Số CMND</label>
				<p><?php echo $data['cmnd']; ?></p>
			</div>
		</div>
	</div>		
	<div class="col-md-12" style="padding:0;">
		<div style="height: 500px;"> 
			<table class="table table-striped table-bordered text-center" style="">
				<thead style="font-size:17px;">
					<tr>
						<td>STT</td>
						<td>Tên Bệnh</td>
						<td>Ghi Chú</td>
						<td>Ngày Khám Bệnh</td>
						<td>Tổng Tiền</td>
						<td>Xem chi tiết</td>
					</tr>
				</thead>
				<tbody>
					<?php  
						$row = $db->lichsu_khambenh($_GET['id']);
						$stt=1;
						foreach ($row as $value) {
							echo"<tr>";
								echo"<td>$stt</td>";
								echo"<td>$value[name]</td>";
								echo"<td>$value[ghichu]</td>";
								echo"<td>$value[ngay_kham]</td>";
								echo"<td>$value[tiensau_uudai]</td>";
								echo '<td>
									<a href="lichsu-chitiet.php?id='.$_GET['id'].'&idkhambenh='.$value['id'].'"><i class="fas fa-plus-circle"></i></a>
								</td>';
							echo"</tr>";
							$stt++;
						}
					?>
					
				</tbody>
			</table>
		</div>	
	</div>
</div>
<?php 
	require_once("footer.php");
?>