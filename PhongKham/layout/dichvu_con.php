<?php 
	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();

	if(isset($_GET['id']))
	{
		$xuat = $db->xuat_dichvu_con($_GET['id']);
	}
	?>
	<select id="dichvu" class="custom-select mb-3 col-12">
		 	<?php 
		 		foreach ($xuat as $value) {
		 			echo"<option value='".$value['id']."'>".$value['name']."</option>";
		 		}
			?>
	</select>

