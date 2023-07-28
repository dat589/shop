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
    <link rel="stylesheet" type="text/css" href="../css/adminStyle.css">
    <link rel="icon" href="../images/logos/logo-icon.ico" type="image/png" sizes="16x16">
    <title>Admin</title>
</head>
<body>
    <?php if(isset($user)): include "./header.php" ?>

        <div class="main-content">
            <h1 class="info">Trang chủ quản trị</h1>
            <h2>Giới thiệu</h2>
            <div class="content-box">
                <p>Trung tâm Tin học & Công nghệ được thành lập vào ngày 06/05/2009, hoạt động trong lĩnh vực đào tạo công nghệ thông tin, đặc biệt là đào tạo chuyên sâu trong lĩnh vực lập trình và đồ họa website với trụ sở chính đặt tại Hà Nội
                - Tầng 5, Tòa nhà A4, Ngõ 120 Hoàng Quốc Việt - Cầu Giấy - Hà Nội
                - Số 25/178/71 Tây Sơn, Trung Liệt, Đống Đa - Hà Nội</p>


                <p>Đây là hệ thống quản trị của website Thương mại điện tử do Trung tâm Tin học & Công nghệ vietpro xây dựng và phát triển, dành cho học viên của khóa học Lập trình web PHP PRO (Nghiêm cấm sao lưu hay chia sẻ dưới mọi hình thức đối với những ai không phải là học viên của Vietpro)</p>


                <p>Hệ thống quản trị này có các chức năng quản lý sau:</p>
                <p>- Quản lý Thành viên</p>
                <p>- Quản lý Danh mục sản phẩm</p>
                <p>- Quản lý Sản phẩm</p>
                <p>- ...</p>

                <p>Hệ thống đang trong quá trình hoàn thiện bởi các Chuyên gia Công nghệ web của Trung tâm Tin học & Công nghệ vietpro và các bạn học viên. Hệ thống vẫn tiếp tục được nâng cấp và cải tiến để cho các bạn học viên các khóa học sau được sử dụng những chức năng tốt nhất của hệ thống</p>
                <p>Người đại diện: Benjamin RACHOW<br><br>
                    Địa chỉ: Tầng 10, Tòa nhà Vincom, Số 45A đường Lý Tự Trọng và số 72 đường Lê Thánh Tôn, P. Bến Nghé, Q. 1, Tp. HCM<br><br>
                    Hotline: 028-35208840 bấm số nhánh (363) / (361) / (348) (Sáng: 9h-12h | Chiều: 14h-18h trừ Thứ 7 & Chủ nhật)<br><br>
                    Email: acd.socialcommerce@gmail.com<br><br>
                    MSDN: 0102289856 cấp ngày 23/05/2007 tại Hà Nội<br><br>
                    Bạn đang truy cập trang web thương hiệu của Công ty L’OREAL Việt Nam. Phân phối sản phẩm được xử lý bởi Công ty OnPoint, mã số ĐKKD 0314709816, đại lý ủy quyền của L’OREAL Việt Nam.</p>
            </div>

        </div>
        <?php include "./footer.php" ?>
    <?php else:
        header("Location: login.php");
    endif;
    ?>
</body>
</html>