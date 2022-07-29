<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'royal');
session_start();

 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(!isset($_SESSION['login']) || $_SESSION['login'] != TRUE){
    header("location: login.php");
    exit;
}
?>
<?php
$sql = "SELECT bookDate FROM customer where active=1;";
if(mysqli_query($conn,$sql)){
        $result = mysqli_query($conn,$sql);
        $now =  date('Y-m-d H:m:s');
        $nowstamp = strtotime($now);
        $now = date('Y-m-d H:m:s');
        $prev= strtotime( $now)-12*3600;
        $prev = date('Y-m-d H:m:s',$prev);
            
        while($row = mysqli_fetch_assoc($result)){
            // $bookt = $row['bookDate'];
            // $booktstamp = strtotime($bookt);
            // $diff = ($nowstamp-$booktstamp)/3600;
            if($prev > $row["bookDate"] ){
                $sql = "UPDATE customer SET active = 1";
                mysqli_query($conn,$sql);
            }

           
        }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./p-assets/styles/admin.css">
  </head>
  <body>

    <?php require("./components/navBar.php") ?>
<div class="container main bg-light">
    <h1 class="text-center text-primary">Active Customers</h1>
    <hr>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">category</th>
      <th scope="col">room No</th>
      <th scope="col">beds</th>
      <th scope="col">price</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT customer.id as id, firstName, lastName,category,idRoom,rooms.beds as beds,rooms.price as price, bookDate FROM customer INNER JOIN rooms ON customer.idRoom = rooms.id WHERE active = 1 ORDER BY bookDate DESC";
    if(mysqli_query($conn,$sql)){
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
    // foreach($rows as $row)
    {?>

<tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['firstName']?></td>
      <td><?php echo $row['lastName']?></td>
      <td><?php echo $row['category']?></td>
      <td><?php echo $row['idRoom']?></td>
      <td><?php echo $row['beds']?></td>
      <td><?php echo $row['price']?></td>
      <td><?php echo $row['bookDate']?></td>

    </tr>


 <?php   }
}
?>
 
  </tbody>
</table>
<hr>
    <h1 class="text-center text-primary">All Customers</h1>
    <form action="" method="post">
        <label> Limit: <input class="form-control" type="number" name="limit" id="limit"></label>
        <button class="btn btn-primary" type="submit">Filter</button>
    </form>
    <hr>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">category</th>
      <th scope="col">room No</th>
      <th scope="col">beds</th>
      <th scope="col">price</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT customer.id as id, firstName, lastName,category,idRoom,rooms.beds as beds,rooms.price as price, bookDate FROM customer INNER JOIN rooms ON customer.idRoom = rooms.id WHERE active = 0 ORDER BY bookDate DESC";
    if(mysqli_query($conn,$sql)){
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
    // foreach($rows as $row)
    {?>

<tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['firstName']?></td>
      <td><?php echo $row['lastName']?></td>
      <td><?php echo $row['category']?></td>
      <td><?php echo $row['idRoom']?></td>
      <td><?php echo $row['beds']?></td>
      <td><?php echo $row['price']?></td>  
      <td><?php echo $row['bookDate']?></td>

    </tr>


 <?php   }
}
?>
 
  </tbody>
</table>

<h1>hey</h1>
<?php
$now = date('Y-m-d H:m:s');
$prev= strtotime( $now)-12*3600;
$prev = date('Y-m-d H:m:s',$prev);
echo "now: ".$now." prev: ".$prev;
?>

</div>

    <?php require("./components/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>