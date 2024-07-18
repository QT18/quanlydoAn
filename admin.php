<!DOCTYPE html>
<html>
<head>
	<title>Admin đăng nhập</title>
</head>
<body>
	<?php 
	if (isset($_POST['oke'])) {
	$user=addslashes($_POST['adusername']);
	$pass=addslashes($_POST['adpassword']);
	if($user =="admin"&&$pass=="123456")
		include_once('trangchuAD.php');
		else
		echo "Đăng nhập thất bại.";
}

	 ?>
<form method="POST" action="loginAdmin.php">
		<div align="center">
        <a href="">
        <img src="https://old.ctuet.edu.vn/CSS/MainPage/Image/banner.jpg" alt="ảnh CTUET">        </a>
        </a>
    </div>
    <fieldset style="text-align: center;">
	    <legend><p ><h1 align="center">| ADMIN |</h1></legend> </p>
	  
	    	<table align="center">
	    		<tr>
	    			<td>Email:</td>
	    			<td><input type="text" name="adusername" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Mật khẩu:</td>
	    			<td><input type="password" name="adpassword" size="30"></td>
	    		</tr>
	    		
	    			
	    		
	    	</table>
	    	<br><td colspan="2" align="center"> <input type="submit" name="oke" value="Đăng nhập"></td>
	</fieldset>

  </form>

</body>
</html>