<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="0.5 url=http://localhost/doan9d/views/sinhvien_view.php" >
	<title>Cập nhật sinh viên</title>
</head>
<body>
	<?php
	$idSinhvien = $_POST["idSinhvien"];
	$tenSinhvien =$_POST ["tenSinhvien"];
    $Gioitinh = $_POST['Gioitinh'];
	$Email = $_POST["Email"];
	$soDT = $_POST['soDT'];
	$idLop = $_POST['idLop'];
	$idDetai = $_POST['idDetai'];
	$password = $_POST['password'];
	
	 include_once('../core/db.php');

	$sql="UPDATE tbl_sinhvien SET idSinhvien='$idSinhvien',   tenSinhvien='$tenSinhvien'  , gioitinh ='$gioitinh', Email='$Email' ,  soDT='$soDT', idLop ='$idLop',password='$password' Where idSinhvien='$idSinhvien'";
	
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		header("http://localhost/doan9d/views/sinhvien_view.php");
	
	}
	?>

</body>
</html>