<?php 
	require_once("header.php");

	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();
	
	$data = $db->benh_nhan();


?>
	<!--------------MAIN DSACH KH------------------>
	<div class="container">
		<div class="col-md-12 px-0">
			<h2 class="text-center text-info my-2">DANH SÁCH BỆNH NHÂN</h2>
			<div class="col-12 py-4 px-0">
				<div class="navbar-form">
					
						<input id="text-search" type="text" class="btn border col-5" placeholder="Họ tên, Số ĐT, số CMND...">
					
					<button class="btn btn-success mx-2">Tìm kiếm</button>
					<a href="thembenhnhan.php"><button class="btn btn-danger">Thêm Bệnh Nhân</button></a>
				</div>
			</div>		
		</div>		
		<div class="col-md-12" style="padding:0;">
			<div style="height: 500px;"> 
				<table class="table table-striped table-bordered text-center" style="">
					<thead style="font-size:17px;">
						<tr>
					  		<td>STT</td>
					  		<td>Mã KH</td>
					  		<td>Họ Tên</td>
					  		<td>Ngày Sinh</td>
					  		<td>Giới Tính</td>
					  		<td>Số CMND</td>
					  		<td>Số Điện Thoại</td>
					  		<td>Địa chỉ</td>
					  		<td></td>
						</tr>
					</thead>
					<tbody id="result-search">
						<?php 
						$i = 1;
						foreach ($data as $value){
							echo '<tr>';
							echo '<td>'.$i++.'</td>';
							echo '<td>'.$value['id'].'</td>';
							echo '<td>'.$value['name'].'</td>';
							echo '<td>'.$value['ngay_sinh'].'</td>';
							if($value['gioi_tinh']==0){
								echo '<td>Nam</td>';
							}else{
								echo '<td>Nữ</td>';
							}
							
							echo '<td>'.$value['cmnd'].'</td>';
							echo '<td>'.$value['phone'].'</td>';
							echo '<td>'.$value['diachi'].'</td>';
							echo '<td><a href="suathongtin.php?id='.$value['id'].'"><i class="fas fa-edit mx-2 text-success"></a></i><a href="lichsukhambenh.php"><i class="fas fa-file-medical mx-2 text-warning"></a></i></td>';

							echo '</tr>';
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