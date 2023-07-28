<?php

$conn = require_once __DIR__ . "./src/database.php";
require_once "src/component.php";

$sql1 = "SELECT * FROM product WHERE class = 1";
$sql2 = "SELECT * FROM product WHERE class = 2";
$sql3 = "SELECT * FROM product WHERE class = 3";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

// mysqli_close($conn);

session_start();
if(isset($_POST["add"])){
    sessionCart("index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVY moda</title>
    <link rel="stylesheet" href="/css/head_foot.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="icon" href="./images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    
</head>
<body>
    <?php include "src/header.php" ?>
    <main>
        <div class="container">
            <div class="nav-info">
                <div class="left-nav-info item-nav-info">
                    <a href="prod1.html"><span>Free Shipping đơn hàng nguyên giá</span></a>
                </div>
                <div class="center-nav-info item-nav-info hide2">
                    <a href="#"><span>Bảo hành trọn đời</span></a>
                </div>
                <div class="right-nav-info item-nav-info hide2">
                    <a href="#"><span>Chính sách thẻ thành viên</span></a>
                </div>
            </div>
            <section id="home-banner">
                <div class="show-banner">
                    <img src="./images/banner/bn1.jpg" alt="banner" id="banner-img">
                    <div class="control-banner pre"><img src="./images/icons/pre.png" alt="pre" onclick="changePreImage()"></div>
                    <div class="control-banner next"><img src="./images/icons/next.png" alt="next" onclick="changeNextImage()"></div>
                </div>
            </section>
            <section id="home-new-prod">
                <div class="title-section">new arrival</div>
                <div class="exclusive-tabs">
                    <div class="exclusive-head">
                        <ul>
                            <li class="arrival-tab active"><span>IVY moda</span></li>
                            <li class="arrival-tab"><span>IVY man</span></li>
                            <li class="arrival-tab"><span>IVY kids</span></li>
                        </ul>
                    </div>
                    <div class="exclusive-content">
                        <div class="exclusive-inner active" id="tab-women">
                            <div class="list-products active">
                                <?php while($row = mysqli_fetch_array($result1)){
                                    component($row);
                                } ?>
                            </div>
                            <div class="link-product">
                                <a href="./list_product.php?class=1" class="all-product">Xem tất cả</a>
                            </div>
                        </div>
                        <div class="exclusive-inner" id="tab-men">
                            <div class="list-products">
                                <?php while($row = mysqli_fetch_array($result2)){
                                    component($row);
                                } ?>
                            </div>
                            <div class="link-product">
                                <a href="./list_product.php?class=2" class="all-product">Xem tất cả</a>
                            </div>
                        </div>
                        <div class="exclusive-inner" id="tab-kid">
                            <div class="list-products">
                                <?php while($row = mysqli_fetch_array($result3)){
                                    component($row);
                                } ?>
                            </div>
                            <div class="link-product">
                                <a href="./list_product.php?class=3" class="all-product">Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="home-gallery">
                <h3 class="title-gallery">gallery</h3>
                <div class="owl-state">
                    <div class="owl-item hide1"><a href="#"><img src="./images/gallery/095c1bfc9c8fd41cb70e3b7a610d622a.jpg" alt=""></a></div>
                    <div class="owl-item hide2"><a href="#"><img src="./images/gallery/1f7a66b0facf3833f0298453614940d0.jpg" alt=""></a></div>
                    <div class="owl-item"><a href="#"><img src="./images/gallery/6d3bbecea7a9bc507ecc7983eb2043c4.jpg" alt=""></a></div>
                    <div class="owl-item"><a href="#"><img src="./images/gallery/da308f7ca8f1e1875532e3b5542c1294.jpg" alt=""></a></div>
                    <div class="owl-item"><a href="#"><img src="./images/gallery/ea4e270adf8060e384a2fd2cea9d30e6.jpg" alt=""></a></div>
                </div>
            </section>
        </div>
    </main>
    <?php include "src/footer.php" ?>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="/javascript/Header&footer.js"></script>
    <script src="/javascript/Index.js"></script>
</body>
</html>