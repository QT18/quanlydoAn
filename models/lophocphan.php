
<?php
	include_once("../../core/db.php");
	$sql="SELECT tenLop,tenKhoa FROM lophocphan INNER JOIN tb_khoa ON lophocphan"."."."idKhoa = tb_khoa".".idKhoa";
	$kq=mysqli_query($conn,$sql);
?>