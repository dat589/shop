<?php
session_start();
$conn = require __DIR__ . "./src/database.php";
require_once "src/component.php";

if (isset($_SESSION["card"])) {
    if(isset($_POST["order"])){
        $currentTime = date("Y-m-d H:i:s");

        $sql = "INSERT INTO `order`(`user_id`, `name`, `tel`, `address`, `order_date`, `total_money`)
                VALUES (3, '".$_POST["customer_name"]."', '".$_POST["customer_phone"]."', '".$_POST["customer_add"]."', '$currentTime', '".$_POST["total_money"]."')";
        $conn->query($sql);

        $order_id = mysqli_insert_id($conn);
        $product_id = array_column($_SESSION["card"], "product_id");

        foreach($product_id as $key => $value){
            order_details($conn, $order_id, $value);
        }
        unset($_SESSION["card"]);
        echo "<script>alert('Đặt hàng thành công!')</script>";
        echo "<script>window.location = 'index.php'</script>";
    }
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
    <title>Order</title>
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
                                <p class="checkout-process-bar__title">Đặt hàng</p>
                            </div>
                            <h3 class="checkout-title">Địa chỉ giao hàng</h3>
                            <div class="item-contact">
                                <div class="form-group">
                                    <input type="text" name="customer_name" id="" class="form-control" placeholder="Họ tên">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="customer_phone" id="" class="form-control" placeholder="Điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="customer_add" id="" class="form-control" placeholder="Địa chỉ">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="customer_note" id="" class="form-control" placeholder="Ghi chú">
                                </div>
                            </div>
                        </div>
                        <div class="right-row">
                            <div class="cart-summary">
                                <div class="cart-summary__overview">
                                    <h3>Tổng tiền giỏ hàng</h3>
                                    <div class="overview__item">
                                        <p>Tổng sản phẩm</p>
                                        <p class="total-product" style="font-weight: 600; font-size:18px;"><?= isset($count) ? $count : 0 ?></p>
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
                                        <input type="hidden" name="total_money" value="<?= $total ?>">
                                    </div>
                                </div>
                                <div class="cart-summary__note">
                                    <p class="text-success">Đơn hàng của bạn được Miễn phí ship</p>
                                </div>
                            </div>
                            <div class="cart-summary__button">
                                
                                <button class="btn--large" name="order" type="submit">Hoàn thành</button>
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