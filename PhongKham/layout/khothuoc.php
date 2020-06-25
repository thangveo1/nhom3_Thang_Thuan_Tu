<?php 
	require_once("header.php");

	$count = 6;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	 $data = $db->xemkhothuoc($page, $count);

	 $tongsoluong = $db->demtongthuoc();
	 


?>

<h2 class="text-center text-info my-4">QUẢN LÝ KHO THUỐC</h2>

<div class="col-8 mx-auto">
  <div class="col-12 py-4 px-0">
    <div class="navbar-form">
        <input id="text-search" type="text" class="btn border col-5" placeholder="Nhập tên thuốc để tìm kiếm...">
        <a href="themthuoc.php" title="" ><button type="" class="btn btn-info float-right mb-2">THÊM THUỐC</button>
    </div>
  </div>
  </a>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Tên thuốc</th>
        <th>Số lượng</th>
        <th>Đơn vị tính</th>
        <th>Tác dụng</th>
        <th>Giá nhập</th>
        <th>Giá bán</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="ketqua-thuoc">
      <?php
      	if($data!=0){
      		foreach ($data as  $value) {
      			echo '<tr>';
        			echo '<td>'.$value['id'].'</td>';
        			echo '<td>'.$value['name'].'</td>';
        			echo '<td>'.$value['soluong'].'</td>';
        			echo '<td>'.$value['donvitinh'].'</td>';
        			echo '<td>'.$value['tacdung'].'</td>';
        			echo '<td>'.$value['gianhap'].'</td>';
        			echo '<td>'.$value['giaban'].'</td>';
        			echo '<td><a href="suathuoc.php?id='.$value['id'].'"><i class="fas fa-edit"></i></a></td>';
      			echo '</tr>';
      		}
      	}
      ?>
    </tbody>
  </table>
 <?php
 	$sotrang = CEIL($tongsoluong / $count);
 	 if($sotrang>1){
 	 	for($i=1;$i<=$sotrang;$i++){
 	 		if($i==$page){
 	 			echo '<a href="?page='.$i.'" class="btn border ml-1 bg-success text-light">'.$i.'</a>';
 	 		}else
 	 		{
 	 			echo '<a href="?page='.$i.'" class="btn border ml-1 bg-light">'.$i.'</a>';
 	 		}
 	 	}
 	 }
 ?>
 <!--SEARCH THÔNG TIN BÊNH NHÂN BẰNG TÊN-->
  <script>
    $(document).ready(function() {
      $("#text-search").keyup(function() {
        var a = $(this).val();
        $.post("../ajax/search-tenthuoc-khothuoc.php",{giatri:a},function(data){
          $("#ketqua-thuoc").html(data);
        });
      });     
    });   
  </script>
</div>

</div>