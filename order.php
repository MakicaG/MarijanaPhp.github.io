<?php include "connection.php";

session_start();

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    $user_id = "";
}

if (isset($_POST["logout"])) {
    session_destroy();
    header("location:login.php");
}
?>

<style type="text/css">
    <?php include "assets/style.css"; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
    <title>Mystic coffee-order</title>
</head>
<body>
<?php include "header.php"; ?> 
<div class="main">
    
<div class="banner">
        <h1>my order</h1>
    </div>
    <div class="title2">
        <a href="home.php">home</a> <span> order</span>
</div>
<section class="products">
    <div class="box-container">
    <div class="title">
            <img src="assets/img/logo2.png" alt="logo2"/>
            <h1>Order</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, consectetur optio.</p>
        </div>
    <div class="box-container">
        <?php
        $select_orders = $conn->prepare(
            "SELECT * FROM `orders` WHERE user_id =? ORDER BY date DESC"
        );
        $select_orders->execute([$user_id]);
        if ($select_orders->rowCount() > 0) {
            while ($fetch_order = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                $select_products = $conn->prepare(
                    "SELECT * FROM `products` WHERE id=?"
                );
                $select_products->execute([$fetch_order["product_id"]]);
                if ($select_products->rowCount() > 0) {
                    while (
                        $fetch_product = $select_products->fetch(
                            PDO::FETCH_ASSOC
                        )
                    ) { ?>

            <div class="box">
                <?php if ($fetch_order["status"] == "cancle") {
                    echo 'style=border:2px solid red";';
                } ?>
                <a href="view_order.php?get_id=<?= $fetch_order["id"] ?>">
                    <p class="date">
                    <i class='bx bxs-calendar'></i> <span><?= $fetch_order[
                        "data"
                    ] ?></span>
                    </p>
                    <img src="assets/img/<?= $fetch_product[
                        "image"
                    ] ?>" alt="img" class="image"/>
                    <div class="row">
                        <h3 class="name"><?= $fetch_product["name"] ?></h3>
                        <p class="price">Price: $<?= $fetch_order[
                            "price"
                        ] ?> X <?= $fetch_order["qty"] ?></p>
                        <p class="status" style="color:<?php if (
                            $fetch_order["status"] == "delivered"
                        ) {
                            echo "green";
                        } elseif ($fetch_order["status"] == "canceled") {
                            echo "red";
                        } else {
                            echo "orange";
                        } ?>">

                        </p>
                    </div>
            </a>
            </div>

        <?php }
                }
            }
        }
        ?>
    </div>

    
    </div>
</section>
    <?php include "footer.php"; ?> 
</div> 



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<?php include "alert.php"; ?>
</body>
</html>