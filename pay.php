<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./p-assets/styles/pay.css">
  </head>
  <body>
    <?php require("./components/navBar.php") ?>
    <form action="" method="post">
    <div class="container main">
        <div class="user-details">
            <h3>User Details</h3>
            <div class="row">
                <p>Name:</p>
                <div class="col">
                    <input required type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input required type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <label>Email: <input required type="email" class="form-control" placeholder="john@gmail.com" aria-label="email"></label><br>
            <label >City: <input  type="text" class="form-control" placeholder="Nakuru" aria-label="city" required></label><br>
            <label >Phone number: <input required type="text" class="form-control" placeholder="0700-000-000" aria-label="phone"></label><br>
            <label >ID number: <input  type="text" class="form-control" placeholder="id-number" aria-label="id-number" required></label>





        </div>
        <div class="payment-section">
            <h3>Payment</h3>
            <h6 class="text-primary">Total: ksh 0.0</h6>
            <br>
            <p>payment method: <span class="badge badge-success bg-secondary">M-PESA</span></p>
<button type="submit" class="btn btn-primary">Pay Now</button>
        </div>
    </div>
</form>



<?php require("./components/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>