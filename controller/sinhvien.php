<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
    include_once('../core/db.php');
    $idSinhvien = $_GET['idSinhvien'];
	$sql="SELECT * From tbl_sinhvien Where idSinhvien='$idSinhvien'";
	$kq=mysqli_query($conn,$sql);
	$pr=mysqli_fetch_array($kq);
	 ?>
	  <div align="center">
        <a href="">
        <img src="https://old.ctuet.edu.vn/CSS/MainPage/Image/banner.jpg" alt="ảnh CTUET" width="100%" >        </a>
        </a>
    </div>
        <div align="center"> 
            
           <form method="post" action="../models/capnhatSV.php">

            <table>
    	   <tr>
              <td><input type="hidden" name="idSinhvien" value="<?php echo $idSinhvien ?>"></td>
         </tr>
        <tr>
            <th>Họ tên:</th>
            <td><input type="text" name="tenSinhvien" value="<?php echo $pr['tenSinhvien'] ?>"></td>
        </tr>
        <tr>
            <th>Giới tính:</th>
            <td>  <div class="gt" data-validate = "">
            <input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
                <input  type="radio" name="gioitinh" value="Nữ">Nữ
            
          </div></td>
        </tr>
        <tr>
            <th>Số điện thoại :</th>
            <td><input type="text" name="soDT" value="<?php echo $pr['soDT'] ?>"></td>
        </tr>

        <tr>
            <th>Lớp:</th>
            <td> 
            	<select name='tenLop'>
                    <?php
                    include_once('../core/db.php');

                    $sql='SELECT tenLop,tenDetai FROM tbl_sinhvien INNER JOIN lophocphan ON lophocphan.idLop = tbl_sinhvien.idLop
                    INNER JOIN tbl_detai ON tbl_detai.idDetai = tbl_sinhvien.idDetai';

                    $kq=mysqli_query($conn,$sql);
                        include_once('models/lophocphan.php');
                        while ($row=mysqli_fetch_array($kq)) {
                                echo "<option value=".$row['tenLop'].">".$row['tenLop']." - khoa: ".$row['tenKhoa']."</option>";
                        }
                    ?>
                </select>
             </td>
        </tr>
        <tr>
            <th>Đề tài:</th>
            <td> 
            	<select name='tenDetai'>
                    <?php
                    include_once('../core/db.php');

                    $sql='SELECT tenLop,tenDetai FROM tbl_lophocphan INNER JOIN tb_detai ON tb_lophocphan.idKhoa = tb_khoa.idKhoa';
                    $kq=mysqli_query($conn,$sql);
                        include_once('models/lophocphan.php');
                        while ($row=mysqli_fetch_array($kq)) {
                                echo "<option value=".$row['tenLop'].">".$row['tenLop']." - khoa: ".$row['tenKhoa']."</option>";
                        }
                    ?>
                </select>
             </td>
        </tr>

        <tr>
            <th>Password:</th>
            <td><input type="text" name="password" value="<?php echo $pr['password'] ?>"></td>
        </tr>
       <tr>
           
           
           <td colspan="2">    <input type="submit" name="" id="" value="Sửa"></td>
       </tr>
    </table>

        </form>
      </div>
      
</body>
</html>