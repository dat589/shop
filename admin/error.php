<?php
session_start();

if(isset($_SESSION['user_id'])){
    $mysqli = require __DIR__.'./src/database.php';
    $sql = "SELECT * From user where id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/AdminStyle.css">
    <link rel="icon" href="../images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <title>Admin</title>
</head>
<body>
    <?php if(isset($user)): include "./header.php" ?>
        <div class="main-content">
            <h1 class="info">Thêm sản phẩm</h1>
            <div class="content-box">
                <h3 class="info">Thêm sản phẩm không thành công</h3>
                <a href="./product_editing.php" class="info">Thêm sản phẩm mới</a>
            </div>
        </div>

        <?php include "./footer.php" ?>
    <?php else:
        header("Location: login.php");
    endif;
    ?>
</body>
</html>