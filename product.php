<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $conn = require __DIR__ . "./src/database.php";
    require_once "src/component.php";


    $sql = "SELECT * FROM product WHERE id = {$id}";
    $sql1 = "SELECT `name` FROM `gallery` WHERE product_id = {$id}";

    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);

    $data = mysqli_fetch_assoc($result);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result1)) {
        $data1[] = $row["name"];
    }

    $sql2 = "SELECT * FROM product WHERE category_id = {$data["category_id"]} AND class = {$data["class"]}";
    $result2 = $conn->query($sql2);

    session_start();
    if(isset($_POST["add"])){
        sessionCart("product.php");
    }

    // mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="./css/head_foot.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="icon" href="../images/logos/logo-icon.ico" type="image/png" sizes="16x16">
</head>

<body>
    <?php include "src/header.php" ?>

    <main>
        <div class="container">
            <div class="breadcrumb-list">
                <ol>
                    <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="./index.php" title="Nữ">Nữ</a></li>
                    <li class="breadcrumb-item"><a href="#" title="Đầm xòa phối khuy"><?= $data["title"] ?></a></li>
                </ol>
            </div>
            <div class="product">
                <div class="product-gallery">
                    <div class="product-gallery-big">
                        <div class="product-gallery-big-img">
                            <img class="big-img" src="./images/product/list/<?= $data["id"] ?>/<?= $data1[0] ?>" alt="">
                            <div class="prod-btn prev"><img src="./images/icons/pre.png" alt="prev"></div>
                            <div class="prod-btn next"><img src="./images/icons/next.png" alt="next"></div>
                        </div>
                    </div>
                    <div class="product-gallery-small">
                        <?php for ($i = 0; $i < count($data1); $i++) { ?>
                            <img src="./images/product/list/<?= $data["id"] ?>/<?= $data1[$i] ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
                <div class="product-detail">
                    <form action="" method="post">
                        <h1><?= $data["title"] ?></h1>
                        <div class="detail-sub">
                            <p>SKU: 48B9382</p>
                            <div class="detail-rating">
                                <div class="detail-rating-wrapper">
                                    <div class="rating-background"></div>
                                </div>
                                <span>(0 đánh giá)</span>
                            </div>
                        </div>
                        <div class="detail-price">
                            <b><?= number_format($data["price"] * (1 - ($data["discount"]) / 100), 0, ",", ".") ?>đ</b>
                            <del><?= $data["price"] ?>đ</del>
                            <div class="detail-price-sale">-<?= $data["discount"] ?>%</div>
                        </div>
                        <div class="detail-color">
                            <p>Màu sắc: Xanh Lime</p>
                        </div>
                        <div class="detail-size">
                            <label for="">
                                <input type="radio" name="size" value="s">
                                <span class="active">S</span>
                            </label>
                            <label for="">
                                <input type="radio" name="size" value="m">
                                <span>M</span>
                            </label>
                            <label for="">
                                <input type="radio" name="size" value="l">
                                <span>L</span>
                            </label>
                            <label for="">
                                <input type="radio" name="size" value="xl">
                                <span>XL</span>
                            </label>
                        </div>
                        <div class="detail-quantity">
                            <p>Số lượng</p>
                            <div class="detail-quantity-input">
                                <input type="number" min="0" value="1" name="quantity">
                                <div class="product-quantity increase">+</div>
                                <div class="product-quantity decrease">-</div>
                            </div>
                        </div>
                        <div class="detail-actions">
                            <!-- <form action="" method="post"> -->
                                <button type="submit" name="add" class="btn shopping">THÊM VÀO GIỎ</button>
                                <input type="hidden" name="product_id" value="<?= $data["id"] ?>">
                            <!-- </form> -->
                            
                            <a href="#" id="puschase"><button class="btn online">MUA HÀNG</button></a>
                        </div>
                        <div class="detail-tab">
                            <div class="detail-tab-header">
                                <div id="tab-1" class="tab-item active">GIỚI THIỆU</div>
                                <div id="tab-2" class="tab-item">CHI TIẾT SẢN PHẨM</div>
                                <div id="tab-3" class="tab-item">BẢO QUẢN</div>
                            </div>
                            <div id="show-content" class="detail-tab-body">
                                <div class="tab-content active">
                                    <p><?= $data["description"] ?></p>
                                </div>
                                <div class="tab-content">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th class="tb-padding">Dòng sản phẩm</th>
                                                <td class="tb-padding">You</td>
                                            </tr>
                                            <tr>
                                                <th class="tb-padding">Nhóm sản phẩm</th>
                                                <td class="tb-padding">Đầm</td>
                                            </tr>
                                            <tr>
                                                <th class="tb-padding">Cổ áo</th>
                                                <td class="tb-padding">Cổ chữ V</td>
                                            </tr>
                                            <tr>
                                                <th class="tb-padding">Tay áo</th>
                                                <td class="tb-padding">Tay ngắn</td>
                                            </tr>
                                            <tr>
                                                <th class="tb-padding">Kiểu dáng</th>
                                                <td class="tb-padding">Đầm xòe</td>
                                            </tr>
                                            <tr>
                                                <th class="tb-padding">Độ dài</th>
                                                <td class="tb-padding">Trên gối</td>
                                            </tr>
                                            <tr>
                                                <th class="tb-padding">Họa tiết</th>
                                                <td class="tb-padding">Trơn</td>
                                            </tr>
                                            <tr>
                                                <th class="tb-padding">Chất liệu</th>
                                                <td class="tb-padding">Thô</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-content">
                                    <p>Chi tiết bảo quản sản phẩm :&nbsp;</p>
                                    <p>* Vải dệt kim : sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn.</p>
                                    <p>* Vải voan , lụa , chiffon nên giặt bằng tay.</p>
                                    <p>* Vải thô , tuytsy , kaki không có phối hay trang trí đá cườm thì có thể giặt máy.</p>
                                    <p>* Vải thô&nbsp;, tuytsy, kaki có&nbsp;phối màu tường phản hay trang trí voan , lụa , đá cườm thì cần giặt tay.</p>
                                    <p>* Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans.
                                        Nếu giặt thì&nbsp;nên lộn trái sản phẩm khi giặt , đóng khuy , kéo khóa, không nên giặt chung cùng đồ sáng màu , tránh dính màu vào các sản phẩm khác.&nbsp;</p>
                                    <p>* Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu , phân biệt màu và loại vải để tránh trường hợp vải phai.
                                        Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh , nên giặt cùng xà phòng pha loãng.</p>
                                    <p>* Các sản phẩm có thể&nbsp;giặt bằng máy thì chỉ nên để chế độ giặt nhẹ , vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.</p>
                                    <p>* Nên phơi sản phẩm tại chỗ thoáng mát , tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu , nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn.</p>
                                    <p>* Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng , mát và không bị cháy , giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải.&nbsp;</p>
                                </div>
                            </div>
                            <div class="show-more">
                                <div>
                                    <img src="./images/icons/image-down.png" alt="" class="show-icon active">
                                    <img src="./images/icons/image-up.png" alt="" class="show-icon">
                                </div>
                                <div class="inline"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="customer-rating">
                <h1>khách hàng đánh giá</h1>
                <div class="rating-row">
                    <div class="rating-left">
                        <div class="top-star">
                            <p>5</p>
                            <div class="five-star">
                                <div class="background-star">
                                    <div class="star-icon"></div>
                                    <div class="star-icon"></div>
                                </div>
                                <span>(0 đánh giá)</span>
                            </div>
                        </div>
                        <div class="detail-star">
                            <div class="background-star">
                                <div class="star-icon"></div>
                                <div class="star-icon"></div>
                            </div>
                            <div class="process-rating"></div>
                            <span>0</span>
                        </div>
                        <div class="detail-star">
                            <div class="background-star">
                                <div class="star-icon"></div>
                                <div class="star-icon"></div>
                            </div>
                            <div class="process-rating"></div>
                            <span>0</span>
                        </div>
                        <div class="detail-star">
                            <div class="background-star">
                                <div class="star-icon"></div>
                                <div class="star-icon"></div>
                            </div>
                            <div class="process-rating"></div>
                            <span>0</span>
                        </div>
                        <div class="detail-star">
                            <div class="background-star">
                                <div class="star-icon"></div>
                                <div class="star-icon"></div>
                            </div>
                            <div class="process-rating"></div>
                            <span>0</span>
                        </div>
                        <div class="detail-star">
                            <div class="background-star">
                                <div class="star-icon"></div>
                                <div class="star-icon"></div>
                            </div>
                            <div class="process-rating"></div>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="rating-right">
                        <img src="../images/icons/rating-smile.svg" alt="star smile">
                        <p>Sản phẩm chưa có đánh giá. Hãy là người đầu tiên đánh giá sản phẩm này !</p>
                        <button>Đánh giá sản phẩm</button>
                    </div>
                </div>
            </div> -->
            <div class="exclusive-inner">
                <div class="title-section">sản phẩm tương tự</div>
                <div class="list-products">
                    <?php
                    while ($row = mysqli_fetch_array($result2)) {
                        if ($row["id"] != $data["id"]) {
                            other_product($row);
                        }
                    }
                    ?>
                </div>
                <div class="link-product">
                    <a href="./list_product.php?class=<?= $data["class"] ?>" class="all-product">Xem tất cả</a>
                </div>
            </div>
        </div>
    </main>
    <?php include "src/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="/javascript/Product.js"></script>
    <script src="/javascript/Header&footer.js"></script>
</body>

</html>