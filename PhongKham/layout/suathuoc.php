<?php 
	require_once("header.php");

	
	// $data = $db->benh_nhan();
	if(isset($_GET['id']))
	{
		$data = $db->thongtinthuoc($_GET['id']);
	}else
	{
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Sự cố!</strong> Không tìm ra thuốc cần sửa.
</div>';
		exit;
	}


	// bat dau sua
	if(isset($_POST['edit'])){
		$kq = $db->editthuoc($_GET['id'],$_POST['name'],$_POST['soluong'],$_POST['donvitinh'],$_POST['gianhap'],$_POST['giaban'],$_POST['tacdung']);


		if($kq){
			echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Thống báo!</strong> Bạn đã chỉnh sửa thành công. <a href="khothuoc.php"><b>Xem kho thuốc</b></a>
</div>';
		}

		
	}


?>

<h2 class="text-center text-info my-4">SỨA THÔNG TIN THUỐC</h2>
<form action="" method="post" accept-charset="utf-8" class="col-8 mx-auto text-center">
	<p>Nhập tên thuốc</p>
	<p>
		<input type="text" name="name" class="btn border col-6" value="<?php echo $data['name']; ?>">
	</p>
	<p>Nhập số lượng</p>
	<p>
		<input type="text" name="soluong" class="btn border col-6" value="<?php echo $data['soluong']; ?>">
	</p>
	<p>Đơn vị tính</p>
	<p>
		<input type="text" name="donvitinh" class="btn border col-6" value="<?php echo $data['donvitinh']; ?>">
	</p>
	<p>Tác dụng</p>
	<p>
		<input type="text" name="tacdung" class="btn border col-6" value="<?php echo $data['tacdung']; ?>">
	</p>
	<p>Giá nhập</p>
	<p>
		<input type="text" name="gianhap" class="btn border col-6" value="<?php echo $data['gianhap']; ?>">
	</p>
	<p>Giá bán</p>
	<p>
		<input type="text" name="giaban" class="btn border col-6" value="<?php echo $data['giaban']; ?>">
	</p>
	<p>
		<button name="edit" class="btn btn-success">SỬA THUỐC</button>
	</p>
	
</form>

