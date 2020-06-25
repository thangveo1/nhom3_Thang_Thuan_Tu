<?php 
	require_once("header.php");

	if(isset($_GET['type'])){

		if(isset($_POST['begin'])&&(isset($_GET['type']))&&($_GET['type']=='thuoc')){
			$data=$db->thongke_thuoc($_POST['begin'],$_POST['end']);
		}
		if(isset($_POST['begin'])&&(isset($_GET['type']))&&($_GET['type']=='donthuoc')){
			$data=$db->thongke_donthuoc($_POST['begin'],$_POST['end']);
		}
	}else{
		echo '<div class="alert alert-warning alert-dismissible fade show mt-4 mb-5 text-center">
  <strong>Thông báo!</strong> Mời chọn chức năng thống kê.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}
?>

<form action="thongke_submit" method="get" accept-charset="utf-8" class="container text-center my-3">
	<div class="">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a href="?type=thuoc" class="btn mx-2 btn px-2 py-2 bg-info text-light" >Thống kê Thuốc</a>
				<a href="?type=donthuoc" class="btn px-2 py-2 bg-info text-light">Thống kê Đơn thuốc </a>
			</li>
		</ul>
	</div>
</form>
<form  method="POST">
	<div class="container mx-auto py-3 px-2 bg-light text-center">
		<div class="row">
			<div class="col">
				<label>Chọn ngày bắt đầu: </label>
				<input type="date" name="begin" class="btn border">
			</div>
			<div class="col">
				<label>Đến ngày: </label>
				<input type="date" name="end" class="btn border">
			</div>
			<div class="col">
				<button type="submit" class="btn btn-success">Kiểm tra</button>
			</div>
		</div>
	</div>
</form>
<table class="table table-striped table-bordered text-center container mx-auto">
<?php 
	if(isset($data)&&(isset($_GET['type']))&&($_GET['type']=='thuoc')){
		echo '<tr>
		<th>STT</th>
		<th>Loại thuốc</th>
		<th>Số lượng xuất</th>
		</tr>';
		if($data==0){
			echo 'Không có số liệu thống kê';
		}else{
			foreach ($data as $value) {
				echo '<tr>';
				echo '<td>';
				echo $value['stt'];
				echo '</td>';
				echo '<td>';
				echo $value['name'];
				echo '</td>';
				echo '<td>';
				echo $value['soluong'];
				echo '</td>';
				echo '</tr>';
			}
		}
	}


	if(isset($data)&&(isset($_GET['type']))&&($_GET['type']=='donthuoc')){
		echo '<tr>
		<th>STT</th>
		<th>Ngày khám</th>
		<th>Tổng số đơn thuốc</th>
		</tr>';
		if($data==0){
			echo 'Không có số liệu thống kê';
		}else{
			foreach ($data as $value) {
				echo '<tr>';
				echo '<td>';
				echo $value['stt'];
				echo '</td>';
				echo '<td>';
				echo $value['ngay_kham'];
				echo '</td>';
				echo '<td>';
				echo $value['soluong'];
				echo '</td>';
				echo '</tr>';
			}
		}
	}
?>		
</table>