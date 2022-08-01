<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./p-assets/styles/book.css">

  
</head>
<body>
<?php require("./components/navBar.php") ?>
<!-- carose -->
<div id="carouselExampleDark" class="carousel carousel-primary slide container" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./p-assets/images/img.jpg" class="d-block img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Business Class</h5>
        <p>Get the best services offered our Rooms. Enjoy hot shower, spacious rooms with the highest hygine</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./p-assets/images/cover.jpg" class="d-block img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Economic Class</h5>
        <p>For the middle class, we Got the best. Housing available for single beds and two beds at affordable prices</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./p-assets/images/img2.jpg" class="d-block img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Low Class</h5>
        <p>Wondering you can't afford the above packages? we got you sorted. Check out this and you'll never miss again </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end carose -->
<h2 class="text-center">Purchase our Deals</h2>
<hr> 
<div class="market container">
<div class="row">
<div class="col-md-4 my-card business">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Business Package</h5>


    <input type="radio" class="btn-check" name="business" id="business-single" autocomplete="off">
    <label class="btn btn-secondary" for="business-single">Single Bed</label>
    <input type="radio" class="btn-check" name="business" id="business-double" autocomplete="off" >
    <label class="btn btn-secondary" for="business-double">Two Bed</label>
    <br>
    <p>Best services, spacious rooms with hot shower</p>
    <h4 class="price">Ksh: </h4>
    <button class="btn btn-primary" type="submit">Book Now</button>
  </div>
  </form>
</div>         
    </div>
<!-- economy -->
<div class="col-md-4 my-card economy">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Economic Package</h5>
    
    <input type="radio" class="btn-check" name="economic" id="economic-single" autocomplete="off" >
    <label class="btn btn-secondary" for="economic-single">Single Bed</label>
    <input type="radio" class="btn-check" name="economic" id="economic-double" autocomplete="off" >
    <label class="btn btn-secondary" for="economic-double">Two Bed</label>
<br>
    <p>Best services, spacious rooms with hot shower</p>

    <h4 class="price">Ksh: </h4>
    <button class="btn btn-primary" type="submit">Book Now</button>
  </div>
  </form>
</div>        
    </div>
<div class="col-md-4 my-card low">
<div class="card">
 <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Low Package</h5>
    
    <input type="radio" class="btn-check" name="low" id="low-single" autocomplete="off" >
    <label class="btn btn-secondary" for="low-single">Single Bed</label>
    <input type="radio" class="btn-check" name="low" id="low-double" autocomplete="off" >
    <label class="btn btn-secondary" for="low-double">Two Bed</label>
<br>
    <p>Best services, spacious rooms with hot shower</p>

    <h4 class="price">Ksh: </h4>
    <button class="btn btn-primary" type="submit">Book Now</button>
  </div>
</form>
</div>
    </div>
</div>
</div>

<?php require("./components/footer.php")?>
<script src="book.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


