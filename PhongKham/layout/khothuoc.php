<?php 
	require_once("header.php");

	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();
	$count = 6;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	 $data = $db->xemkhothuoc($page, $count);

	 $tongsoluong = $db->demtongthuoc();
	 


?>

<h2 class="text-center text-info my-4">QUẢN LÝ KHO THUỐC</h2>

<div class="col-8 mx-auto">
  <a href="themthuoc.php" title="" ><button type="" class="btn btn-info float-right mb-2">THÊM THUỐC</button></a>
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
    <tbody>
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
</div>

</div>