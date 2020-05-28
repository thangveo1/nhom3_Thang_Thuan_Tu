<?php 
	require_once("header.php");

	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();
	
	$data = $db->nhan_vien();


?>
	<!--------------MAIN DSACH KH------------------>
	<div class="container">
		<div class="col-md-12 px-0">
			<h2 class="text-center text-info my-2">DANH SÁCH NHÂN VIÊN</h2>
			<div class="col-12 py-4 px-0">
				<div class="navbar-form">
					
						<input id="text-search" type="text" class="btn border col-5" placeholder="Họ tên, Số ĐT, số CMND...">
					
					<button class="btn btn-success mx-2">Tìm kiếm</button>
					<a href="#"><button class="btn btn-danger">Thêm Nhân Viên</button></a>
				</div>
			</div>		
		</div>		
		<div class="col-md-12" style="padding:0;">
			<div style="height: 500px;"> 
				<table class="table table-striped table-bordered text-center" style="">
					<thead style="font-size:17px;">
						<tr>
					  		<td>STT</td>
					  		<td>Mã NV</td>
					  		<td>Họ Tên</td>
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
							echo '<td>'.$value['phone'].'</td>';
							echo '<td>'.$value['diachi'].'</td>';
							echo '<td><i class="fas fa-edit mx-2 text-success"></i><i class="far fa-trash-alt text-danger"></i></td>';

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