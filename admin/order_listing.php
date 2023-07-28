<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $mysqli = require __DIR__ . './src/database.php';
    $sql = "SELECT * From user where id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    $orders = $mysqli->query("SELECT * FROM `order`");
    mysqli_close($mysqli);
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
    <title>Danh sach don hang</title>
</head>

<body>
    <?php if (isset($user)) : include "./header.php" ?>

        <div class="main-content">
            <h1>Danh sách đơn đặt hàng</h1>
            <div class="total-items">
                  <span>Có tất cả <strong><?= $orders->num_rows ?></strong> đơn hàng</span>
            </div>
            <div class="listing-items">
                <ul>
                    <li class="listing-item-heading">
                        <div class="listing-prop listing-id">ID</div>
                        <div class="listing-prop listing-name">Tên người nhận</div>
                        <div class="listing-prop listing-address">Địa chỉ</div>
                        <div class="listing-prop listing-phone">Điện thoại</div>
                        <div class="listing-prop listing-button">
                            In đơn
                        </div>
                        <div class="listing-prop listing-time">Ngày tạo</div>
                        <div class="clear-both"></div>
                    </li>
                    <?php  while ($row = mysqli_fetch_array($orders)) { ?>
                    <li>
                        <div class="listing-prop listing-id"><?=$row['id']?></div>
                        <div class="listing-prop listing-name"><?=$row['name']?></div>
                        <div class="listing-prop listing-address"><?=$row['address']?></div>
                        <div class="listing-prop listing-phone"><?=$row['tel']?></div>
                        <div class="listing-prop listing-button">
                            <a href="order_printing.php?id=<?=$row['id']?>" target="_blank">In</a>
                        </div>
                        <div class="listing-prop listing-time"><?= $row["order_date"] ?></div>
                        <div class="clear-both"></div>
                    </li>
                    <?php  } ?>
                </ul>
                <div class="pagination">
                </div>
                <div class="clear-both"></div>
            </div>
        </div>

        <?php include "./footer.php" ?>
    <?php else :
        header("Location: login.php");
    endif;
    ?>
</body>

</html>