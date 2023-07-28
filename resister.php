<?php

session_start();
$conn = require __DIR__ . "./src/database.php";
require_once "src/component.php";

if(isset($_POST["register_button"])){
    $createTime = date("Y-m-d H:i:s");

    if(empty($_POST['name'])){
        die("Name is required!");
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        die("Valid email is required!");
    }
    if(strlen($_POST['password']) < 6){
        die("Password must be at least 6 characters");
    }
    // if(!preg_match("/[a-z]/i",$_POST['password'])){
    //     die("Password must contain at least 1 letter");
    // }

    // if(!preg_match("/[0-9]/",$_POST['password'])){
    //     die("Password must contain at least 1 number");
    // }
    if($_POST['password'] !== $_POST['password_confirmation']){
        die("Password must match");
    }

    
    $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (name, email, password_hash, created, updated)
            VALUES (?, ?, ?, '$createTime', '$createTime')";

    $stmt = $conn->stmt_init();

    if(!$stmt->prepare($sql)){
        die("SQL error: " . $conn->error);
    }

    $stmt->bind_param("sss", $_POST['name'], $_POST['email'], $password_hash);

    if($stmt->execute()){
        echo "<script>alert('Tạo tài khoản thành công!')</script>";
        echo "<script>window.location = 'login.php'</script>";
    }elseif($conn->errno === 1062){
        die("Email already taken!");
    }else{
        die($conn->error . " " . $conn->errno);
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
    <link rel="stylesheet" href="./css/head_foot.css">
    <link rel="stylesheet" href="./css/Resister.css">
    <title>Đăng ký tài khoản</title>
</head>
<body>
    <?php include "src/header.php" ?>
    
    <main>
        <div class="container">
            <h3 class="title">Tạo tài khoản</h3>
            <div class="content">
                <form action="" method="post" novalidate>
                    <div class="info">
                        <input type="text" name="name" placeholder="Họ tên" value="<?= isset($_POST["name"]) ? $_POST["name"] : "" ?>">
                    </div>
                    <div class="info">
                        <input type="email" name="email" placeholder="Email" value="<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>">
                    </div>
                    <div class="info">
                        <input type="password" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="info">
                        <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="grid-button">
                        <button class="button" type="submit" name="register_button">Đăng ký</button>
                    </div>
                    <a class="return" href="./login.php">Trở về</a>
                </form>
            </div>
         </div>
    </main>
    <?php include "src/footer.php" ?>
    <script src="/javascript/Header&footer.js"></script>
</body>
</html>