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
    <title>Mystic coffee</title>
</head>
<body>
<?php include "header.php"; ?> 
<div class="main">
    <section class="home-section">
        <div class="slider">
            <div class="slider__slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla praesentium vitae blanditiis nobis ea qui harum quisquam eaque, quod provident? Laboriosam rerum perferendis quam, recusandae architecto qui provident sint praesentium!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider__slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>welcome to my shop</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla praesentium vitae blanditiis nobis ea qui harum quisquam eaque, quod provident? Laboriosam rerum perferendis quam, recusandae architecto qui provident sint praesentium!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider__slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla praesentium vitae blanditiis nobis ea qui harum quisquam eaque, quod provident? Laboriosam rerum perferendis quam, recusandae architecto qui provident sint praesentium!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider__slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla praesentium vitae blanditiis nobis ea qui harum quisquam eaque, quod provident? Laboriosam rerum perferendis quam, recusandae architecto qui provident sint praesentium!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->

            <div class="slider__slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla praesentium vitae blanditiis nobis ea qui harum quisquam eaque, quod provident? Laboriosam rerum perferendis quam, recusandae architecto qui provident sint praesentium!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->
            <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>

        </div>
    </section>
    <!-- home slider end -->


    <section class="thumb">
        <div class="box-container">
            <div class="box">
                <img src="assets/img/thumb.png" alt="thumbPh"/>
                <h3>green tea</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum sapiente delectus incidunt, cupiditate eaque tempora maxime iusto quaerat nam odit et expedita exercitationem quidem iure. Earum atque iusto excepturi unde?</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="assets/img/thumb1.png" alt="thumbPh"/>
                <h3>lemon tea</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum sapiente delectus incidunt, cupiditate eaque tempora maxime iusto quaerat nam odit et expedita exercitationem quidem iure. Earum atque iusto excepturi unde?</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="assets/img/thumb2.png" alt="thumbPh"/>
                <h3>Green coffee</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum sapiente delectus incidunt, cupiditate eaque tempora maxime iusto quaerat nam odit et expedita exercitationem quidem iure. Earum atque iusto excepturi unde?</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="assets/img/thumb3.png" alt="thumbPh"/>
                <h3>green tea</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum sapiente delectus incidunt, cupiditate eaque tempora maxime iusto quaerat nam odit et expedita exercitationem quidem iure. Earum atque iusto excepturi unde?</p>
                <i class="bx bx-chevron-right"></i>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="box-container">
            <div class="box">
                <img src="assets/img/solja.png" class="levaSl" alt="boxImg">
            </div>
            <div class="box">
                <img src="assets/img/list.png" class="desnaSl" alt="pngPh">
                <span>healthy tea</span>
                <h1>save up to 50% off</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis magni nihil tenetur dignissimos, similique expedita quas magnam numquam animi veritatis autem, explicabo voluptate repudiandae harum laborum eaque fugiat totam distinctio.</p>
            </div>
        </div>
    </section>

    <section class="shop">
        <div class="title">
            <img src="assets/img/list.png" alt="pngPh" class="desnaSl">
            <h1>Trending Products</h1>
        </div>
        <div class="row">
            <img src="assets/img/vertikalna.jpg" alt="tea" class="vertikalna">
            <div class="row-detail">
                <img src="assets/img/horizontalna.jpg" alt="coffee" class="horizontalna">
                <div class="top-footer">
                    <h1>a cup of hskhdiushb</h1>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="assets/img/card.jpg" alt="cardPh">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="assets/img/card1.jpg" alt="cardPh">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="assets/img/card2.jpg" alt="cardPh">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="assets/img/card3.jpg" alt="cardPh">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="assets/img/card4.jpg" alt="cardPh">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
            <div class="box">
                <img src="assets/img/card5.jpg" alt="cardPh">
                <a href="view_products.php" class="btn">shop now</a>
            </div>
        </div>
    </section>

    <section class="shop-category">
        <div class="box-container">
            <div class="box">
                <img src="assets/img/coffee1.jpg" alt="coffee" class="categoryC">
                <div class="detail">
                    <span>BIG OFFERS</span>
                    <h1>Extra 15% off</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="assets/img/coffee2.jpg" alt="coffee" class="categoryC">
                <div class="detail">
                    <span>new in taste</span>
                    <h1>coffee house</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
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
    <section class="brand">
        <div class="box-container">
            <div class="box">
                <img src="assets/img/brand.png" alt="brand">
            </div>
            <div class="box">
                <img src="assets/img/brand1.png" alt="brand">
            </div>
            <div class="box">
                <img src="assets/img/brand.png" alt="brand">
            </div>
            <div class="box">
                <img src="assets/img/brand1.png" alt="brand">
            </div>
            <div class="box">
                <img src="assets/img/brand.png" alt="brand">
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