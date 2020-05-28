<?php 
	require_once("header.php");

	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();
	
	// $data = $db->benh_nhan();

	if(isset($_POST['add'])){
		$data = $db->add_thuoc($_POST['name'], $_POST['soluong'], $_POST['donvitinh'], $_POST['gianhap'], $_POST['giaban'], $_POST['cachdung']);


		if($data){
			echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Thống báo!</strong> Bạn đã thêm thuốc thành công. <a href="khothuoc.php"><b>Xem kho thuốc</b></a>
</div>';
		}
	}


?>

<h5 class="text-center text-uppercase text-danger py-3">Thêm thuốc</h5>
<form action="" method="post" accept-charset="utf-8" class="col-8 mx-auto text-center">
	<p>Nhập tên thuốc</p>
	<p>
		<input type="text" name="name" class="btn border col-6" placeholder="Nhập tên thuốc">
	</p>
	<p>Nhập số lượng</p>
	<p>
		<input type="text" name="soluong" class="btn border col-6" placeholder="Nhập số lượng">
	</p>
	<p>Đơn vị tính</p>
	<p>
		<input type="text" name="donvitinh" class="btn border col-6" placeholder="Nhập số lượng">
	</p>
	<p>Tác dụng</p>
	<p>
		<input type="text" name="cachdung" class="btn border col-6" placeholder="Nhập tên tác dụng">
	</p>
	<p>Giá nhập</p>
	<p>
		<input type="text" name="gianhap" class="btn border col-6" placeholder="Nhập giá nhập">
	</p>
	<p>Giá bán</p>
	<p>
		<input type="text" name="giaban" class="btn border col-6" placeholder="Nhập giá bán">
	</p>
	<p>
		<button name="add" class="btn btn-success">THÊM THUỐC</button>
	</p>
	
</form>

