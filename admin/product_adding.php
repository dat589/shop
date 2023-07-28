<?php
session_start();

if(isset($_SESSION['user_id'])){
    $mysqli = require __DIR__.'./src/database.php';
    $createTime = date("Y-m-d H:i:s");
    
    $sql = "SELECT * From user where id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        include "./src/productFunction.php";
        $description = $mysqli->real_escape_string($_POST["description"]);

        $thumbnail = $_FILES["thumbnail"];
        $thumbnail2 = $_FILES["thumbnail2"];
        
        $gallery = getImage($_FILES["gallery"]);
        $totalImage = $gallery;

        array_push($totalImage, $thumbnail, $thumbnail2);
        foreach($totalImage as $image){
            if(validateUploadFile($image)){
                header("Location: error.php");
            }
        }
        $path = "../images/product/";
        $newName = changeName($thumbnail, $path); move_uploaded_file($thumbnail["tmp_name"], $path.$newName);
        $newName2 = changeName($thumbnail2, $path); move_uploaded_file($thumbnail2["tmp_name"], $path.$newName2);
        
        $query = "INSERT INTO `product`(`category_id`, `title`, `price`, `discount`, `thumbnail`, `thumbnail2`, `description`, `class`, `created`, `updated`)
        VALUES ('".$_POST["category_id"]."', '".$_POST["title"]."', '".$_POST["price"]."', '".$_POST["discount"]."', '$newName', '$newName2', '$description', '".$_POST["class"]."', '$createTime', '$createTime')";
        $mysqli->query($query);

        $id = mysqli_insert_id($mysqli);
        uploadGallery($mysqli, $gallery, $id);
        header("Location: addSuccess.php");
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
    <title>Thêm sản phẩm</title>
</head>
<body>
    <?php if(isset($user)): include "./header.php" ?>
        <div class="main-content">
            <h1>Thêm sản phẩm</h1>
            <div class="content-box">
                <form id="product-form" method="POST" action=""  enctype="multipart/form-data">
                    <input type="submit" title="Lưu sản phẩm" value="" />
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Tên sản phẩm: </label>
                        <input type="text" name="title" value="" required>
                        <div class="clear-both"></div>
                    </div>

                    <div class="wrap-field">
                        <label>Danh mục sản phẩm: </label>
                        <select name="category_id" id="">
                            <option value="1" selected>Áo</option>
                            <option value="2">Quần</option>
                            <option value="3">Giày & Dép</option>
                            <option value="4">Đầm</option>
                        </select>
                        <div class="clear-both"></div>
                    </div>

                    <div class="wrap-field">
                        <label>Giá sản phẩm: </label>
                        <input type="text" name="price" value="" required>
                        <div class="clear-both"></div>
                    </div>

                    <div class="wrap-field">
                        <label>Giảm giá: </label>
                        <input type="text" name="discount" value="20" required>
                        <div class="clear-both"></div>
                    </div>

                    <div class="wrap-field">
                        <label>Ảnh đại diện 1: </label>
                        <div class="right-wrap-field">
                            <input type="file" name="thumbnail" required>
                        </div>
                        <div class="clear-both"></div>
                    </div>

                    <div class="wrap-field">
                        <label>Ảnh đại diện 2: </label>
                        <div class="right-wrap-field">
                            <input type="file" name="thumbnail2" required>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                
                    <div class="wrap-field">
                        <label>Thư viện ảnh: </label>
                        <div class="right-wrap-field">
                            <input multiple="" type="file" name="gallery[]" required>
                        </div>
                        <div class="clear-both"></div>
                    </div>

                    <div class="wrap-field">
                        <label>Loại hàng: </label>
                        <select name="class" id="">
                            <option value="1" selected>Nữ</option>
                            <option value="2">Nam</option>
                            <option value="3">Trẻ em</option>
                        </select>
                        <div class="clear-both"></div>
                    </div>
                    
                    <div class="wrap-field">
                        <label>Description: </label>
                        <textarea name="description" id="description" required></textarea>
                        <div class="clear-both"></div>
                    </div>
                </form>
                <div class="clear-both"></div>
            </div>
        </div>


        <?php include "./footer.php" ?>
    <?php else:
        header("Location: login.php");
    endif;
    ?>
</body>
</html>