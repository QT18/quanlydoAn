 <!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
	
	<style type="text/css">
                .input98{
            font-family: Poppins-Regular;
            font-size: 18px;
            color: #fff;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 25px;
            background: #e1c8c3;
            padding-left: 5px;
            border-color: white;

                }

                .input99{
        font-family: Poppins-Regular;
            font-size: 20px;
            color: #0A0FAF;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 45px;
            background: transparent;
            padding-left: 5px;
                }
                .wrap-login101 {
            width: 500px;
            border-radius: 10px;
            overflow: hidden;
            padding: 55px 55px 37px 55px;
            background: #898DF9;
            background: -webkit-linear-gradient(top, #99FFFF, #898DF9);
        }
        .login101-form-btn {
            font-family: Poppins-Medium;
            font-size: 16px;
            color: #FFFFFF;
            line-height: 1.2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 120px;
            height: 50px;
            border-radius: 25px;
            background: #9152f8;
            background: -webkit-linear-gradient(bottom, rgba(0,0,0,.15), #0209D1);
            background: -o-linear-gradient(bottom, #7579ff, #b224ef);
            background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
            background: linear-gradient(bottom, #7579ff, #b224ef);

            position: relative;
            z-index: 1;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            text-align: center;
        }
        .gt{
            width: 100%;
            height: 45px;
            padding-left: 5px;
            padding-top: 10px;
            color: black;
            padding-bottom: 10px;
        }
	</style>
	<title>Đăng ký</title>
	<meta charset="utf-8">
</head>
<body>
            <div class="limiter">
    <div class="container-login100" >
        <div class="wrap-login101">
            <form class="" action="http://localhost/doan9d/xulydangky.php" method="POST">
                <span class="">
                    <div align="center">	<span class="" >
                    <a href="">
                    <img src="https://ctuet.edu.vn/View/assets/images/logo.png" width="50%" >
    </a>
                </span></div>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    ĐĂNG KÝ
                </span>
                <div style="color: blue; margin: 2px;">Mã sinh viên:</div>
                <div class="wrap-input100 validate-input" data-validate = "">
                    <input class="input99" type="text" name="idSinhVien">
                    
                </div>
                <div style="color: blue; margin: 2px;">Họ tên:</div>
                <div class="wrap-input100 validate-input" data-validate = "">
                    <input class="input99" type="text" name="tenSinhvien">
                    
                </div>
                <div style="color: blue; margin: 2px;">Giới tính:</div>
                <div class="gt" data-validate = "">
                    <input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
                            <input  type="radio" name="gioitinh" value="Nữ">Nữ
                    
                </div>
                <div style="color: blue; margin: 2px;">Email:</div>
                <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                    <input class="input99" type="text" name="Email">
                    
                </div>

                <div style="color: blue; margin: 2px;">Số điện thoại:</div>
                <div class="wrap-input100 validate-input" data-validate = "">
                    <input class="input99" type="text" name="soDT">                    
                </div>

                <div style="color: blue; margin: 2px;">Lớp:</div>
                <div class="gt" data-validate = "">
                        <select class="input98" name="idLop">
                        <?php
                        include_once("./core/db.php");

                            $sql="SELECT tenLop,tenKhoa FROM lophocphan INNER JOIN tbl_khoa ON lophocphan.idKhoa = tbl_khoa.idKhoa";
                            $kq=mysqli_query($conn,$sql);
                            include_once('../models/lophocphan.php');
                            while ($row=mysqli_fetch_array($kq)) {
                                    echo "<option value=".$row['tenLop'].">".$row['tenLop']." - Khoa: ".$row['tenKhoa']."</option>";
                            }
                        ?>
                    </select>
                </div>	
                <div style="color: blue; margin: 2px;">Password:</div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input99" type="password" name="password">
                    
                </div>			
                <div class="container-login101-form-btn" style=" align=center">
                    <input type="submit"  class="login101-form-btn" name="dangky" value="Đăng ký">
                </div>

                <div class="text-center p-t-90">
                    <p class="" style="color: white">Bạn đã có tài khoản.
                    <a class="" style="color: white" href="http://localhost/doan9d/login.php">
                        <u style="color: blue">Đăng nhập?</u>
                    </a></p>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
	


</body>
</html>
</body>
</html>