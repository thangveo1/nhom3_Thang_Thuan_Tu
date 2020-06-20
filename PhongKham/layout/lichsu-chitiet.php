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
		<?php 
			$data = $db->select_bn_id($_GET['id']);
			$khambenh = $db->lichsu_khambenh_row($_GET['id'],$_GET['idkhambenh']);
			if($data['gioi_tinh']==0){
				$GioiTinh = 'Nam';
			}else{
				$GioiTinh = 'Nữ';
			}
		?>
		<div class="col-md-10 col-md-offset-1" style="border: 2px solid #ccc;">
			<div class="col-md-12">
				<div class="col-md-3 text-center" style="padding: 0;">
					<h4>PHÒNG KHÁM ĐA KHOA ĐH TÂY NGUYÊN</h4>
				</div>
				<!-- <div class="col-md-3 col-md-offset-6 text-right">
					<h4>Mã hoá đơn: 123</h4>
				</div> -->
			</div>
			<div class="col-md-12 text-center" >
				<h3><b>ĐƠN THUỐC</b></h3>
			</div>
			<div class="col-md-12">
				<form class="form-horizontal" role="form">
					<div class="col-md-4">
						<div class="form-group">
							<label>Tên Bệnh Nhân:</label>
							<span><?php echo $data['name']; ?></span>	
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Ngày sinh: </label>
							<span><?php echo $data['ngay_sinh']; ?></span>	
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Giới tính: </label>
							<span>
								<?php echo $GioiTinh; ?>
							</span>	
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Số điện thoại: </label>
							<span><?php echo $data['phone']; ?></span>	
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label>Tên bệnh: </label>
					<span><?php echo $khambenh['name']; ?></span>	
				</div>
			</div>
			<div class="col-md-12" >
				<div style="overflow:scroll;"> 
					<table class="table table-striped table-bordered text-center" style="">
						<thead style="font-size:17px;">
							<tr>
								<td>STT</td>
								<td>Tên Thuốc</td>
								<td>Số Lượng</td>
								<td>Đơn giá</td>
								<td>Thành tiền</td>
							</tr>
						</thead>
						<tbody>
						<?php
							$lichsu = $db->lichsu_donthuoc($_GET['idkhambenh']);
							$stt=1;
							$thanhtien = 0;
							$tongtien = 0;
							foreach ($lichsu as $value) {
								$tenthuoc = $db->tenthuoc($value['id_thuoc']);
								echo"<tr>";
									echo"<td>$stt</td>";
									echo"<td>$tenthuoc[name]</td>";
									echo"<td>$value[soluong]</td>";
									echo"<td>$value[gia]</td>";
									$thanhtien  = $value['soluong']*$value['gia'];
									echo "<td>$thanhtien</td>";
									$stt++;
								echo"</tr>";
							}
						

	
								// 	echo"<tr>";
								// 		echo"<td>$stt</td>";
								// 		echo"<td>$value[TenThuoc]</td>";
								// 		echo"<td>$value[DonVi]</td>";
								// 		echo"<td>$value[SoLuong]</td>";
								// 		echo"<td>".number_format($value['DonGia'])."</td>";
								// 		echo"<td>".number_format($value['ThanhTien'])."</td>";
								// 		echo"<td>$value[CachDung]</td>";
								// 		$tongtien = $tongtien+$value['ThanhTien'];
								// 		$stt++;
								// 	echo"</tr>";

						?>
						</tbody>
					</table>
				</div>	
			</div>
			<div class="col-md-12 text-right" style="font-size: 17px;">
				<div class="form-group">
					<label>Thành tiền: </label>
					<span style="color:#bd0103;"><b><?php echo number_format($khambenh['tientruoc_uudai']); ?></b></span>	
				</div>
			</div>
			<div class="col-md-12 text-right" style="font-size: 17px;">
				<div class="form-group">
					<label>Ưu đãi trên tổng đơn thuốc: </label>
					<span style="color:#bd0103;"><b><?php echo $khambenh['uudai']."%" ?></b></span>	
				</div>
			</div>
			<div class="col-md-12 text-right" style="font-size: 17px;">
				<div class="form-group">
					<label>Tổng tiền: </label>
					<span style="color:#bd0103;"><b>
						<?php 
							echo number_format($khambenh['tiensau_uudai'])."(VNĐ)";
						?></b>
					</span>	
				</div>
			</div>
			<div class="col-md-12" >
				<div class="form-group">
					<label>Ghi chú: </label>
					<span><?php echo $khambenh['ghichu'] ?></span>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-5 col-md-offset-7 text-center">
					<div class="form-group">
						<label>
							<?php 

							// echo "Ngày ".date("d",strtotime($data_khambenh['NgayKhamBenh']))." Tháng ".date("m",strtotime($data_khambenh['NgayKhamBenh']))." Năm ".date("Y",strtotime($data_khambenh['NgayKhamBenh'])) ;
							?>
						</label>
						<br/>
						<b>Bác sĩ điều trị</b>
						<br/>
						<br/>
						<br/>
						<br/>
						<b>Bs Nguyễn Hữu Thắng</b>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12" style="margin-top:15px;">
		<a href="lichsukhambenh.php?id=<?php echo $_GET['id']; ?>"><button type="button" class="btn btn-success center-block">Quay về trang chủ</button></a>
	</div>


