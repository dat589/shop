<div id="admin-heading-panel">
    <div class="container">
        <div class="left-panel">
            Xin chào <span><?= $user["name"] ?></span>
        </div>
        <div class="right-panel">
            <img height="24" src="../images/icons/home.png" />
            <a href="./index.php">Trang chủ</a>
            <img height="24" src="../images/icons/logout.png" />
            <a href="./logout.php">Đăng xuất</a>
        </div>
    </div>
</div>
<div id="content-wrapper">
    <div class="container">
        <div class="left-menu">
            <div class="menu-heading">Admin Menu</div>
            <div class="menu-items">
                <ul>
                    <li><a href="#">Cấu hình</a></li>
                    <li><a href="account_listing.php">Tài khoản</a></li>
                    <li><a href="product_listing.php">Sản phẩm</a></li>
                    <li><a href="order_listing.php">Đơn hàng</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>