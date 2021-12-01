<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	include('includes/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tin tức</title>
	<link rel="stylesheet" type="text/css" href="css/Trangchu.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300;1,400;1,500&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<style type="text/css">
		#info{
			width: 80%;
			margin: 150px auto;
			text-align: center;
		}
		#info h2{
			font-size: 35px;
		}
		#info p{
			font-size: 22px;
		}
	</style>
</head>
<body>

   <!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="bannertintuc">
    <img src="img/bannertintuc2.png">
    <p>NHÓM 4</p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="info">
    	<h2>Thành viên</h2>
    	<p>Trần Mạnh Cường - 18103100043 - Nhóm trưởng</p>
        <p>Hà Hải Anh - 18103100075</p>
        <p>Nguyễn Thị Linh - 18103100057</p>
        <p>Dương Duy Lam - 18103100068</p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="gioithieu1" style="width: 800px; height: auto;margin: 150px auto;">
    <video width="800px" height="450px" controls>
    	<source src="img/N4Lulut.mp4" type="video/mp4">
    </video>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->

<?php
	include('includes/footer.php');
?>
</body>
</html>