<?php 
	require_once("header.php");
	
	// $data = $db->benh_nhan();

	if(isset($_POST['add'])){
		$data = $db->add_thuoc($_POST['name'], $_POST['soluong'], $_POST['donvitinh'], $_POST['gianhap'], $_POST['giaban'], $_POST['cachdung']);


		if($data){
			echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Thống báo!</strong> Bạn đã thêm thuốc thành công! <a href="khothuoc.php"><b>Xem kho thuốc</b></a>
</div>';
		}
		else
		{
			echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Thống báo!</strong> Mời nhập thông tin của thuốc cần thêm!
</div>';
		}
	}


?>
<div class="container">
	<h2 class="text-center text-info my-4">THÊM THUỐC</h2>
	<form action="" method="post" accept-charset="utf-8" class="mx-auto">
		
		<div class="col-md-6 mx-auto">
			<div class="form-group">
				<label>Nhập tên thuốc</label>
				<input type="text" class="form-control"  name="name">
			</div>
			<div class="form-group">
				<label>Nhập số lượng</label>
				<input type="text" class="form-control"  name="soluong">
			</div>
			<div class="form-group">
				<label>Đơn vị tính</label>
				<input type="text" class="form-control"  name="donvitinh">
			</div>
			<div class="form-group">
				<label>Công dụng thuốc</label>
				<input type="text" class="form-control"  name="cachdung">
			</div>
			<div class="form-group">
				<label>Giá nhập vào</label>
				<input type="text" class="form-control"  name="gianhap">
			</div>
			<div class="form-group">
				<label>Giá bán ra</label>
				<input type="text" class="form-control"  name="giaban">
			</div>
			<button name="add" type="submit" class="center-block btn btn-success d-block mx-auto">Thêm Thuốc</button>
		</div>	
	</form>
</div>