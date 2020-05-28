<?php 
	require_once("header.php");

	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();
?>

<div class="container">
		<div class="col-md-12 px-0">
			<h5 class="text-center text-uppercase text-danger py-3">Lịch sử khám bệnh</h5>
			<div class="col-12 py-4 px-0">
				<div class="navbar-form">
					
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

				</table>
			</div>	
		</div>
	</div>
<?php 
	require_once("footer.php");
?>