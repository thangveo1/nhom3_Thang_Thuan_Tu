<?php 
	require_once("header.php");

	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();

	if(isset($_GET['id']))
	{
		$data = $db->thongtinbenhnhan($_GET['id']);
	}else
	{
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Sự cố!</strong> Không tìm ra tên bệnh nhân cần sửa.
</div>';
		exit;
	}
	// bat dau sua
	if(isset($_POST['edit'])){
		$kq=$db->editbenhnhan($_GET['id'],$_POST['name'],$_POST['phone'],$_POST['diachi'],$_POST['cmnd'],$_POST['ngay_sinh'],$_POST['ngay_kham'],$_POST['ngay_taikham']);

		if($kq){
			echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Thống báo!</strong> Bạn đã chirnh suwar rhafnh coong. <a href="thembenhnhan.php"><b>Xem benh nhan</b></a>
</div>';
	}
} 
	
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">SỬA THÔNG TIN BỆNH NHÂN</h3>
		</div>
		<div class="col-md-6 col-md-offset-3 mx-auto">
			<?php 
				require_once "../config/opp.php";
				
				$nhap = new Database();  
			    $nhap->connect();
			    if(isset($_POST['add_bn']))
			    {
			    	$check = $nhap->check_phone($_POST['phone']);
			    	if($check==0)
			    	{
			    		$error=$nhap->add_benhnhan(
						$_POST['name'],
						$_POST['phone'],
						$_POST['diachi'],
						$_POST['cmnd'],
						$_POST['ngay_sinh'],
						$_POST['gioi_tinh'],
						$_POST['ngay_taikham'],
						$_POST['ghi_chu'],
						date("Y/m/d"));	
			    	}
			    	else
			    	{
			    		echo"<script>";
			    		echo"alert('Số điện thoại này đã được đăng kí!')";
						echo"</script>";
			    	}
			    }
				
			?>	
			<form method="post" role="form" >
				<div id="alert-sdt" >
					
				</div>
				<div class="form-group">
					<label>Số điện thoại</label>
					<input type="text" class="form-control"  name='phone' value="<?php echo $data['phone'] ?>">
				</div>
				<div id="form-info">
					<div class="form-group">
						<label>Họ và tên</label>
						<input type="text" class="form-control"  name="name"  value="<?php echo $data['name'] ?>">
					</div>
					<div class="form-group">
						<label>Ngày sinh</label>
						<input type="date" class="form-control" placeholder="dd/mm/yyy" name="ngay_sinh" value="<?php echo $data['ngay_sinh'] ?>">
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<select class="form-control" name="gioi_tinh" value="<?php echo $data['gioi_tinh'] ?>" style="width: 100%;">
							<option value="0">Nam</option>
							<option value="1">Nữ</option>
						</select>
					</div>
					<div class="form-group">
						<label>Số CMND</label>
						<input type="text" class="form-control"  name="cmnd" value="<?php echo $data['cmnd'] ?>">
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="text" class="form-control"  name="diachi" value="<?php echo $data['diachi'] ?>">
					</div>
					<div class="form-group">
						<label>Ngày tái khám</label>
						<input type="date" class="form-control" placeholder="dd/mm/yyy" name="ngay_taikham" value="<?php echo $data['ngay_taikham'] ?>">
					</div>
					<div class="form-group">
						<label>Ghi chú</label>
						<input type="text" class="form-control"  name="ghi_chu" value="<?php echo $data['ghi_chu'] ?>">
					</div>
				</div>
				<button name="add_bn" type="submit" class="center-block btn btn-success d-block mx-auto">Sửa</button>
			</form>
		</div>
	</div>
<?php 
	require_once("footer.php");
?>
	
