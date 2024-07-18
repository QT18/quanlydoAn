<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
<!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>Đăng ký đồ án</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 10;
}
.td{
  padding-left: 20px;
}
.button {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
  background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
  background-color:#ededed;
  -webkit-border-top-left-radius:6px;
  -moz-border-radius-topleft:6px;
  border-top-left-radius:6px;
  -webkit-border-top-right-radius:6px;
  -moz-border-radius-topright:6px;
  border-top-right-radius:6px;
  -webkit-border-bottom-right-radius:6px;
  -moz-border-radius-bottomright:6px;
  border-bottom-right-radius:6px;
  -webkit-border-bottom-left-radius:6px;
  -moz-border-radius-bottomleft:6px;
  border-bottom-left-radius:6px;
  text-indent:0;
  border:1px solid #dcdcdc;
  display:inline-block;
  color:#777777;
  font-family:Times New Roman;
  font-size:15px;
  font-weight:normal;
  font-style:normal;
  height:25px;
  line-height:25px;
  width:100px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #ffffff;
}
.button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.button:active {
  position:relative;
  top:1px;
}
/* This button was generated using http://tools.ngoisaoso.vn/css3button/ */


#menu {
        font-size: 15px;
    color: white;
    padding: 5px 5px 0 5px;
    background-color: #FF6600;
    width: 100%;
    height: 30px;
    top: 89px;
    right: 0px;
   text-align: right;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
#menu a{
  color: white;
  padding: 5px;
  text-decoration: none;
  text-align: center;
  
  right: 5px;

}
    </style>
    <div  align="center">
        <a href="">
        <img src="https://old.ctuet.edu.vn/CSS/MainPage/Image/banner.jpg" alt="ảnh CTUET" width="100%" >        </a>
    </div>
<div id="menu">
 
    <a href="../trangchu.php">Trang Chủ</a>
    |
    <a href="../views/dangky.php">Đăng ký đồ án</a>
    |
     <a href="dsdangky.php">Đã đăng ký</a>
    |
    <a href="../views/profile.php"> 
     Sinh viên: 
      <?php 
      include('../core/db.php');
   
    //Lấy dữ liệu nhập vào
    $email = $_SESSION['Email'] ;

    $sql="SELECT * FROM tb_sinhvien WHERE email='$email'";
    $kq=mysqli_query($conn,$sql);
    if (mysqli_num_rows($kq) > 0) {
      {while ($row= mysqli_fetch_assoc($kq)) {
            # code...
            echo $row['tenSinhvien']; 
          }
          }
    }
    ?></a>
       -
    <a href="../login.php">Đăng Xuất</a>

</div>
</div>
<div style="padding-top: 60px">
<div align="center" style="font-weight: bold; font-size: 30px; color: black; margin: 15px">ĐĂNG KÝ ĐỒ ÁN</div>
<div align="center">
  <style type="text/css">
    #thongtin{
      color: black;
      margin: 30px;
      font-weight: bold;
    }
  </style>
  <div id="thongtin">
    <?php 
      include('../core/db.php');
     
    //Lấy dữ liệu nhập vào
    $Email = $_SESSION['Email'] ;

    $sql="SELECT * FROM tb_sinhvien WHERE tenSinhvien='$Email'";
    $kq=mysqli_query($conn,$sql);
    if (mysqli_num_rows($kq) > 0) {
      {while ($row= mysqli_fetch_assoc($kq)) {
            # code...
            echo "Họ tên: ".$row['tenSinhvien']."<br>";

            echo "Mã Sinh Viên: ".$row['idSinhvien'];
            echo "  -  Lớp: ".$row['tenLop'];
          }
          }
    }


       ?>
   </div>
</div>

<div style="position: relative; left: 50px">
<span style="font-size: 20px">
 <b>DANH SÁCH ĐỒ ÁN - khoa: 
  

<?php
$Email = $_SESSION['Email'] ;
include_once("../core/db.php");
      
  $sql="SELECT  * from tb_khoa where 1";
  $kq=mysqli_query($conn,$sql);
                                    
  if (mysqli_num_rows($kq) > 0) {
      {while ($row= mysqli_fetch_assoc($kq)) {
        echo $row['tenKhoa'];
        }}
    }
?></b> 
</span>
<span style="font-size: 20px; position: relative; top: 10px">
 <form action="dangky_find.php" method="post">
Tìm kiếm:
<input type="text" name="search" id="">
<input type="submit" name="tim" id="" value="Tìm kiếm">
</form>
</span>

<form action="">

    <table width="100%" style="padding-top: 20px">
      <tr align="center" style="height: 30px; width: 500px; text-align: center;background: #009AFF; color: white;">
        <td style="width: 5%"><b>STT</b></td>
        <td style="width: 20%" ><b>Đề tài</b></td>
        <td style="width: 10%"><b>Loại đề tài</b></td>
          <td style="width: 20%"><b>Giảng viên</b></td>
          <td style="width: 10%" ><b>Lớp</b></td>
          <td style="width: 10%" ><b>Nhóm đăng ký</b></td>

          <td width="5%"><b>Trạng thái</b></td>
           <td width="5%"><b>Đăng ký </b></td>
          
      </tr>
      <?php 
      $Email = $_SESSION['Email'] ;
      include_once("../core/db.php");
      
  $sql="SELECT tenLop, tenDetai, tenGiangvien , Nhomdangky, Trangthai
  FROM tb_dangky 
  INNER JOIN tb_giangvien on tb_giangvien.idGiangvien=tb_dangky.idGiangvien 
  inner join tb_lophocphan on tb_lophocphan.idLop=tb_dangky.idLop 
  inner join tb_Detai on tb_dangky.idDetai = tb_Detai.idDetai
  inner join tb_loaidetai on tb_dangky.idLoaidetai = tb_loaidetai.idLoaidetai";

       
   $kq=mysqli_query($conn,$sql);
   $id=0;

    while ($row=mysqli_fetch_array($kq)) {
        $tenDetai = $row['tenDetai'];
        $idLoaidetai = $row['idLoaidetai'];
        $tenGiangvien = $row['tenGiangvien'];
        $tenLop = $row['tenLop'];
        $Nhomdangky = $row['Nhomdangky'];
        $Trangthai = $row['Trangthai'];

        $id+=1;
        echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
        echo "<td style='text-align:center;'>".$id."</td>";
        echo "<td align='center'>".$row['tenDetai']."</td>";
        echo "<td class='td'>".$row['idLoaidetai']."</td>";
        echo "<td class='td'>".$row['tenGiangvien']."</td>";
        echo "<td class='td'>".$row['tenLop']."</td>";
        echo "<td class='td'>".$row['Nhomdangky']."</td>";
        echo "<td class='td'>".$row['Trangthai']."</td>";
        echo "<td width='100px' align='center'>
          <a href='../models/xldkdetai.php?idDetai=".$idDetai."'> 
          Đăng ký</a></td>";
        
        echo "</tr>";
    }
       ?>
    </table>
   </form>
</body>
</html>