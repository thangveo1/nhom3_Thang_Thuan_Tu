<?php 
	require_once("header.php");
	$dichvu = $db->xuat_dichvu();
	$benhnhan=$db->select_bn_id($_GET['id']);

	if(isset($_POST['taikham']) && ($_POST['taikham']=='on'))
	{
		$taikham = 1;
	}
	else
	{
		$taikham = 0;
	}
?>
<h2 class="text-center text-info my-4">ĐƠN KHÁM</h2>
<div class="col-md-6 mx-auto my-3" style="font-size: 18px;">
	<label>Thêm đơn thuốc cho bênh nhân: <b><?php echo $benhnhan['name'];?></b></label>
</div>

<div class="col-md-6 mx-auto">
		<form action='hoadon.php?id=<?php echo $_GET['id'] ?>' method="POST" accept-charset="utf-8" class="">
		
			<div class="form-group">
				<label>Tên bệnh</label>
				<input type="text" class="form-control"  name="tenbenh" >
			</div>
			<div class="form-group row mx-auto">
				<div class="col-8 row mr-2">
					<label class="mr-4">Loại dịch vụ</label>
					<select id="dichvu" class="custom-select mb-3 col-8" name="dichvu">
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
				<input type="text" class="form-control"  id="goiy_thuoc">
				<div id="select_goiy_thuoc">
					
				</div>
				<div id="select_thuoc" class="">
					
				</div>
			</div>
			<div class="form-group">
				<label>Tái khám</label>
				<input type="checkbox" name="taikham">
				<label class="ml-5">Ưu đãi</label>
				<input type="number" name="uudai" class="col-2 btn border" value="0">
				<span style ="color:black;">(%)</span>
			</div>
			<div class="form-group">
				<label>Ghi chú</label>
				<input type="text" class="form-control"  name="ghichu" >
			</div>

			<button name="add_don" type="submit" class="center-block btn btn-success d-block mx-auto">Tạo Đơn</button>
		</form>
	</div>

<script>
	$('#goiy_thuoc').on('input',function(){
		$.ajax({
			url: 'goiy_thuoc.php',
			type: 'GET',
			datetype: 'text',
			data:{
				name: $('#goiy_thuoc').val()
			},
			success: function(result){
				$('#select_goiy_thuoc').fadeIn(); 
				$('#select_goiy_thuoc').html(result);
			}
		})
	});

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
				$('#select_goiy_thuoc').fadeOut();
			}
		})
	});
</script>