
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta http-equiv="refresh" content="0.5 url=http://localhost/dangkyhoc/view/sinhvien_view.php" >
  <title>Xóa</title>
</head>
<body>
  <?php
  
  include_once('../core/db.php');
  $idSinhvien = $_GET['idSinhvien'];
  $sql="DELETE FROM dsdangky WHERE masinhvien = '$masinhvien'";
  $kq=mysqli_query($conn,$sql);
 $sql="DELETE FROM tbl_sinhvien WHERE idSinhvien = '$idSinhvien'";
 $result=mysqli_query($conn,$sql);
  if ($result) {
    header("http://localhost/doan9d/views/quanlysinhvien.php");
  }
  
  ?>
</body>
</html>