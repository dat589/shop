<?php
session_start();
$conn = require __DIR__ . "./src/database.php";
require_once "src/component.php";

if (isset($_SESSION["card"])) {
    $count = count($_SESSION["card"]);
    $product_id = array_column($_SESSION["card"], "product_id");
    $prod = implode(",",$product_id);

    if (isset($_POST["remove"])) {
        foreach ($_SESSION["card"] as $key => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["card"][$key]);
                // echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }

    if(isset($_POST["update"])){
        for($i=0; $i<$count; $i++){
            $_SESSION["card"][$i]["quantity"] = $_POST["quantity"][$i];
        }
        echo "<script>window.location = 'cart.php'</script>";
    }

    if(isset($_POST["order_step2"])){
        header("Location: order.php");
    }

    $sql = "SELECT * FROM `product` WHERE `id` IN ({$prod})";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="./css/cart1.css">
    <link rel="stylesheet" href="./css/head_foot.css">
    <title>Cart</title>
</head>

<body>
    <?php include "src/header.php" ?>
    <main>
        <div class="container">
            <form action="" class="frm_cart" method="post">
                <div class="cart-page">
                    <div class="row">
                        <div class="left-row">
                            <div class="checkout-process-bar">
                                <ul>
                                    <li class="active"><span>Giỏ hàng </span></li>
                                    <li class=""><span>Đặt hàng</span></li>
                                    <li class=""><span>Thanh toán</span></li>
                                    <li><span>Hoàn thành đơn</span></li>
                                </ul>
                                <p class="checkout-process-bar__title">Giỏ hàng</p>
                            </div>
                            <div id="total-cart">
                                <div class="cart__list">
                                    <h2 class="cart-title">Giỏ hàng của bạn <b><span class="cart-total"><?= $count ?? 0 ?></span> Sản Phẩm</b></h2>
                                    <table class="cart-table">
                                        <thead>
                                            <tr>
                                                <th>Tên Sản phẩm</th>
                                                <th>Chiết khấu</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền</th>
                                                <!-- <th><button type="submit" name="update">Cập nhật</button></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $num = 0;
                                            if (isset($_SESSION["card"]) && !empty($_SESSION["card"])) {
                                                $product_id = array_column($_SESSION["card"], "product_id");

                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                    <tr style="display:none">
                                                        <td>
                                                            <div class="prod-item">
                                                                <div class="prod-item__img">
                                                                    <a href="#"><img src="./images/product/1.a.jpg" alt=""></a>
                                                                </div>
                                                                <div class="prod-item__content">
                                                                    <a href="../html/product.html">
                                                                        <h3 class="prod-item__title">Test</h3>
                                                                    </a>
                                                                    <div class="prod-item__properties">
                                                                        <!-- <p>Màu sắc: <span>Xanh Nhạt </span></p> -->
                                                                        <!-- <p>Size: <span>L</span></p> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="cart-sale-price">
                                                            <div class="prod-sale">20%</div>
                                                        </td>
                                                        <td>
                                                            <div class="prod-quantity">
                                                                <input type="number" value="1" min="0">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="prod-item__price">1đ</div>
                                                        </td>
                                                        <td>
                                                            <form action="./cart.php?id=1" method="post">
                                                                <button class="btn-remove-cart" type="submit" name="remove">
                                                                    <a href="#" class="remove-item-cart" data-product-index="0"><img src="./images/icons/delete.png" alt=""></a>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php cartElement($row);
                                                    $num += getQuantity($row);
                                                }
                                            } else {
                                                echo "<tr><td class=\"prod-sale\">Cart is empty</td></tr>";
                                            }
                                            ?>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th><button type="submit" name="update">Cập nhật</button></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a class="btn-cart-continue" href="index.php">Tiếp tục mua hàng</a>
                        </div>
                        <div class="right-row">
                            <div class="cart-summary">
                                <div class="cart-summary__overview">
                                    <h3>Tổng tiền giỏ hàng</h3>
                                    <div class="overview__item">
                                        <p>Tổng sản phẩm</p>
                                        <p class="total-product" style="font-weight: 600; font-size:18px;"><?= $num ?></p>
                                    </div>
                                    <div class="overview__item">
                                        <p>Tổng tiền hàng</p>
                                        <p class="total-not-discount"><?= number_format($total,0,",",".") ?>đ</p>
                                    </div>
                                    <div class="overview__item">
                                        <p>Thành tiền</p>
                                        <p><b class="order-price-total"><?= number_format($total,0,",",".") ?>đ</b></p>
                                    </div>
                                    <div class="overview__item">
                                        <p>Tạm tính</p>
                                        <p><b class="order-price-total"><?= number_format($total,0,",",".") ?>đ</b></p>
                                    </div>
                                </div>
                                <div class="cart-summary__note">
                                    <p class="text-success">Đơn hàng của bạn được Miễn phí ship</p>
                                </div>
                            </div>
                            <div class="cart-summary__button">
                                <button class="btn--large" name="order_step2" type="submit">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php include "src/footer.php" ?>
    <script src="./javascript/Header&footer.js"></script>
</body>
</html>

<?php

?>