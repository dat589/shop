<header>
<?php
// session_start();

if(isset($_SESSION["card"])){
    $count = count($_SESSION["card"]);
    
    $sqlP = "SELECT * FROM `product`";
    $resultP = $conn->query($sqlP);

    mysqli_close($conn);
}
?>
    <div class="container d-flex">
        <nav class="main-menu">
            <img src="./images/icons/menu_bar.png" alt="" class="mobile-menu">
            <ul class="menu">
                <li>
                    <a href="#">nữ</a>
                    <ul class="sub-menu">
                        <div class="cat-sub-menu">
                            <div><a href="#">Hàng nam mới về</a></div>
                            <div><a href="#">Discover Charming</a></div>
                            <div><a href="#">Vibrant Vacay</a></div>
                            <div><a href="#">Mơ Nhuộm Nắng</a></div>
                            <div><a href="#">Elevated Simplicity</a></div>
                            <div><a href="#">Spring Love</a></div>
                            <div><a href="#">Ưu đãi 20%</a></div>
                            <div><a href="#">Ưu đãi SS2021</a></div>
                        </div>
                        <div class="list-submenu">
                            <div class="item-list-submenu">
                                <h3>ÁO</h3>
                                <ul>
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo peplum</a></li>
                                    <li><a href="#">Áo kiểu</a></li>
                                    <li><a href="#">Áo croptop</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>ÁO KHOÁC</h3>
                                <ul>
                                    <li><a href="#">Áo khoác</a></li>
                                    <li><a href="#">Áo blazer</a></li>
                                    <li><a href="#">Áo dạ</a></li>
                                    <li><a href="#">Áo vest</a></li>
                                    <li><a href="#">Áo măng tô</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>QUẦN & JUMPSUIT</h3>
                                <ul>
                                    <li><a href="#">Quần jeans</a></li>
                                    <li><a href="#">Quần lửng</a></li>
                                    <li><a href="#">Quần dài</a></li>
                                    <li><a href="#">Jumpsuit</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>CHÂN VÁY</h3>
                                <ul>
                                    <li><a href="#">Chân váy</a></li>
                                    <li><a href="#">Chân váy</a></li>
                                    <li><a href="#">Chân váy</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>PHỤ KIỆN</h3>
                                <ul>
                                    <li><a href="#">Phụ kiện</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="#">nam</a>
                    <ul class="sub-menu">
                        <div class="cat-sub-menu">
                            <div><a href="#">Hàng nam mới về</a></div>
                            <div><a href="#">Essential Sweatsuit Men</a></div>
                            <div><a href="#">Ưu đãi 20%</a></div>
                            <div><a href="#">SS2021 Clearance Sale </a></div>
                        </div>
                        <div class="list-submenu">
                            <div class="item-list-submenu">
                                <h3>ÁO</h3>
                                <ul>
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>ÁO KHOÁC</h3>
                                <ul>
                                    <li><a href="#">Áo vest</a></li>
                                    <li><a href="#">Áo khoác</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>QUẦN NAM</h3>
                                <ul>
                                    <li><a href="#">Quần jeans</a></li>
                                    <li><a href="#">Quần lửng</a></li>
                                    <li><a href="#">Quần dài</a></li>
                                    <li><a href="#">Quần khaki</a></li>
                                    <li><a href="#">Quần tây</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>GIÀY & DÉP</h3>
                                <ul>
                                    <li><a href="#">Giày/Dép</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>PHỤ KIỆN</h3>
                                <ul>
                                    <li><a href="#">Phụ kiện</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="#">trẻ em</a>
                    <ul class="sub-menu">
                        <div class="cat-sub-menu">
                            <div><a href="#">Hàng nữ mới về</a></div>
                            <div><a href="#">Essential Sweatsuit Men</a></div>
                            <div><a href="#">Ưu đãi 20%</a></div>
                            <div><a href="#">SS2021 Clearance Sale </a></div>
                        </div>
                        <div class="list-submenu">
                            <div class="item-list-submenu">
                                <h3>ÁO</h3>
                                <ul>
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>ÁO KHOÁC</h3>
                                <ul>
                                    <li><a href="#">Áo vest</a></li>
                                    <li><a href="#">Áo khoác</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>QUẦN NAM</h3>
                                <ul>
                                    <li><a href="#">Quần jeans</a></li>
                                    <li><a href="#">Quần lửng</a></li>
                                    <li><a href="#">Quần dài</a></li>
                                    <li><a href="#">Quần khaki</a></li>
                                    <li><a href="#">Quần tây</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>GIÀY & DÉP</h3>
                                <ul>
                                    <li><a href="#">Giày/Dép</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="#">bộ sưu tập</a>
                    <ul class="sub-menu">
                        <div class="list-submenu">
                            <div class="item-list-submenu">
                                <h3>ÁO</h3>
                                <ul>
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>ÁO KHOÁC</h3>
                                <ul>
                                    <li><a href="#">Áo vest</a></li>
                                    <li><a href="#">Áo khoác</a></li>
                                </ul>
                            </div>
                            <div class="item-list-submenu">
                                <h3>QUẦN NAM</h3>
                                <ul>
                                    <li><a href="#">Quần jeans</a></li>
                                    <li><a href="#">Quần lửng</a></li>
                                    <li><a href="#">Quần dài</a></li>
                                    <li><a href="#">Quần khaki</a></li>
                                    <li><a href="#">Quần tây</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a href="#">lifestyle</a></li>
                <li class="menu-custom">
                    <a href="#">về chúng tôi</a>
                    <ul class="sub-menu sub-menu-collection sub-menu-about">
                        <li><a href="#">Về IVY moda</a></li>
                        <li><a href="#">Chính sách thẻ thành viên</a></li>
                        <li><a href="#">Bảo hành trọn đời</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Hệ thống cửa hàng</a></li>
                        <li><a href="#">Q&A</a></li>
                    </ul>
                </li>
            </ul>
            <div class="sub-mobile-menu">
                <div class="box-action">
                    <a href="login.html">Đăng nhập</a>
                </div>
                <ul class="menu-mb">
                    <li class="has-child">
                        <div class="child-link">
                            <a href="#">NỮ</a>
                            <img class="icon-plus" src="./images/icons/plus.png" alt="">
                            <img class="icon-minus" src="./images/icons/minus.png" alt="">
                        </div>
                        <ul class="sub-menu-mb">
                            <li><a href="../html/prod1.html">HÀNG NỮ MỚI VỀ</a></li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">ÁO</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo peplum</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">ÁO KHOÁC</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">QUẦN NAM</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li><a href="#">GIÀY & DÉP</a></li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <div class="child-link">
                            <a href="#">TRẺ EM</a>
                            <img class="icon-plus" src="./images/icons/plus.png" alt="">
                            <img class="icon-minus" src="./images/icons/minus.png" alt="">
                        </div>
                        <ul class="sub-menu-mb">
                            <li><a href="#">HÀNG NAM MỚI VỀ</a></li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">ÁO</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">ÁO KHOÁC</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">QUẦN NAM</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li><a href="#">GIÀY & DÉP</a></li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <div class="child-link">
                            <a href="#">BỘ SƯU TẬP</a>
                            <img class="icon-plus" src="./images/icons/plus.png" alt="">
                            <img class="icon-minus" src="./images/icons/minus.png" alt="">
                        </div>
                        <ul class="sub-menu-mb">
                            <li><a href="#">HÀNG NAM MỚI VỀ</a></li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">ÁO</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">ÁO KHOÁC</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <div class="child-link">
                                    <a href="#">QUẦN NAM</a>
                                    <img class="icon-plus" src="./images/icons/plus.png" alt="">
                                    <img class="icon-minus" src="./images/icons/minus.png" alt="">
                                </div>
                                <ul class="child-sub">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo polo</a></li>
                                    <li><a href="#">Áo sơ mi</a></li>
                                    <li><a href="#">Áo len</a></li>
                                </ul>
                            </li>
                            <li><a href="#">GIÀY & DÉP</a></li>
                        </ul>
                    </li>
                    <li>
                        <div><a href="#">LIFESTYLE</a></div>
                    </li>
                    <li class="has-child">
                        <div class="child-link">
                            <a href="#">VỀ CHÚNG TÔI</a>
                            <img class="icon-plus" src="./images/icons/plus.png" alt="">
                            <img class="icon-minus" src="./images/icons/minus.png" alt="">
                        </div>
                        <ul class="sub-menu-mb">
                            <li><a href="#">Về IVY moda</a></li>
                            <li><a href="#">Chính sách thẻ và thành viên</a></li>
                            <li><a href="#">Bảo hành trọn đời</a></li>
                            <li><a href="#">Chính sách đổi trả</a></li>
                            <li><a href="#">Hệ thống cửa hàng</a></li>
                            <li><a href="#">Q&A</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="site-brand">
            <a href="index.php"><img src="./images/logos/logo.png" alt=""></a>
        </div>
        <div class="right-header">
            <form action="search" class="search-form">
                <button class="submit"><img src="./images/icons/search_FILL0_wght400_GRAD0_opsz48.png" alt=""></button>
                <input type="text" class="search-quick" placeholder="TÌM KIẾM SẢN PHẨM">
                <div class="quick-search">
                    <h3>Tìm kiếm nhiều nhất</h3>
                    <div class="item-search">
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Đầm</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Trễ vai</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Áo khoác</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Quần</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Áo sơ mi</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Vest</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Parka</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Tweed</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Croptop</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Chân váy</a>
                        </label>
                        <label for="" class="item-sub-list">
                            <a href="#" class="item-sub-title">Lông cừu</a>
                        </label>
                    </div>
                </div>
            </form>
            <div class="header-actions">
                <div class="item wallet">
                    <a href="#" class="icon"><img src="./images/icons/headphones_FILL0_wght400_GRAD0_opsz48.png" alt=""></a>
                </div>
                <div class="item account">
                    <a href="./login.php" class="icon"><img src="./images/icons/person_2_FILL0_wght400_GRAD0_opsz48.png" alt=""></a>
                </div>
                <div class="item cart">
                    <a href="#" class="icon">
                        <img src="./images/icons/shopping_bag_FILL0_wght400_GRAD0_opsz48.png" alt="">
                        <span class="number-cart"><?= $count ?? 0 ?></span>
                    </a>
                    <div class="sub-action">
                        <div class="top-action">
                            <h3>
                                Giỏ hàng
                                <span class="number-cart"><?= $count ?? 0 ?></span>
                            </h3>
                        </div>
                        <div class="main-action">
                            <!-- <div class="item-product-cart">
                                <div class="thumb-product-cart">
                                    <img src="./images/product/1.a.jpg" alt="">
                                </div>
                                <div class="info-product-cart">
                                    <h3><a href="product.html">ĐẦM THÔ DÁNG BALLOON</a></h3>
                                    <div class="info-properties">
                                        <p class="properties-color">Màu sắc: <strong>Xanh nhạt</strong></p>
                                        <p>Size: <strong>L</strong></p>
                                    </div>
                                    <div class="info-price-mini"></div>
                                </div>
                            </div> -->
                            <?php
                                $total = 0;
                                if (isset($_SESSION["card"]) && !empty($_SESSION["card"])) {
                                    $product_id = array_column($_SESSION["card"], "product_id");

                                    while ($row = mysqli_fetch_assoc($resultP)) {
                                        foreach ($product_id as $id) {
                                            if ($row["id"] == $id) {
                                                cartSmall($row);
                                                $total = $total + (int)$row['price'] * getQuantity($row);
                                            }
                                        }
                                    }
                                }
                            ?>
                        </div>
                        <div class="bottom-action">
                            <div class="total-price">Tổng cộng: <strong><?= number_format($total,0,",",".") ?>đ</strong></div>
                            <div class="box-action">
                                <a href="cart.php" class="action-view-cart">Xem giỏ hàng</a>
                                <a href="./login.php" class="action-login">Đăng nhập</a>
                            </div>
                        </div>
                        <div class="action-close">
                            <img src="./images/icons/close.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="item icon">
                        <img id="icon-theme" src="../images/icons/moon.png" alt="icon">
                    </div> -->
            </div>
        </div>
    </div>
</header>