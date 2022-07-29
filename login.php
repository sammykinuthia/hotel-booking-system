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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div  class="container mn-vh-100" style="min-height:88vh">
<?php require("./components/navbar.php");?>
    <h2 class="text-primary">LOGIN</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 <!-- username -->
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input required type="text" class="form-control" name="username" id="username"">
  </div>
  <!--password  -->
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input required type="password" class="form-control" name="password" id="password">
  </div>
 
  <button name="login" type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
    // $username = mysqli_real_escape_string($conn,$username);
    // $password = mysqli_real_escape_string($conn,$password);

        $sql = "SELECT * FROM Admin WHERE username = '{$username}' AND password = '{$password}' ";
        if(mysqli_query($conn,$sql)) {
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if($count == 1){
                session_start();
               $_SESSION['user']= $username;
               $_SESSION['login']= TRUE;
               header("location: admin.php");

            }
            else{
                echo "<p class='text-danger'>INVALID LOGIN CREDENTIALS</p>";
                
                
            }
        }
        else{
            echo mysqli_error($conn);
        }
    }
 

?>

</div>
<?php require("./components/footer.php");?>
</body>
</html>