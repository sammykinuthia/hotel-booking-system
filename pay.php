<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'royal');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
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
    <?php
if(isset($_POST["pay"])){
    $cat = $_POST["cat"];
    if($cat = 11){
        $sql = "SELECT * FROM rooms r INNER JOIN category ct ON r.category = ct.id  WHERE r.id NOT IN (SELECT c.idRoom FROM customer c) AND categories = 'business' AND beds = 1";

    }
    if($cat = 12){
        $sql = "SELECT * FROM rooms r INNER JOIN category ct ON r.category = ct.id  WHERE r.id NOT IN (SELECT c.idRoom FROM customer c) AND categories = 'business' AND beds = 2";

    }
      if($cat = 21){
        $sql = "SELECT * FROM rooms r INNER JOIN category ct ON r.category = ct.id  WHERE r.id NOT IN (SELECT c.idRoom FROM customer c) AND categories = 'economic' AND beds = 1";

    }
    if($cat = 22){
        $sql = "SELECT * FROM rooms r INNER JOIN category ct ON r.category = ct.id  WHERE r.id NOT IN (SELECT c.idRoom FROM customer c) AND categories = 'economic' AND beds = 2";

    }
      if($cat = 31){
        $sql = "SELECT * FROM rooms r INNER JOIN category ct ON r.category = ct.id  WHERE r.id NOT IN (SELECT c.idRoom FROM customer c) AND categories = 'low' AND beds = 1";

    }
    if($cat = 32){
        $sql = "SELECT * FROM rooms r INNER JOIN category ct ON r.category = ct.id  WHERE r.id NOT IN (SELECT c.idRoom FROM customer c) AND categories = 'low' AND beds = 2";

    }
    if(mysqli_query($conn,$sql)){
        $results = mysqli_query($conn,$sql);
        $rowCount = mysqli_num_rows($results);
        if($rowCount>0){
    $row = mysqli_fetch_assoc($results);
    $rCode = $row["roomCode"];
    global $rCode;
    // while($row = mysqli_fetch_assoc($results)){
        // echo $row['roomCode'];
    }}}
    // echo $rCode;
    ?>
    <form action="" method="post">
    <div class="container main">
        <div class="user-details">
            <h3>User Details</h3>
            <div class="row">
                <p>Name:</p>
                <div class="col">
                    <input required type="text" name="first-name" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input required type="text" name="last-name" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <label>Email: <input required type="email" name="email" class="form-control" placeholder="john@gmail.com" aria-label="email"></label><br>
            <label >City: <input  type="text" class="form-control" name="city" placeholder="Nakuru" aria-label="city" required></label><br>
            <label >Phone number: <input required name="phone" type="text" class="form-control" placeholder="0700-000-000" aria-label="phone"></label><br>
            <label >ID number: <input  type="text" name="id-no" class="form-control" placeholder="id-number" aria-label="id-number" required></label>


        </div>
        <div class="payment-section">
            <h3>Payment</h3>
            <h6 class="text-primary">Total: ksh <?php echo $row['price'] ?></h6>
            <br>
            <p>payment method: <span class="badge badge-success bg-secondary">M-PESA</span></p>
<button name="payNow" type="submit" class="btn btn-primary">Pay Now</button>
        </div>
    </div>
</form>
<?php
try{
if(isset($_POST["payNow"])){
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $idNo = $_POST['id-no'];
echo $rCode;
    $sql = "INSERT INTO customer(firstName,lastName,email,city,phoneNumber,idNumber,bookDate, idRoom)
    VALUES('$firstName','$lastName','$email','$phone','$idNo', now(), (SELECT id FROM rooms WHERE roomCode = '$rCode')";
    if(!mysqli_query($conn,$sql)){
        echo "Error " .mysqli_error($conn);
    }
}} catch(Exeption $e){
    echo $e;
}
?>


<?php require("./components/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>