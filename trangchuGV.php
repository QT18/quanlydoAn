<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<style type="text/css">
      * {
  margin: 0;
  padding: 0;
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
.h1{
  font-family: arial;
  width: 300px;
  height: 50px;
  padding-left: 10px;
  font-size: 20px;
  font-weight: bold;
  text-align: justify;
}
.h2{
    font-family: arial;
  width: 700px;
  height: 150px;
  padding-left: 10px;
  font-size: 18px;
  text-align: justify;
  padding-top: 5px;
}
#news-block-title {
    font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

}
p{
  padding-top: 10px;
  font-size: 16px;
  font-weight: normal;
}
.a3{
  font-size: 20px;
  text-decoration: none;
  font-style: bold;
  color: black;
  font-size: 20px;
}
.a3:hover{
  color: #CD2122;
}
.tr{
      margin: 0 0 30px;
    overflow: hidden;
    list-style-type: none;
}
    </style>

<body>
    <div>
            <div style=" align=center">
        <a href="">
            <img src="img/logo.png">
        </a>
    </div>
        <div id="menu">
            
            <a href="trangchu.php">Trang Chủ</a>
            |
            <a href="views/dangky.php">Danh sách đăng ký </a>
            |
            <a href="views/dsDetai.php">Danh sách đề tài</a>
            |
            <a href="view/profile.php"> 
            <?php 
            include('./core/db.php');
            
            //Lấy dữ liệu nhập vào
            $Email = $_SESSION['Email'] ;

            $sql="SELECT * FROM tb_dangky WHERE tenSinhvien='$Email'";
            $kq=mysqli_query($conn,$sql);
            if (mysqli_num_rows($kq) > 0) {
            {while ($row= mysqli_fetch_assoc($kq)) {
                    # code...
                    echo $row['tenSinhvien'];
                }
                }
            }
            ?></a>
            
            Giảng viên<a href="login.php">Đăng Xuất</a>
        </div>
        </div>
        <div >
        <span style="z-index: -1; " id="news-block-title">TIN TỨC SỰ KIỆN</span>

        <div style="align=center padding-top: 20px">
        <table style="position: relative; top: 80px;" width="1000px">
        <div class="body">
        <div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1515" title="Thông báo về việc đóng học phí HK2 (2022-2023)">Thông báo về việc đóng học phí HK2 (2022-2023)</a>
                <br>
                <span class="date">Ngày đăng: 30-11-2022</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1499" title="Thông báo về việc đóng học phí HK1 (2022-2023)">Thông báo về việc đóng học phí HK1 (2022-2023)</a>
                <br>
                <span class="date">Ngày đăng: 02-08-2022</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1485" title="Thông báo về việc đóng học phí HK3 (2021-2022)">Thông báo về việc đóng học phí HK3 (2021-2022)</a>
                <br>
                <span class="date">Ngày đăng: 11-05-2022</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1474" title="Thông báo về việc đóng học phí HK2 (2021-2022)">Thông báo về việc đóng học phí HK2 (2021-2022)</a>
                <br>
                <span class="date">Ngày đăng: 23-12-2021</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1461" title="Thông báo về việc đóng học phí HK1 2021-2022 (lần 2)">Thông báo về việc đóng học phí HK1 2021-2022 (lần 2)</a>
                <br>
                <span class="date">Ngày đăng: 12-09-2021</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1455" title="Thông báo về việc đóng học phí HK1 (2021-2022)">Thông báo về việc đóng học phí HK1 (2021-2022)</a>
                <br>
                <span class="date">Ngày đăng: 18-08-2021</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1444" title="Thông báo nộp học phí học kỳ 3 môn Giáo dục quốc phòng và An ninh năm học 2020-2021">Thông báo nộp học phí học kỳ 3 môn Giáo dục quốc phòng và An ninh năm học 2020-2021</a>
                <br>
                <span class="date">Ngày đăng: 10-06-2021</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1440" title="Thông báo về việc đóng học phí HK3 (2020-2021)">Thông báo về việc đóng học phí HK3 (2020-2021)</a>
                <br>
                <span class="date">Ngày đăng: 26-05-2021</span></p>
                <div></div>
            </div><div class="item">
                <p class="title"><a href="NewsDetail.aspx?NewsID=1407" title="Thông báo về việc thu bảo hiểm y tế năm 2020">Thông báo về việc thu bảo hiểm y tế năm 2020</a>
                <br>
                <span class="date">Ngày đăng: 14-08-2020</span></p>
                <div></div>
                </div><a href="News.aspx?MenuID=417" title="Xem thêm" class="read_more">Xem thêm</a>
            </div>
        </table>
        </div>
    </div>
</body>
</html>