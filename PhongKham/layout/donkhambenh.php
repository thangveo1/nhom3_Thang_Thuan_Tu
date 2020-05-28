<?php 
	require_once("header.php");
	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();
	if (isset($_POST['searchname'])){
		$tim_benhnhan=$db->tim_benhnhan($_POST['searchname']);


	}
	else{
		echo "23we4r%;";
	}
?>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">Đơn Khám Bệnh</h3>
		</div>
		<div class="col-md-12  col-md-offset-3 mx-auto text-center">
			
	<p class="text-right" style="font-size: 0.8em">
		<div class="navbar-form">
					<form  method="POST" accept-charset="utf-8">
						
				
					
						<input id="text-search" name="searchname" type="text" class="btn border col-5" placeholder="Họ tên, Số ĐT, số CMND...">
					
					<button class="btn btn-success mx-2">Tìm kiếm</button></form>
					<a href="thembenhnhan.php"><button class="btn btn-danger">Thêm Bệnh Nhân</button></a>
		</div>
	</div>
	<div class="col-12 mt-2 text-center">
		<div class="row">
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
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
			 ?>

		</div>	
	</div>
	<div class="col-12 ">
		<form  method="POST" accept-charset="utf-8" class="text-center">
		<?php 
			if(isset($tim_benhnhan)){
				echo"<input type='hidden' name='id' value='".$tim_benhnhan['id']."'/>";
			}
			else
			{
				echo"<input name='id'  type='hidden' value='0'/>";
			}

		 ?>
		<p> Tên Bệnh</p>
		<p>
		 <input type="text" name="tenbenh" class="col-7">
		 </p>
		<p> Loại dịch vụ</p>
		<p>
		 <input type="text" name="loaidichvu" class="col-7">
		 </p>
		<p>Tên thuốc </p>
		<p>
		 <input type="text" name="tenthuoc" class="col-7">
		</p>
		 <p>Ghi chú </p>
		 <p>
		 <input type="text" name="ghichu" class="col-7">
		</p>
			<p>
		<button name="add_don" class="btn btn-success">TẠO ĐƠN</button>
	</p>

		</form>
		
	</div>
<?php 
	require_once("footer.php");
?>
	
