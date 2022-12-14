

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
    <!-- business single -->
<div class="col-md-4 my-card business">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Business Package</h5>
    <input type="text" name="cat" hidden value="11" id="">


<p class="bg-secondary text-light p-2 ">Single bed</p>
    <br>
    <p>Best services, spacious rooms with hot shower</p>
    <h4 id="business1" class="price">Ksh: </h4><br>
    <button id="1" class="btn btn-primary" name='pay' type="submit">Book Now</button>
  </div>
  </form>
</div>         
    </div>
    <!-- business double -->
    <div class="col-md-4 my-card business">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Business Package</h5>
    <input type="text" name="cat" hidden value="12" id="">


<p class="bg-secondary text-light p-2 ">Two bed</p>
    <br>
    <p>Best services, spacious rooms with hot shower</p>
    <h4 id="business2" class="price">Ksh: </h4><br>
    <button id="2" class="btn btn-primary" name='pay' type="submit">Book Now</button>
  </div>
  </form>
</div>         
    </div>
    <!-- economy single -->
    <div class="col-md-4 my-card business">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Economic Package</h5>
    <input type="text" name="cat" hidden value="21" id="">

<p class="bg-secondary text-light p-2 ">Single bed</p>
    <br>
    <p>Best services, spacious rooms with hot shower</p>
    <h4 id="economy1" class="price">Ksh: </h4><br>
    <button id="3" class="btn btn-primary" name='pay' type="submit">Book Now</button>
  </div>
  </form>
</div>         
    </div>
        <!-- economy double -->
    <div class="col-md-4 my-card business">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Economic Package</h5>
    <input type="text" name="cat" hidden value="22" id="">

<p class="bg-secondary text-light p-2 ">Two bed</p>
    <br>
    <p>Best services, spacious rooms with hot shower</p>
    <h4 id="economy2" class="price">Ksh: </h4><br>
    <button id="4" class="btn btn-primary" name='pay' type="submit">Book Now</button>
  </div>
  </form>
</div>         
    </div>
        <!-- Low single -->
    <div class="col-md-4 my-card business">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Low Package</h5>
    <input type="text" name="cat" hidden value="31" id="">

<p class="bg-secondary text-light p-2 ">Single bed</p>
    <br>
    <p>Best services, spacious rooms with hot shower</p>
    <h4 id="low1" class="price">Ksh: </h4>
    <br>
    <button id="5" class="btn btn-primary" name='pay' type="submit">Book Now</button>
  </div>
  </form>
</div>         
    </div>
            <!-- Low double -->
    <div class="col-md-4 my-card business">
<div class="card">
    <form action="pay.php" method="post">
  <div class="card-body">
    <h5 class="card-title">Low Package</h5>
<p class="bg-secondary text-light p-2 ">Two bed</p>
    <br>
    <input type="text" name="cat" hidden value="32" id="">

    <p>Best services, spacious rooms with hot shower</p>
    <h4 id="low2" class="price">Ksh: </h4>
    <br>
    <button id="6" class="btn btn-primary" name='pay' type="submit">Book Now</button>
  </div>
  </form>
</div>         
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


