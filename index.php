<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Royal palace</title>
    <link rel="stylesheet" href="./p-assets/styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="main">
        <div class="hero">
            <?php
            require("./components/navBar.php")
            ?>
            <div class="inner-hero">

            <div class="brand">
                <h1 class="text-danger title">Royal Palace Hotel</h1>
                <p class="hero-description">Get the best Hotel services in the Kenya. Royal Hotel is the Leading Hotel Country-wide with its amazing customer care personel and clean Housing for our customers.<br/>Get started today and you wount regret </p>
                <a href="book.php" class="btn btn-outline-danger btn-lg text-light fw-bolder">BOOK NOW</a>
            </div>
            <div class="market">
                <div class="business"></div>
                <div class="economy"></div>
                <div class="low"></div>
            </div>
        </div>
        </div>
<div id="about" class="about container">
    <h2 class="text-center">About Us</h3>
    <hr>
    <div class="inner-about">
        <div class="about-image">
            <img src="./p-assets/images/customer.jpg" alt="customer">
        </div>
        <div class="about-desc bg-light">
            <h3 class="text-center">Customer Service</h3>
            <p>In 2019, we were award the best Hotel customer care providers country wide. This is shows our commitment to serving our clients offering only the best for the various packages available. </p>
            <p>We are looking forward to working with you any time  when you are ready. Come have fun at our spacious rooms ranging at affordable prices</p>
        </div>
    </div>
</div>
    </div>
    <?php
require("./components/footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>