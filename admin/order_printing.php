<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $mysqli = require __DIR__ . './src/database.php';
    $sql = "SELECT * From user where id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if(isset($_GET["id"])){
        $sql1 = "SELECT `name`, `tel`, `address`, `note`, `order_date`, product.title as 'title', order_details.* FROM `order`
                    INNER JOIN order_details ON `order`.`id` = `order_details`.`order_id`
                    INNER JOIN product ON `product`.`id` = `order_details`.`product_id`
                WHERE `order`.`id` = '".$_GET["id"]."'";

        $result1 =$mysqli->query($sql1);
        $orders = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/adminStyle1.css">
    <link rel="icon" href="../images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <title>Chi tiet don hang</title>
</head>

<body>
    <?php if (isset($user)): ?>

        <div id="order-detail-wrapper">
            <div id="order-detail">
                <h1>Chi tiết đơn hàng</h1>
                <label>Người nhận: </label><span><?= $orders[0]['name'] ?></span><br />
                <label>Điện thoại: </label><span><?= $orders[0]['tel'] ?></span><br />
                <label>Địa chỉ: </label><span><?= $orders[0]['address'] ?></span><br />
                <label>Ngày đặt hàng: </label><span><?= $orders[0]['order_date'] ?></span><br />
                <hr />
                <h3>Danh sách sản phẩm</h3>
                <ul>
                    <?php
                    $totalQuantity = 0;
                    $totalMoney = 0;
                    foreach ($orders as $row) {
                    ?>
                        <li>
                            <span class="item-name"><?= $row['title'] ?></span>
                            <span class="item-quantity"> - SL: <?= $row['num'] ?> sản phẩm</span>
                        </li>
                    <?php
                        $totalMoney += ($row['price'] * $row['num']);
                        $totalQuantity += $row['num'];
                    }
                    ?>
                </ul>
                <hr />
                <label>Tổng SL:</label> <?= $totalQuantity ?> - <label>Tổng tiền:</label> <?= number_format($totalMoney, 0, ",", ".") ?> đ
                <p><label>Ghi chú: </label><?= $orders[0]['note'] ?></p>
            </div>
        </div>
    <?php else :
        header("Location: login.php");
    endif;
    ?>
</body>

</html>