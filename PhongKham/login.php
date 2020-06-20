<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng Nhập</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
	session_start();
	include('config/opp.php');
	$db = new Database;
	$db->connect();
	if (isset($_POST['username']))
	{
		$kq=$db->login($_POST['username'],$_POST['password']);
		if($kq==0)
		{
			echo'Sai tên đăng nhập hoặc mật khẩu!';
		}
		else
		{
			$_SESSION['name']=$kq['name'];
			$_SESSION['id']=$kq['id'];
			header("Location:layout/home.php");
		}
	}

 ?>
	<div class="">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">				
					<h4 class="modal-title">Đăng Nhập Thành Viên</h4>
				</div>
				<div class="modal-body">
					<form method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required="required">		
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="required">	
						</div>        
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Đăng nhập</button>
						</div>
					</form>
				</div>
				<!-- <div class="modal-footer">
					<a href="#">Quên mật khẩu?</a>
				</div> -->
			</div>
		</div>
	</div>     
</body>
</html>
