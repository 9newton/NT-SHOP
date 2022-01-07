<?php
session_start();
if (!isset($_SESSION['loggedin'])) { // เช็คว่า login หรือยัง)
	header('Location:index.html'); // 
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adidas Yeezy Boost 350</title>
    <link rel="icon" type="images/png" href="images/iconweb.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="javascript/myJS.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Barlow Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="detail">
<header class="navbox">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand">
                <img src="images/logo.png" class="logo">
            </a>
            <div class="navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link navbar_nav" href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link navbar_nav" href="shop.php">ร้านค้า</a>
                    </li>
                    <li class="nav-item" id="line">
                        <a class="nav-link navbar_nav" href="map.php">แผนที่</a>
                    </li>
                    <li class="nav-item dropdown active ">
                        <a class="nav-link dropdown-toggle navbar_nav"id="navbardrop" data-toggle="dropdown" style="font-size: 25px;color:red;font-family: 'Barlow Condensed';">
                            <img src="images/user.png" alt="user" style="width: 20px;margin:-5px 5px 0px 5px;">
                            <?php echo $_SESSION['username'];?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item navbar_nav" href="logout.php">ออกจากระบบ</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--Detail-->
    <div class="container-fluid en-text">
        <div class="row row-product">
            <div class="column col-md-6 img-magnifier-container grid-center">
                <img id="myimage" src="images/detail5.jpg">
            </div>
            <div class="column col-md-6">
                <p class="head-text">
                    Adidas Yeezy Boost 350
                <p class="detail-product">15,000 ฿</p>
                </p>
                <p class="text-th-head">อุปกรณ์ครบ พร้อมกล่อง</p>
                <p class="text-th-detail" style="margin: 100px 0px -5px 10px; font-size: 20px;color: rgb(36, 36, 36);">
                    *จัดส่งภายใน 7-14 วัน</p>
                <select class="size">
                    <option value="0">SELECT YOUR SIZE</option>
                    <option value="1">9 US</option>
                    <option value="2">9.5 US</option>
                    <option value="3">10 US</option>
                    <option value="4">11 US</option>
                    <option value="5">11.5 US</option>
                    <option value="6">12 US</option>
                </select>
                <p><button class="button" style="margin: 30px 0px 0px 0px;width: 62%;">BUY NOW</button></p>
            </div>
        </div>
    </div>
    <script>
        /*ตัวเพิ่มการขยาย*/
        magnify("myimage", 3);
    </script>
    <!--footer-->
    <footer class="text-white" style="background-color: #202020;">
        <div class="container p-4 col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3 grid-center ">
                    <h5 class="en-text">NT-SHOP</h5>

                    <p class="footer-text">
                        เป็นเว็ปที่จัดทำขึ้นเพื่อเป็นการศึกษาเกี่ยวกับการทำเว็ป
                        <br>เป็นส่วนหนึ่งของวิชา web programming
                    </p>
                    <p>
                        <a href="https://www.facebook.com/pakorn.khunleang/" target="_blank"><img
                                src="images/facebook.png" style="width: 110px" ;></a>
                        <img src="images/line.png" style="height:30px">
                        <a href="https://www.instagram.com/newtonpakorn/?fbclid=IwAR2ePZJGVc84HbrUNHtFkVncvllApM5Rb9FToL8jwsAGHDDLzzpwE2v8RlE" target="_blank"><img src="images/ig.png"
                                class="img-footer"></a>
                    </p>
                </div>
                <div class="col-md-3 grid-center text-right">
                    <div class="ratio ratio-16x9">
                        <iframe class="shadow-1-strong rounded" src="https://www.youtube.com/embed/i-H7qvY-uxw"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.527);">
            © 2021 Copyright: NT-SHOP.COM
        </div>
    </footer>
</body>