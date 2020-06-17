<?php 
	require_once("header.php");

	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();

	if(isset($_POST['begin'])&&(isset($_GET['type']))&&($_GET['type']=='thuoc')){
		$data=$db->thongke_thuoc($_POST['begin'],$_POST['end']);
	}
	if(isset($_POST['begin'])&&(isset($_GET['type']))&&($_GET['type']=='donthuoc')){
		$data=$db->thongke_donthuoc($_POST['begin'],$_POST['end']);
		print_r($data);
	}


	
?>
<form action="thongke_submit" method="get" accept-charset="utf-8">
	<div class="col-8">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a href="?type=thuoc" class=" mx-2 btn px-2 py-2 bg-info text-light" >Thống kê thuốc</a>
				<a href="?type=donthuoc" class=" btn px-2 py-2 bg-info text-light">Thống kê Đơn thuốc </a>
			</li>
		</ul>
	</div>
</form>
<form  method="POST">
	<div class="col-8 mx-auto py-2 px-2 bg-light">
	<div class="row">
		<div class="col">
			<input type="date" name="begin" class="btn border">
		</div>
		<div class="col">
			<input type="date" name="end" class="btn border">
		</div>
		<div class="col">
			<button type="submit" class="btn btn-success">KIỂM TRA</button>
		</div>
	</div>
</div>
</form>
<table class="table table-striped table-bordered text-center col-8 mx-auto">

		
			

<?php 
	if(isset($data)&&(isset($_GET['type']))&&($_GET['type']=='thuoc')){
		echo '<tr>
				<th>STT</th>
				<th>Tên thuốc</th>
				<th>số lượng tiêu thụ</th>
			</tr>';
		if($data==0){
			echo 'Khoobng có số liệu thống kê';
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
				<th>Ngay khám</th>
				<th>số lượng đơn thuốc</th>
			</tr>';
		if($data==0){
			echo 'Khoobng có số liệu thống kê';
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