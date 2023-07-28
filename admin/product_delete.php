<?php
session_start();

if(isset($_SESSION['user_id'])){
    $mysqli = require __DIR__.'./src/database.php';
    $sql = "SELECT * From user where id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if(isset($_GET["id"])){
        require_once "src/productFunction.php";
        $id = $_GET["id"];

        deleteGallery($mysqli, $id);
        deleteProduct($mysqli, $id);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/adminStyle.css">
    <link rel="icon" href="../images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <title>Admin</title>
</head>
<body>
    <?php if(isset($user)): include "./header.php" ?>
        <div class="main-content">
            <h1 class="info">Xóa sản phẩm</h1>
            <div class="content-box">
                <h3 class="info">Xóa sản phẩm thành công</h3>
                <a href="./product_listing.php" class="info">Danh sách sản phẩm</a>
            </div>
        </div>

        <?php include "./footer.php" ?>
    <?php else:
        header("Location: login.php");
    endif;
    ?>
</body>
</html>