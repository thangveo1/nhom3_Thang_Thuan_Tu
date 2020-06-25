<?php 
	require_once("header.php");


?>
<div class="container">
	<div class="col-md-12 px-0">
		<h2 class="text-center text-info my-4">LỊCH SỬ KHÁM BỆNH</h2>
		<div class="col-12 py-2 px-0">
			<div class="navbar-form">

			</div>
		</div>		
	</div>
	<div class="col-md-12 row">
		<?php 
			$data = $db->select_bn_id($_GET['id']);
			if($data['gioi_tinh']==0){
				$GioiTinh = 'Nam';
			}else{
				$GioiTinh = 'Nữ';
			}
		?>
		<div class="col-md-2">
			<div class="form-group">
				<label>Mã Bệnh Nhân</label>
				<p style="color:#070F04!important; font-size: 20px;"><?php echo $data['id']; ?></p>	
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Họ và tên</label>
				<p style="color:#070F04!important; font-size: 20px;"><?php echo $data['name']; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Số điện thoại</label>
				<p style="color:#070F04!important; font-size: 20px;"><?php echo $data['phone']; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Ngày sinh</label>
				<p style="color:#070F04!important; font-size: 20px;"><?php echo $data['ngay_sinh']; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Giới Tính</label>
				<p style="color:#070F04!important; font-size: 20px;"><?php echo $GioiTinh; ?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Số CMND</label>
				<p style="color:#070F04!important; font-size: 20px;"><?php echo $data['cmnd']; ?></p>
			</div>
		</div>
	</div>		
	<div class="col-md-12" style="padding:0;">
		<div style="height: 500px;"> 
			<table class="table table-striped table-bordered text-center" style="">
				<thead style="font-size:17px;">
					<tr>
						<td>STT</td>
						<td>Tên Bệnh</td>
						<td>Ghi Chú</td>
						<td>Ngày Khám Bệnh</td>
						<td>Tổng Tiền</td>
						<td>Xem chi tiết</td>
					</tr>
				</thead>
				<tbody>
					<?php  
						$row = $db->lichsu_khambenh($_GET['id']);
						$stt=1;
						foreach ($row as $value) {
							echo"<tr>";
								echo"<td>$stt</td>";
								echo"<td>$value[name]</td>";
								echo"<td>$value[ghichu]</td>";
								echo"<td>$value[ngay_kham]</td>";
								echo"<td>$value[tiensau_uudai]</td>";
								echo '<td>
									<a href="lichsu-chitiet.php?id='.$_GET['id'].'&idkhambenh='.$value['id'].'"><i class="fas fa-plus-circle"></i></a>
								</td>';
							echo"</tr>";
							$stt++;
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