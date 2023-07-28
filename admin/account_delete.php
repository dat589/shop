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
        // deleteOrder($mysqli, $id);
        deleteAccount($mysqli, $id);
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
    <title>Xóa tài khoản</title>
</head>
<body>
    <?php if(isset($user)): include "./header.php" ?>
        <div class="main-content">
            <h1 class="info">Xóa tài khoản</h1>
            <div class="content-box">
                <h3 class="info">Xóa tài khoản thành công</h3>
                <a href="./account_listing.php" class="info">Danh sách tài khoản</a>
            </div>
        </div>

        <?php include "./footer.php" ?>
    <?php else:
        header("Location: login.php");
    endif;
    ?>
</body>
</html>