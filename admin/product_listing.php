<?php
session_start();

if(isset($_SESSION['user_id'])){
    $mysqli = require __DIR__.'./src/database.php';
    $sql = "SELECT * From user where id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    $item_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 5;
    $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_page;
    $totalRecords = mysqli_query($mysqli, "SELECT * FROM `product`");
    $totalRecords = $totalRecords->num_rows;
    $totalPage = ceil($totalRecords / $item_page);
    $products = mysqli_query($mysqli, "SELECT * FROM `product` ORDER BY `id` ASC LIMIT " . $item_page . " OFFSET " . $offset);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/adminStyle1.css">
    <link rel="stylesheet" href="../css/pagination.css">
    <link rel="icon" href="../images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <?php if(isset($user)): include "./header.php" ?>
        <div class="main-content">
            <h1>Danh sách sản phẩm</h1>
            <div class="product-items">
                <div class="buttons">
                    <a href="./product_adding.php">Thêm sản phẩm</a>
                </div>
                <ul>
                    <li class="product-item-heading">
                        <div class="product-prop product-img">Ảnh</div>
                        <div class="product-prop product-name">Tên sản phẩm</div>
                        <div class="product-prop product-button">
                            Xóa
                        </div>
                        <div class="product-prop product-button">
                            Sửa
                        </div>
                        <!-- <div class="product-prop product-button">
                            Copy
                        </div> -->
                        <div class="product-prop product-time">Ngày tạo</div>
                        <div class="product-prop product-time">Ngày cập nhật</div>
                        <div class="clear-both"></div>
                    </li>
                    <?php
                    while ($row = mysqli_fetch_array($products)) {
                        ?>
                        <li>
                            <div class="product-prop product-img"><img src="../images/product/<?= $row["thumbnail"] ?>" alt="<?= $row["thumbnail"] ?>" title="<?= $row["thumbnail"] ?>"></div>
                            <div class="product-prop product-name"><?= $row["title"] ?></div>
                            <div class="product-prop product-button">
                                <a href="javascript:openUrl('./product_delete.php?id=<?= $row['id'] ?>')">Xóa</a>
                            </div>
                            <div class="product-prop product-button">
                                <a href="./product_editing.php?id=<?= $row['id'] ?>">Sửa</a>
                            </div>
                            <!-- <div class="product-prop product-button">
                                <a href="./product_editing.php?id=<?= $row['id'] ?>&task=copy">Copy</a>
                            </div> -->
                            <div class="product-prop product-time"><?= $row["created"] ?></div>
                            <div class="product-prop product-time"><?= $row["updated"] ?></div>
                            <div class="clear-both"></div>
                        </li>
                    <?php } ?>
                </ul>
                <div class="pagination">
                    <?php include "./pagination.php" ?>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>

        <?php include "./footer.php" ?>
    <?php else:
        header("Location: login.php");
    endif; ?>
    
    <script type="text/javascript">
        function openUrl(newUrl){
            if(confirm("Bạn có muốn xóa sản phẩm này?")){
                document.location = newUrl;
            }
        }
    </script>
</body>
</html>