<?php 
	require_once("header.php");
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">Đơn Khám Bệnh</h3>
		</div>
		<div class="col-md-6 col-md-offset-3 mx-auto">
			<div class="col-10 mx-auto shadow py-5">
	<h6 class="text-uppercase text-center pb-5"><b>ĐƠN KHÁM BỆNH</b></h6>
	<p class="text-right" style="font-size: 0.8em">
		<?php 
			echo 'Ngày kê đơn '.$showkq[0]['ngaykedon'].'<br>';
			echo 'Mã đơn:<b> '.$showkq[0]['id'].'</b><br>';
		?>
	</p>

	<p class="text-left" style="font-size: 0.8em">
		<?php 
			echo 'Bệnh nhân:<b> '.$showkq[0]['tenbenhnhan'].'</b><br>';
			echo 'Mã bệnh nhân:<b> '.$showkq[0]['idbenhnhan'].'</b><br>';
			echo 'Chuẩn đoán:<b> '.$showkq[0]['tenbenh'].'</b><br>';
		?>
	</p>
	
	<p class="pt-3">
		Lời dặn: 
		<small>
		<?php 
		echo $showkq['0']['ghichu'];
		 ?>
		 </small>
	</p>
	<p class="text-left pt-5" style="font-size: 0.8em">
		<?php 
			echo 'Bác sỹ:<b> '.$showkq[0]['tenbacsy'].'</b><br>';
		?>
	</p>
</div>
		</div>
	</div>
<?php 
	require_once("footer.php");
?>
	
