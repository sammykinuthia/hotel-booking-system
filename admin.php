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
            if(strtotime($prev) > strtotime($row["bookDate"] )){
                $sql = "UPDATE customer SET active = 0";
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
    <!-- active customers -->
    <h3 class="text-center fw-bolder">Active Customers</h2>
    <hr>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">category</th>
      <th scope="col">room</th>
      <th scope="col">beds</th>
      <th scope="col">price</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT customer.id as id, firstName, lastName,category,rooms.roomCode as idRoom,rooms.beds as beds,rooms.price as price, bookDate FROM customer INNER JOIN rooms ON customer.idRoom = rooms.id WHERE active = 1 ORDER BY bookDate DESC";
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
<!-- categories -->
    <h3 class="text-center fw-bolder">Room Categories</h2>
    <hr>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Category</th>
      <th scope="col">beds</th>
      <th scope="col">price</th>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM category";
    if(mysqli_query($conn,$sql)){
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
    // foreach($rows as $row)
    {?>

<tr>
      <th scope="row"><?php echo $row['categories']?></th>
      <td><?php echo $row['beds']?></td>
      <td><?php echo $row['price']?></td>


    </tr>


 <?php   }
}
?>
 
  </tbody>
</table>
<!-- add room pricing -->
<hr>
    <h3 class="text-center fw-bolder ">Update Room Price</h3>
    <hr>
<form class="" method="post">
  <div class="row input-group">
    <div class="col">
      <input name="price" type="number" required class="form-control" placeholder="Price">
    </div>
    <div class="col input-group">
      <select required class="custom-select" name="category" id="category">
        <option value="">SELECT category</option>
        <option value="business">business</option>
        <option value="economic">economic</option>
        <option value="low">low</option>
      </select>
    </div>
    <div class="col input-group">
        <select required  class="custom-select" name="beds" id="beds">
            <option value="">NO. OF BEDS</option>
            <option value="1">one</option>
            <option value="2">two</option>
        </select>
    </div>
    <div class="col">
      <button name="update" class="btn btn-primary">UPDATE</button>
    </div>
  </div>
</form>
<?php
if(isset($_POST["update"])){
    $price = $_POST['price'];
    $category = $_POST['category'];
    $beds = intval($_POST['beds']);
    $sql = "UPDATE category SET price = '$price' WHERE (categories = '$category' AND beds = '$beds')";
    if(!mysqli_query($conn, $sql)){
        echo mysqli_error($conn);
    }
}


?>
<!-- end of add room pricing-->
<!-- add room -->
<hr>
    <h3 class="text-center fw-bolder ">Add Room</h3>
    <hr>
<form method="post">
  <div class="row input-group">
    <div class="col">
      <input name="code" type="text" required class="form-control" placeholder="Room code">
    </div>
    <div class="col input-group">
      <select required class="custom-select" name="category" id="category">
        <option value="">SELECT category</option>
        <option value="business">business</option>
        <option value="economic">economic</option>
        <option value="low">low</option>
      </select>
    </div>
    <div class="col input-group">
        <select required  class="custom-select" name="beds" id="beds">
            <option value="">NO. OF BEDS</option>
            <option value="1">one</option>
            <option value="2">two</option>
        </select>
    </div>
    <div class="col">
      <button name="add" class="btn btn-primary">ADD</button>
    </div>
  </div>
</form>
<!-- end of add room -->
<?php
if(isset($_POST["add"])){
    $code = $_POST['code'];
    $category = $_POST['category'];
    $beds = intval($_POST['beds']);
    $sql = "INSERT INTO rooms(roomCode, category) VALUES ('$code',(SELECT id FROM category WHERE categories = '$category' AND beds = '$beds')) ";
    if(!mysqli_query($conn, $sql)){
        echo mysqli_error($conn);
    }
}

?>



<hr>
    <h3 class="text-center fw-bolder">All Customers</h3>
    <hr>
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
      <th scope="col">room</th>
      <th scope="col">beds</th>
      <th scope="col">price</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php 

    if(isset($_POST['limit'])){
        $limit = $_POST['limit'];
        $sql = "SELECT customer.id as id, firstName, lastName,category,rooms.roomCode as idRoom,rooms.beds as beds,rooms.price as price, bookDate FROM customer INNER JOIN rooms ON customer.idRoom = rooms.id ORDER BY bookDate DESC LIMIT $limit";
    }
    else{
        $sql = "SELECT customer.id as id, firstName, lastName,category,rooms.roomCode as idRoom,rooms.beds as beds,rooms.price as price, bookDate FROM customer INNER JOIN rooms ON customer.idRoom = rooms.id ORDER BY bookDate DESC";
    }
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

</div>

    <?php require("./components/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>