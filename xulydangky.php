<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// Nếu không phải là sự kiện đăng ký thì không xử lý
    //Nhúng file kết nối với database
    include('core/db.php');
        //   echo "ok";
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    if (isset($_POST["dangky"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  		    $idSinhVien   = $_POST["idSinhVien"];
  		    $tenSinhvien  = $_POST["tenSinhvien"];
            $gioitinh     =$_POST['gioitinh'];
            $Email        = $_POST["Email"];
  		    $soDT         = $_POST["soDT"];
            $idLop        = $_POST["idLop"];
            $password     = $_POST["password"];
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    // if (!$Email || !$password || !$tenSinhvien||!$idSinhVien||!$soDT || !$idLop)
    if (filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) == false) {
        echo "email không hợp lệ"; exit;
    }
    // if (filter_var($_POST['soDT'], FILTER_VALIDATE_INT) == false) {
    //     echo "Số điện không hợp lệ"; exit;
    // }

    if (!$idSinhVien || !$tenSinhvien || !$idLop || !$password)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    // kiểm tra email có bị trùng hay không  
          
    if (mysqli_num_rows(mysqli_query($conn,"SELECT Email FROM tbl_sinhvien WHERE Email='$Email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng nhập lại email! <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $sql = "INSERT INTO tbl_sinhvien (idSinhVien,tenSinhvien,gioitinh,Email,soDT,idLop,password)
            VALUES ('$idSinhVien','$tenSinhvien','$gioitinh','$Email','$soDT','$idLop','$password') ";
    $kq=mysqli_query($conn,$sql);
	if ($kq) 
	{
		echo "Chúc mừng bạn đã đăng ký tài khoản thành công. <a href='http://localhost/doan9d/login.php'>
							Đăng nhập ngay!
						</a>";
	}
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";

                          
    //Thông báo quá trình lưu
  }
?>
</body>
</html>