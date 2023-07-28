<?php

session_start();
$conn = require __DIR__ . "./src/database.php";
require_once "src/component.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="./css/head_foot.css">
    <link rel="stylesheet" href="./css/Login.css">
    <title>Đăng nhập</title>
</head>
<body>
    <?php include "src/header.php" ?>
    <main>
        <div class="container">
            <div class="auth-row">
                <div class="auth-login">
                    <h3 class="auth-title">Bạn đã có tài khoản IVY</h3>
                    <div class="auth-content">
                        <p>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</p>
                        <form action="" class="auth-form" method="post">
                            <div class="form-input">
                                <input type="text" class="form-control" name="customer_account" placeholder="Email/SĐT">
                                
                            </div>
                            <div class="form-input">
                                <input type="password" class="form-control" name="customer_password" placeholder="Mật khẩu">
                            </div>
                            <div class="form-option">
                                <div class="form-checkbox">
                                    <label for="">
                                        <input type="checkbox" class="checkbox" value="1">
                                        <span> Ghi nhớ đăng nhập</span>
                                    </label>
                                </div>
                                <a href="#" class="form-link">Quên mật khẩu?</a>
                            </div>
                            <div class="form-button">
                                <button>Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="auth-resister">
                    <h3 class="auth-title">Khách hàng mới của IVY moda</h3>
                    <div class="auth-content">
                        <p class="auth-description">
                            Nếu bạn chưa có tài khoản trên ivymoda.com, hãy sử dụng tùy chọn này để truy cập biểu mẫu đăng ký.
                        </p>
                        <p class="auth-description">
                            Bằng cách cung cấp cho IVY moda thông tin chi tiết của bạn, quá trình mua hàng trên ivymoda.com sẽ là một trải nghiệm thú vị và nhanh chóng hơn!
                        </p>
                        <div class="form-button">
                            <a href="./resister.php">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "src/footer.php" ?>
    <script src="./javascript/Header&footer.js"></script>
</body>
</html>