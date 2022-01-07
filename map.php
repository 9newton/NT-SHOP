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
    <title>Map</title>
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
                    <li class="nav-item">
                        <a class="nav-link navbar_nav" href="shop.php">ร้านค้า</a>
                    </li>
                    <li class="nav-item active" id="line">
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
        <div class="row" style="padding: 50px 0px 0px 0px;">
            <div class="column col-md-12 grid-center" style="font-size: 70px;font-family: 'Kunlasatri';">ที่อยู่ร้าน
            </div>
        </div>
        <div class="row">
            <div class="text-th-head column col-md-12 grid-center"
                style="text-align:center;margin: -10px 0px -100px 0px;">ร้านอยู่ใน หมู่บ้านพฤกษา 116, 81/160 ตำบลคลองหก
                อำเภอคลองหลวง ปทุมธานี 12120</div>
        </div>
        <div class="row row-product">
            <div class="column col-md-12 grid-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.492946801736!2d100.73273331483384!3d14.048043490156301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d832796cc5479%3A0xba8da214e408ea2d!2sNT-SHOP!5e0!3m2!1sth!2sth!4v1617825319956!5m2!1sth!2sth"
                    width="900" height="600" style="border: 1px;" allowfullscreen="" loading="lazy"></iframe>
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
            © 2020 Copyright: NT-SHOP.COM
        </div>
    </footer>
</body>