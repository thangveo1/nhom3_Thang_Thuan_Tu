<?php 
require_once("header.php");
?>
<div class="col-lg-12">
	<div class="row mt-4">
		<img src="https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg">
	</div><!---end of row--->
</div><!---end of col-12--->
<!---page load popup_content---->
<div id="popup_content_wrap" style='display:none'>
	<div id="popup_content" class="mt-5">
		<center>
			<h1>PHÒNG KHÁM ĐA KHOA ĐH TÂY NGUYÊN</h1>
			<span><i>Địa chỉ: 567 Lê Duẩn, TP Buồn Ma Thuột</i></span>
			<hr><hr>
			<p>
				<?php 
	                echo 'Chào mừng bác sĩ: <b>' . $_SESSION['name'].'</b>';
	            ?>
            </p>
            <hr>
			<input type="submit" name="submit" value="Tiếp tục" class="btn btn-primary" onClick="popup_content('hide')" />
		</center>
	</div>
</div>
<!---end page load popup_content---->
<?php 
require_once("footer.php");
?>

<script>
	function popup_content(hideOrshow) {
		if (hideOrshow == 'hide') document.getElementById('popup_content_wrap').style.display = "none";
		else document.getElementById('popup_content_wrap').removeAttribute('style');
	}
	window.onload = function () {
		setTimeout(function () {
			popup_content('show');
		}, 100);
	}
</script>