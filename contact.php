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
    <title>Mystic coffee-contact</title>
</head>
<body>
<?php include "header.php"; ?> 
<div class="main">
    
<div class="banner">
        <h1>contact us</h1>
    </div>
    <div class="title2">
        <a href="home.php">home</a> <span>contact us</span>
    </div>
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
    <div class="form-container">
        <form method="post">
            <div class="title">
                <img src="assets/img/logo2.png" alt="logo">
                <h1>leave a message</h1>
            </div>
            <div class="input-field">
                <p>your name <sup class="kontZv">*</sup></p>
                <input type="text" name="name">
            </div>
            <div class="input-field">
                <p>your email <sup class="kontZv">*</sup></p>
                <input type="email" name="email">
            </div>
            <div class="input-field">
                <p>your number <sup class="kontZv">*</sup></p>
                <input type="number" name="number">
            </div>
            <div class="input-field">
                <p>your message<sup class="kontZv">*</sup></p>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
                <button type="sumbit" name="submit-btn" class="btn">send message</button>
            </div>
       
        </form>

    </div>
    <div class="address">
            <div class="title">
                <img src="assets/img/logo2.png" alt="logo">
                <h1>contact detail</h1>

            </div>

            <div class="box-container">
                <div class="box">
                <i class='bx bx-map-pin'></i>
                    <div>
                        <h4>address</h4>
                        <p>Marka Oreškovića 51, Belgrade, Serbia</p>
                    </div>
                </div>
                <div class="box">
                <i class='bx bx-phone-call'></i>
                    <div>
                        <h4>phone number</h4>
                        <p>+381 603034665</p>
                    </div>
                </div>
                <div class="box">
                <i class='bx bx-mail-send'></i>
                    <div>
                        <h4>email</h4>
                        <p>mysterycoffee@gmail.com</p>
                    </div>
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