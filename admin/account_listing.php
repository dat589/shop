<?php
session_start();

if(isset($_SESSION['user_id'])){
    $mysqli = require __DIR__.'./src/database.php';
    $sql = "SELECT * From user where id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    $sql1 = "SELECT * From user";
    $result1 = $mysqli->query($sql1);
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
    <title>Trang tài khoản</title>
</head>
<body>
    <?php if(isset($user)): include "./header.php" ?>

        <div class="main-content">
            <h1>Danh sách tài khoản</h1>
            <div class="product-items">
                <div class="buttons">
                    <a href="../resister.php">Thêm tài khoản</a>
                </div>
                <ul>
                    <li class="product-item-heading">
                        <div class="product-prop product-img">User</div>
                        <div class="product-prop product-name">Email</div>
                        <div class="product-prop product-button">
                            Xóa
                        </div>
                        <div class="product-prop product-button">
                            Sửa
                        </div>
                        <div class="product-prop product-time">Ngày tạo</div>
                        <div class="product-prop product-time">Ngày cập nhật</div>
                        <div class="clear-both"></div>
                    </li>
                    <?php
                    while ($row = mysqli_fetch_array($result1)) {
                        ?>
                        <li>
                            <div class="product-prop product-img"><?= $row["name"] ?></div>
                            <div class="product-prop product-name"><?= $row["email"] ?></div>
                            <div class="product-prop product-button">
                                <a href="javascript:openUrl('./account_delete.php?id=<?= $row['id'] ?>')">Xóa</a>
                            </div>
                            <div class="product-prop product-button">
                                <a href="./account_editing.php?id=<?= $row['id'] ?>">Sửa</a>
                            </div>
                            <div class="product-prop product-time"><?= $row["created"] ?></div>
                            <div class="product-prop product-time"><?= $row["updated"] ?></div>
                            <div class="clear-both"></div>
                        </li>
                    <?php } ?>
                </ul>
                <div class="pagination">
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
        <?php include "./footer.php" ?>
    <?php else:
        header("Location: login.php");
    endif;
    ?>

    <script type="text/javascript">
        function openUrl(newUrl){
            if(confirm("Bạn có muốn xóa tài khoản này không?")){
                document.location = newUrl;
            }
        }
    </script>
</body>
</html>