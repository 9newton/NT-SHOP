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
    <title>Shop</title>
    <link rel="icon" type="images/png" href="images/iconweb.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <div class="container-fluid en-text" style="padding: 50px 0px 0px 170px;">
        <div class="row">
            <div class="column col-md-12" style="font-size: 70px;font-family: 'Kunlasatri';">ร้านค้า</div>
        </div>
    </div>
    <div class="container-fluid en-text">
        <div class="row row-detail">
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe1.png" alt="Nike Air Jordan 1 x Off-White" class="img-product">
                    <div class="container p-3">
                        <h2>Nike Air Jordan 1 x Off-White</h2>
                        <p class="title">145,000 Bath</p>
                        <p><a href="product-1.php"><button class="button">BUY</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe2.png" alt="Nike Dunk Low x Off-White" class="img-product">
                    <div class="container p-3">
                        <h2>Nike Dunk Low x Off-White</h2>
                        <p class="title">17,650 Bath</p>
                        <p><a href="product-2.php"><button class="button">BUY</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe3.png" alt="Nike Air Presto x Off-White" class="img-product">
                    <div class="container p-3">
                        <h2>Nike Air Presto x Off-White</h2>
                        <p class="title">21,400 Bath<a
                                style="color:red;font-size: 17px;font-family: 'Kunlasatri';margin: 0px 0px 0px 160px;">*สินค้าใกล้หมด<a>
                        </p>
                        <p><a href="product-3.php"><button class="button">BUY</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe4.png" alt="Nike Air Force 1 x Off White" class="img-product">
                    <div class="container p-3">
                        <h2>Nike Air Force 1 x Off White</h2>
                        <p class="title">25,500 Bath</p>
                        <p><a href="product-4.php"><button class="button">BUY</button></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Row2-->
    <div class="container-fluid en-text">
        <div class="row row-detail">
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe5.png" alt="Adidas Yeezy Boost 350" class="img-product">
                    <div class="container p-3">
                        <h2>Adidas Yeezy Boost 350</h2>
                        <p class="title">15,000 Bath</p>
                        <p><a href="product-5.php"><button class="button">BUY</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe6.png" alt="Off-White c/o Virgil Abloh Low Top Black" class="img-product">
                    <div class="container p-3">
                        <h2>Off-White c/o Virgil Abloh</h2>
                        <p class="title">9,800 Bath</p>
                        <p><a href="product-6.php"><button class="button">BUY</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe7.png" alt="Balenciaga Triple S Blue Red" class="img-product">
                    <div class="container p-3">
                        <h2>Balenciaga Triple S Blue Red</h2>
                        <p class="title">21,400 Bath</p>
                        <p><a href="product-7.php"><button class="soldout">SOLD OUT</button></a></p>
                    </div>
                </div>
            </div>
            <div class="column col-md-3">
                <div class="card">
                    <img src="images/shoe8.png" alt="Nike Air More Uptempo Supreme Red" class="img-product">
                    <div class="container p-3">
                        <h2>Uptempo Supreme Red</h2>
                        <p class="title">30,000 Bath</p>
                        <p><a href="product-8.php"><button class="soldout">SOLD OUT</button></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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