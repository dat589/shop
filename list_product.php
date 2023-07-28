<?php

$conn = require __DIR__ . "./src/database.php";
require_once "src/component.php";

if(isset($_GET["class"])){
    $sql = "SELECT * FROM product WHERE class = {$_GET["class"]}";
    $result = $conn->query($sql);

    $data = [];
    while($row = mysqli_fetch_array($result)){
        $data[] = $row;
    }

    session_start();
    if(isset($_POST["add"])){
        sessionCart("list_product.php");
    }
}

// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/headerFooter.css">
    <link rel="stylesheet" href="./css/womenProduct.css">
    <link rel="icon" href="./images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <title>List Product</title>
</head>
<body>
    <?php include "src/header.php" ?>

    <main>
        <div class="container">
            <div class="breadcrumb-list">
                <ol>
                    <li class="breadcrumb-item">
                    <a href="./index.php">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#" title="Hàng nữ">Hàng nữ</a></li>
                </ol>
            </div>
            <div class="products">
            <div class="sidebar-prod">
                <div class="filter-by-size">
                <ul class="list-side">
                    <li class="item-side">
                    <p class="item-side-title">
                        Size
                        <img class="icon-plus" src="../images/icons/plus.png" alt="" />
                        <img
                        class="icon-minus"
                        src="../images/icons/minus.png"
                        alt=""
                        />
                    </p>
                    <div class="sub-list-side">
                        <span class="item-sub-title">S</span>
                        <span class="item-sub-title">M</span>
                        <span class="item-sub-title">L</span>
                        <span class="item-sub-title">XL</span>
                        <span class="item-sub-title">XXL</span>
                    </div>
                    </li>
                    <li class="item-side">
                    <p class="item-side-title">
                        Màu sắc
                        <img class="icon-plus" src="../images/icons/plus.png" alt="" />
                        <img
                        class="icon-minus"
                        src="../images/icons/minus.png"
                        alt=""
                        />
                    </p>
                    <div class="sub-list-side img-color">
                        <span class="item-sub-title"
                        ><img src="../images/women-prod/006.png" alt=""
                        /></span>
                        <span class="item-sub-title"
                        ><img src="../images/women-prod/009.png" alt=""
                        /></span>
                        <span class="item-sub-title"
                        ><img src="../images/women-prod/012.png" alt=""
                        /></span>
                        <span class="item-sub-title"
                        ><img src="../images/women-prod/013.png" alt=""
                        /></span>
                        <span class="item-sub-title"
                        ><img src="../images/women-prod/020.png" alt=""
                        /></span>
                    </div>
                    </li>
                    <li class="item-side">
                    <p class="item-side-title">
                        Mức giá
                        <img class="icon-plus" src="../images/icons/plus.png" alt="" />
                        <img
                        class="icon-minus"
                        src="../images/icons/minus.png"
                        alt=""
                        />
                    </p>
                    <div class="sub-list-side">
                        <span class="item-sub-title">&lt; 500.000&#8363;</span>
                        <span class="item-sub-title"
                        >500.000&#8363; - 1.000.000&#8363;</span
                        >
                        <span class="item-sub-title"
                        >1.000.000&#8363; - 2.000.000&#8363;</span
                        >
                        <span class="item-sub-title"
                        >2.000.000&#8363; - 5.000.000&#8363;</span
                        >
                        <span class="item-sub-title">&gt; 5.000.000&#8363;</span>
                    </div>
                    </li>
                    <li class="item-side">
                    <p class="item-side-title">
                        Mức chiết khấu
                        <img class="icon-plus" src="../images/icons/plus.png" alt="" />
                        <img
                        class="icon-minus"
                        src="../images/icons/minus.png"
                        alt=""
                        />
                    </p>
                    <div class="sub-list-side">
                        <span class="item-sub-title">Dưới 30%</span>
                        <span class="item-sub-title">Từ 30% - 50%</span>
                        <span class="item-sub-title">Từ 50% - 70%</span>
                        <span class="item-sub-title">Từ 70%</span>
                        <span class="item-sub-title">Giá đặc biệt</span>
                    </div>
                    </li>
                    <li class="item-side">
                    <p class="item-side-title">
                        Nâng cao
                        <img class="icon-plus" src="../images/icons/plus.png" alt="" />
                        <img
                        class="icon-minus"
                        src="../images/icons/minus.png"
                        alt=""
                        />
                    </p>
                    <div class="sub-list-side">
                        <label for="" class="item-sub-list">
                        <span class="item-sub-title">
                            Chất liệu
                            <img
                            class="icon-plus"
                            src="../images/icons/plus.png"
                            alt=""
                            />
                            <img
                            class="icon-minus"
                            src="../images/icons/minus.png"
                            alt=""
                            />
                        </span>
                        <div class="sub-list-side">
                            <span class="item-sub-title">Chiffon</span>
                            <span class="item-sub-title">Cotton</span>
                            <span class="item-sub-title">Denim</span>
                            <span class="item-sub-title">Dạ</span>
                            <span class="item-sub-title">Da lộn</span>
                        </div>
                        </label>
                        <label for="" class="item-sub-list">
                        <span class="item-sub-title">
                            Kiểu dáng
                            <img
                            class="icon-plus"
                            src="../images/icons/plus.png"
                            alt=""
                            />
                            <img
                            class="icon-minus"
                            src="../images/icons/minus.png"
                            alt=""
                            />
                        </span>
                        <div class="sub-list-side">
                            <span class="item-sub-title">Bo đầu</span>
                            <span class="item-sub-title">Ôm</span>
                            <span class="item-sub-title">Peplum</span>
                            <span class="item-sub-title">Xòe</span>
                            <span class="item-sub-title">Baggy</span>
                        </div>
                        </label>
                        <label for="" class="item-sub-list">
                        <span class="item-sub-title">
                            Họa tiết
                            <img
                            class="icon-plus"
                            src="../images/icons/plus.png"
                            alt=""
                            />
                            <img
                            class="icon-minus"
                            src="../images/icons/minus.png"
                            alt=""
                            />
                        </span>
                        <div class="sub-list-side">
                            <span class="item-sub-title">Chấm bi</span>
                            <span class="item-sub-title">Dập nổi</span>
                            <span class="item-sub-title">Hoa</span>
                            <span class="item-sub-title">Họa tiết 3D</span>
                            <span class="item-sub-title">In hình</span>
                        </div>
                        </label>
                        <label for="" class="item-sub-list">
                        <span class="item-sub-title">
                            Cổ áo
                            <img
                            class="icon-plus"
                            src="../images/icons/plus.png"
                            alt=""
                            />
                            <img
                            class="icon-minus"
                            src="../images/icons/minus.png"
                            alt=""
                            />
                        </span>
                        <div class="sub-list-side">
                            <span class="item-sub-title">Cách điệu</span>
                            <span class="item-sub-title">Cổ chữ V</span>
                            <span class="item-sub-title">Cổ đổ</span>
                            <span class="item-sub-title">Cổ lọ</span>
                            <span class="item-sub-title">Cổ khác</span>
                        </div>
                        </label>
                    </div>
                    </li>
                </ul>
                <div class="row-search">
                    <div>
                    <button class="btn-large left">Bỏ lọc</button>
                    </div>
                    <div>
                    <button class="btn-large right">Lọc</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="main-prod">
                <div class="top-main-prod">
                <h1 class="sub-title-main">Hàng nữ mới về</h1>
                <div class="filter-prod">
                    <div class="item-filter">
                    <span>
                        Sắp xếp theo
                        <img src="./images/icons/expand_more.png" alt="" />
                    </span>
                    <div class="list-number-row">
                        <div class="item-number-row"><a href="#">Mặc định</a></div>
                        <div class="item-number-row">
                        <a href="#">Được mua nhiều nhât</a>
                        </div>
                        <div class="item-number-row">
                        <a href="#">Được ưa thích nhất</a>
                        </div>
                        <div class="item-number-row"><a href="#">Mới nhất</a></div>
                        <div class="item-number-row">
                        <a href="#">Giá: cao đến thấp</a>
                        </div>
                        <div class="item-number-row">
                        <a href="#">Giá: thấp đến cao</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="sub-main-product">
                    <div class="list-products">
                        <?php
                            for($i=0; $i<3; $i++){
                                for($j=0; $j<count($data); $j++){
                                    component($data[$j]);
                                }
                            }
                        ?>
                    </div>
                    <div class="list-inline-pagination">
                    <li style="background-color: #221F20;"><a style="color:#fff" href="#">1</a></li>
                        <li><a href="./list_product.php?class=<?= $_GET["class"] ?>">2</a></li>
                        <li><a href="./list_product.php?class=<?= $_GET["class"] ?>">3</a></li>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </main>


    <?php include "src/footer.php" ?>
    <script src="./javascript/Header&footer.js"></script>
    <script src="./javascript/Women-product.js"></script>
</body>
</html>