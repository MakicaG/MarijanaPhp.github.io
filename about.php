<?php include "connection.php";

session_start();

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    $user_id = "";
}

if (isset($_post["logout"])) {
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
    <title>Mystic coffee-about</title>
</head>
<body>
<?php include "header.php"; ?> 
<div class="main">
    <div class="banner">
        <h1>about us</h1>
    </div>
    <div class="title2">
        <a href="home.php">home</a> <span>about</span>
    </div>
    <div class="about-category">
        <div class="box">
            <img src="assets/img/ab.jpg" alt="coffee"class="abph">
            <div class="detail">
                <span>coffee</span>
                <h1>lemon green</h1>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
        </div> <div class="box">
            <img src="assets/img/ab1.jpg" alt="coffee"class="abph">
            <div class="detail">
                <span>coffee</span>
                <h1>lemon teaname</h1>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="assets/img/ab2.jpg" alt="coffee"class="abph">
            <div class="detail">
                <span>coffee</span>
                <h1>lemon green</h1>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="assets/img/ab3.jpg" alt="coffee" class="abph">
            <div class="detail">
                <span>coffee</span>
                <h1>lemon green</h1>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
        </div>
    </div>
    <section class="services">
        <div class="title">
            <img src="assets/img/logo2.png" alt="" class="logo">
            <h1>why choose us</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed hic quo voluptatum repudiandae rerum cum dolor ullam quam sequi, error numquam voluptatem repellat libero! Deserunt nam aspernatur rerum reiciendis esse.</p>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="assets/img/kasica.png" alt="slikaPng">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every order</p>
                </div>
            </div>
            <div class="box">
                <img src="assets/img/korisnicka.png" alt="slikaPng">
                <div class="detail">
                    <h3>24/7 support</h3>
                    <p>one-on-one support</p>
                </div>
            </div>
            <div class="box">
                <img src="assets/img/gift.png" alt="slikaPng">
                <div class="detail">
                    <h3>gift vouchers</h3>
                    <p>vouchers on every festivals</p>
                </div>
            </div>
            <div class="box">
                <img src="assets/img/dostava.png" alt="slikaPng">
                <div class="detail">
                    <h3>worldwide delivery</h3>
                    <p>dropship worldwide</p>
                </div>
            </div>
        </div>
    </section>
    <div class="about">
        <div class="row">
            <div class="img-box">
                <img src="assets/img/abCoffee.png" alt="coffee" class="abPh">
            </div>
            <div class="detail">
                <h1>visit our beautiful showroom!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate iste praesentium consequatur hic iure reiciendis animi vel sit sapiente quidem quibusdam, obcaecati minima, omnis voluptas nihil similique maiores ea ipsum?</p>
                <a href="view_products.php" class="btn">shop now</a>
            </div>
        </div>
    </div>
    <div class="testimonial-container">
        <div class="title">
            <img src="assets/img/logo2.png" alt="logo" class="logo">
            <h1>what people say about us</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In beatae iusto deserunt sequi tempora earum repellat aliquam? Repellendus beatae neque ducimus voluptates dolorem totam. Consequuntur omnis veritatis quibusdam doloribus nostrum?</p>
        </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="assets/img/osoba1.jpg" alt="kom">
                    <h1>Maja M</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis qui et, placeat, est laboriosam at ad alias accusantium, quae eaque officiis expedita rerum commodi dolorem aliquid earum? Magni, fuga molestiae?</p>
                </div>
                <div class="testimonial-item">
                    <img src="assets/img/osoba2.jpg" alt="kom">
                    <h1>Iva L</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis qui et, placeat, est laboriosam at ad alias accusantium, quae eaque officiis expedita rerum commodi dolorem aliquid earum? Magni, fuga molestiae?</p>
                </div>
                <div class="testimonial-item">
                    <img src="assets/img/osoba3.jpg" alt="kom">
                    <h1>Petar I</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis qui et, placeat, est laboriosam at ad alias accusantium, quae eaque officiis expedita rerum commodi dolorem aliquid earum? Magni, fuga molestiae?</p>
                </div>
                <div class="left-arrow">
                    <i class="bx bxs-left-arrow-alt"></i>
                </div>
                <div class="right-arrow">
                    <i class="bx bxs-right-arrow-alt"></i>
                </div>

            </div>
        
    </div>
<?php include "footer.php"; ?> 
</div> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<?php include "alert.php"; ?>
</body>
</html>