<?php 
	require_once("header.php");
	
	$dichvu = $db->xuat_dichvu();
	if (isset($_POST['searchname'])){
		$tim_benhnhan=$db->tim_benhnhan($_POST['searchname']);
	}
?>
	<div class="container">
		<div class="col-md-12 px-0 text-center">
			<h2 class="text-center text-info my-2">DANH SÁCH BỆNH NHÂN</h2>
			<div class="col-12 py-4 px-0">
				<div class="navbar-form">
					<form method="POST">
						<input id="text-search" name="searchname" type="text" class="btn border col-5" placeholder="Họ tên, Số ĐT, số CMND...">
						<button class="btn btn-success mx-2">Tìm kiếm</button>
						<a href="thembenhnhan.php"><button class="btn btn-danger">Thêm Bệnh Nhân</button></a>
					</form>
				</div>
			</div>		
		</div>	
	<div class="col mt-2 text-center">
		<div class="row text-center">
			<?php 
			if(isset($tim_benhnhan)){
				echo '<div class="col px-2 py-3" style="BACKGROUND:#DAF7A6">';
				echo $tim_benhnhan['id'];
				echo '</div>';
				echo '<div class="col px-2 py-3" style="BACKGROUND:#DAF7A6">';
				echo $tim_benhnhan['name'];
				echo '</div>';
				echo '<div class="col px-2 py-3" style="BACKGROUND:#DAF7A6">';
				echo $tim_benhnhan['phone'];
				echo '</div>';
				echo '<div class="col px-2 py-3" style="BACKGROUND:#DAF7A6">';
				echo $tim_benhnhan['cmnd'];
				echo '</div>';
				echo '<div class="col px-2 py-3" style="BACKGROUND:#DAF7A6">';
				echo $tim_benhnhan['diachi'];
				echo '</div>';
			}
			else{
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Thông báo!</strong> Chưa có thông tin về bệnh nhân cần tìm.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
			 ?>

		</div>	
	</div>
	<div class="col-md-6 mx-auto">
		<form  method="POST" accept-charset="utf-8" class="">
		<?php 
			if(isset($tim_benhnhan)){
				echo"<input type='hidden' name='id' value='".$tim_benhnhan['id']."'/>";
			}
			else
			{
				echo"<input name='id'  type='hidden' value='0'/>";
			}

		 ?>
			<div class="form-group">
				<label>Tên bệnh</label>
				<input type="text" class="form-control"  name="tenbenh" >
			</div>
			<div class="form-group row mx-auto">
				<div class="col-8 row mr-2">
					<label class="mr-2">Loại dịch vụ</label>
					<select id="dichvu" class="custom-select mb-3 col-8">
		 			<?php 
		 				foreach ($dichvu as $value) {
		 				echo"<option value='".$value['id']."'>".$value['name']."</option>";
		 				}
		 	 		?>
		 			</select>
		 		</div>
		 		<div id="dichvu_con" class="col-4">

		 		</div>
			</div>
			<div class="form-group">
				<label>Loại thuốc cần dùng</label>
				<input type="text" class="form-control"  name="tenthuoc" >
			</div>
			<div class="form-group">
				<label>Ghi chú</label>
				<input type="text" class="form-control"  name="ghichu" >
			</div>
			<button name="add_don" type="submit" class="center-block btn btn-success d-block mx-auto">Tạo Đơn</button>
		</form>
	</div>
</div>
<?php 
	require_once("footer.php");
?>
	
<script>
	$('#dichvu').on('click',function(){
		$.ajax({
			url: 'dichvu_con.php',
			type: 'GET',
			datetype: 'text',
			data:{
				id: $('#dichvu').val()
			},
			success: function(result){
				$('#dichvu_con').html(result);
			}
		})
	});
</script>