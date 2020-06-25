<?php 
	session_start();
	include('../config/opp.php');
	$db = new Database;
	$db->connect();
	
	$thuoc=$db->select_thuoc_goiy($_GET['name']);

?>
<table class="table bg-light">
	<thead>
		<tr>
			<th>Tên thuốc</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if($thuoc!=0)
			{
				foreach ($thuoc as $value) {
					echo '<tr><td id="name_'.$value['id'].'">'.$value['name'].'</td><td class="text-right"><i class="chon_thuoc fas fa-plus-circle text-info" style="font-size:2em;" id="'.$value['id'].'"></i></td></tr>';
				}
			}
		 ?>
	</tbody>
</table>

<script>
	$('.chon_thuoc').on('click',function(){
		var id = $(this).attr('id');

		var name = $('#name_'+id).html();
		

		$('#select_thuoc').append('<table width="100%"><tbody><tr><td>'+name+'</td><td class="text-right"><input type="hidden" name="tenthuoc[]" value='+id+'><input type="number" name="soluong_thuoc['+id+']" value="1" class=" btn border" style="width:70px;"></td></tr></tbody></table>');

	});
</script>