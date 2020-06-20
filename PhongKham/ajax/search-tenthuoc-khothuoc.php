<?php 
	$tenthuoc = $_POST['giatri'];
	$conn = mysqli_connect( 'localhost', 'root' , '' , 'qly_phongkham' );
	mysqli_set_charset($conn, 'utf8' );
	$sql = "SELECT * FROM `thuoc` WHERE name LIKE '%$tenthuoc%'";
	$result = mysqli_query($conn,$sql);
	$i = 1;
	while($value = mysqli_fetch_assoc($result)){
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
	
?>