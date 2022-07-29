<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    

<?php

$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$conn = mysqli_connect($host, $user, $pass,"Royal");  
if($conn === false )  
{  
  die('Could not connect: ' . mysqli_error());  
} 
echo "connected";
class Customer{
   public $id;
   public $firstName;
   public $lastName;
   public $email;
   public $city;
   public $phoneNumber;
   public $idNumber;
   public $idRoom;



   function __construct($conn){
     $sql = "CREATE TABLE IF NOT EXISTS customer(id INT AUTO_INCREMENT,idRoom INT, firstName VARCHAR(50),lastName VARCHAR(50), email VARCHAR(40),city VARCHAR(50), phoneNumber VARCHAR(50), idNumber VARCHAR(50),active BOOLEAN, bookDate DateTime,PRIMARY KEY(id), FOREIGN KEY(idRoom) REFERENCES Rooms(id) )";
    if(!mysqli_query($conn,$sql)){
            echo ' customer create error';
        }
   }
}
class Admin{
   public $id;
   public $firstName;
   public $lastName;
   public $userName;
   public $password;
   public $email;
   public $phoneNumber;
   public $idNumber;

   function __construct($conn){
     $sql = "CREATE TABLE IF NOT EXISTS admin(id INT AUTO_INCREMENT, firstName VARCHAR(50),lastName VARCHAR(50), userName VARCHAR(50), password VARCHAR(50), email VARCHAR(40), phoneNumber VARCHAR(50), idNumber VARCHAR(50),PRIMARY KEY(id))";
    if(!mysqli_query($conn,$sql)){
            echo ' Admin create error';
        }
        // echo "create";
   }
}

class Rooms{
   public $roomId;
   public $category;
   public $beds;
   public $price;
   function __construct($conn){
    $sql = "CREATE TABLE IF NOT EXISTS rooms(id INT AUTO_INCREMENT, category VARCHAR(50),beds INT, price INT, PRIMARY KEY(id))";
    if(!mysqli_query($conn,$sql)){
                echo ' Rooms create error';
            }

    }
}
$admin = new Admin($conn);
$rooms =  new Rooms($conn);
$customer = new Customer($conn);

mysqli_close($conn);  
?>
</body>
</html>