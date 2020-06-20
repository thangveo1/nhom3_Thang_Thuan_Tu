<?php 
	$ten = $_POST['giatri'];
	$conn = mysqli_connect( 'localhost', 'root' , '' , 'qly_phongkham' );
	mysqli_set_charset($conn, 'utf8' );
	$sql = "SELECT * FROM `benhnhan` WHERE name LIKE '%$ten%'";
	$result = mysqli_query($conn,$sql);
	$i = 1;
	while($value = mysqli_fetch_assoc($result)){
		echo '<tr>';
			echo '<td>'.$i++.'</td>';
			echo '<td>'.$value['id'].'</td>';
			echo '<td>'.$value['name'].'</td>';
			echo '<td>'.$value['ngay_sinh'].'</td>';
			if($value['gioi_tinh']==0){
				echo '<td>Nam</td>';
			}else{
				echo '<td>Nữ</td>';
			}
			
			echo '<td>'.$value['cmnd'].'</td>';
			echo '<td>'.$value['phone'].'</td>';
			echo '<td>'.$value['diachi'].'</td>';
			echo '<td><a href="suathongtin.php?id='.$value['id'].'"><i class="fas fa-edit mx-2 text-success"></i></a>
			<a href="lichsukhambenh.php"><i class="fas fa-file-medical mx-2 text-warning"></i></a>
			<a href="themdonthuoc.php?id='.$value['id'].'"><i class="fas fa-plus-circle"></i></a>
			</td>';

		echo '</tr>';
	}
	
?>