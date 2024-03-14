<header class="header">
    <div class="flex">
        <a href="home.php" class="logo"><img src="assets/img/logo.png"></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="view_products.php">Products</a>
                <a href="order.php">Orders</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
            </nav>
            <div class="icons">
                <i class="bx bxs-user" id="user-btn"></i>
                <?php
                $count_wishlist_items = $conn->prepare(
                    "SELECT * FROM `wishlist` WHERE user_id=?"
                );
                $count_wishlist_items->execute(["user_id"]);
                $total_wishlist_items = $count_wishlist_items->rowCount();
                ?>
                <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup class="brojH"><?= $total_wishlist_items ?></sup></a>
                <?php
                $count_cart_items = $conn->prepare(
                    "SELECT * FROM `cart` WHERE user_id=?"
                );
                $count_cart_items->execute(["user_id"]);
                $total_cart_items = $count_cart_items->rowCount();
                ?>

                <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup class="brojH"><?= $total_cart_items ?></sup></a>
                <i class="bx bx-list-plus" id="menu-btn" style="font-size: 32px;"></i>
            </div>
            <div class="user-box">
                <p>username: <span><?php echo $_SESSION[
                    "user_name"
                ]; ?></span></p>
                <p>email: <span><?php echo $_SESSION[
                    "user_email"
                ]; ?></span></p>
                <a href="login.php" class="btn">login</a>
                <a href="register.php" class="btn">register</a>
                <form method="post">
                    <button type="submit" name="logout" class="logout-btn">Log out</button>
                </form>
            </div>
    </div>
</header>