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
   function __construct($conn){
     $sql = "CREATE TABLE IF NOT EXISTS customer(id INT NOT NULL AUTO_INCREMENT,idRoom INT NOT NULL, firstName VARCHAR(50) NOT NULL,lastName VARCHAR(50) NOT NULL, email VARCHAR(40) NOT NULL,city VARCHAR(50) NOT NULL, phoneNumber VARCHAR(50) NOT NULL, idNumber VARCHAR(50) NOT NULL,active BOOLEAN NOT NULL DEFAULT 1, bookDate DateTime NOT NULL,PRIMARY KEY(id), FOREIGN KEY(idRoom) REFERENCES Rooms(id) ON DELETE CASCADE )";
    if(!mysqli_query($conn,$sql)){
            echo mysqli_error($conn);
        }
   }
}
class Admin{
   function __construct($conn){
     $sql = "CREATE TABLE IF NOT EXISTS admin(id INT AUTO_INCREMENT, firstName VARCHAR(50) NOT NULL,lastName VARCHAR(50) NOT NULL, userName VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, email VARCHAR(40) NOT NULL, phoneNumber VARCHAR(50) NOT NULL, idNumber VARCHAR(50) NOT NULL,PRIMARY KEY(id))";
    if(!mysqli_query($conn,$sql)){
            echo mysqli_error($conn);
        }
        // echo "create";
   }
}
class Category{
    function __construct($conn){
        $sql = "CREATE TABLE IF NOT EXISTS category(id INT NOT NULL AUTO_INCREMENT, categories VARCHAR(50) NOT NULL, beds INT NOT NULL, price INT NOT NULL,PRIMARY KEY(id))";
        if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
            } 

    }
    
}

class Rooms{
   function __construct($conn){
    $sql = "CREATE TABLE IF NOT EXISTS rooms(id INT AUTO_INCREMENT NOT NULL,category INT NOT NULL ,roomCode VARCHAR(10) NOT NULL UNIQUE , PRIMARY KEY(id), FOREIGN KEY (category) REFERENCES category(id) ON DELETE CASCADE )";
    if(!mysqli_query($conn,$sql)){
                echo mysqli_error($conn);
            }

    }
}
$admin = new Admin($conn);
$roomCategory = new Category($conn);
$rooms =  new Rooms($conn);
$customer = new Customer($conn);

mysqli_close($conn);  
?>
</body>
</html>