<?php

function component(array $row): void
{ ?>
    <div class="product">
        <form action="" method="post">
            <div class="thumb-product">
                <a href="product.php?id=<?= $row["id"] ?>">
                    <img src="./images/product/<?= $row["thumbnail"] ?>" alt="">
                    <img class="hover-img" src="./images/product/<?= $row["thumbnail2"] ?>" alt="">
                </a>
            </div>
            <div class="info-product">
                <h3 class="title-product"><a href="product.php?id=<?= $row["id"] ?>"><?= $row["title"] ?></a></h3>
                <div class="price-product">
                    <ins><span><?= number_format($row["price"] * (1 - ($row["discount"]) / 100), 0, ",", ".") ?>đ</span></ins>
                    <del><span><?= number_format($row["price"], 0, ",", ".") ?>đ</span></del>
                </div>
            </div>
            <div class="add-to-card">
                <button type="submit" name="add" value=""><img src="./images/icons/shopping_bag_FILL0_wght400_GRAD0_opsz48.png" alt=""></button>
                <input type="hidden" name="product_id" value="<?= $row["id"] ?>">
            </div>

            <!-- <div class="list-size">
                <ul>
                    <li><button class="btn-large">S</button></li>
                    <li><button class="btn-large">M</button></li>
                    <li><button class="btn-large">L</button></li>
                    <li><button class="btn-large">XL</button></li>
                    <li><button class="btn-large">XXL</button></li>
                </ul>
            </div> -->
        </form>
    </div>
<?php }

function other_product(array $row): void
{ ?>
    <div class="other-product">
        <form action="" method="post">
            <div class="thumb-product">
                <a href="product.php?id=<?= $row["id"] ?>">
                    <img src="./images/product/<?= $row["thumbnail"] ?>" alt="">
                    <img class="hover-img" src="./images/product/<?= $row["thumbnail2"] ?>" alt="">
                </a>
            </div>
            <div class="info-product">
                <h3 class="title-product"><a href="product.php?id=<?= $row["id"] ?>"><?= $row["title"] ?></a></h3>
                <div class="price-product">
                    <ins><span><?= number_format($row["price"] * (1 - ($row["discount"]) / 100), 0, ",", ".") ?>đ</span></ins>
                    <del><span><?= number_format($row["price"], 0, ",", ".") ?>đ</span></del>
                </div>
            </div>
            <div class="add-to-card">
                <button type="submit" name="add" value=""><img src="./images/icons/shopping_bag_FILL0_wght400_GRAD0_opsz48.png" alt=""></button>
                <input type="hidden" name="product_id" value="<?= $row["id"] ?>">
            </div>
        </form>
    </div>
<?php }


function cartElement(array $row): void
{ ?>
    <tr>
        <td>
            <div class="prod-item">
                <div class="prod-item__img">
                    <a href="product.php?id=<?= $row["id"] ?>"><img src="./images/product/<?= $row["thumbnail"] ?>" alt=""></a>
                </div>
                <div class="prod-item__content">
                    <a href="product.php?id=<?= $row["id"] ?>">
                        <h3 class="prod-item__title"><?= $row["title"] ?></h3>
                    </a>
                    <div class="prod-item__properties">
                        <!-- <p>Màu sắc: <span>Xanh Nhạt </span></p> -->
                        <!-- <p>Size: <span>L</span></p> -->
                    </div>
                </div>
            </div>
        </td>
        <td class="cart-sale-price">
            <div class="prod-sale"><?= $row["discount"] ?>%</div>
        </td>
        <td>
            <div class="prod-quantity">
                <input type="number" value="<?= getQuantity($row) ?>" min="0" name="quantity[]">
            </div>
        </td>
        <td>
            <div class="prod-item__price"><?= number_format($row["price"] * getQuantity($row), 0, ",", ".") ?>đ</div>
        </td>
        <td>
            <form action="./cart.php?id=<?= $row["id"] ?>" method="post">
                <button class="btn-remove-cart" type="submit" name="remove">
                    <a href="#" class="remove-item-cart" data-product-index="0"><img src="./images/icons/delete.png" alt=""></a>
                </button>
            </form>
        </td>
    </tr>
<?php }

function cartSmall(array $row): void
{ ?>
    <div class="item-product-cart">
        <div class="thumb-product-cart">
            <img src="./images/product/<?= $row["thumbnail"] ?>" alt="">
        </div>
        <div class="info-product-cart">
            <h3><a href="product.php?id=<?= $row["id"] ?>"><?= $row["title"] ?></a></h3>
            <div class="info-properties">
                <p class="properties-color">Màu sắc: <strong>Xanh nhạt</strong></p>
                <p>Size: <strong>L</strong></p>
            </div>
            <div class="info-price-mini"></div>
        </div>
    </div>
<?php }


function sessionCart(string $page): void
{
    if (isset($_SESSION["card"])) {
        $item_array_id = array_column($_SESSION["card"], "product_id");
        // var_dump($_SESSION["card"]);exit;

        if (in_array($_POST["product_id"], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart!')</script>";
            echo "<script>window.location('$page')</script>";
        } else {
            $count = count($_SESSION["card"]);
            $item_array = array(
                "product_id" => $_POST["product_id"],
                "quantity" => (isset($_POST["quantity"]) ? $_POST["quantity"] : "1")
            );
            $_SESSION["card"][$count] = $item_array;
        }
    } else {
        $item_array = array(
            "product_id" => $_POST["product_id"],
            "quantity" => (isset($_POST["quantity"]) ? $_POST["quantity"] : "1")
        );
        $_SESSION["card"][0] = $item_array;
    }
}


function getQuantity(array $row):int
{
    foreach ($_SESSION["card"] as $key => $value) {
        if ($value["product_id"] == $row["id"]) {
            return (int)$_SESSION["card"][$key]["quantity"];
        }
    }
}


function getProduct(mysqli $conn, string $id): array
{
    $sql = "SELECT * FROM `product` WHERE `id` = '$id'";
    $result =  $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}


function order_details(mysqli $conn, string $order_id, string $product_id): void
{
    $product = getProduct($conn, $product_id);
    $quantity = getQuantity($product);
    $all_price = (int) $quantity*$product["price"];

    $sql = "INSERT INTO `order_details`(`order_id`, `product_id`, `price`, `num`, `total_money`)
            VALUES ('$order_id', '$product_id', '".$product["price"]."', '$quantity', '$all_price')";
    $conn->query($sql);
}

?>