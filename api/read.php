<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'royal');
    
    /* Attempt to connect to MySQL database */
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>

<?php
    header("Access-Control-Allow-Origin:*");
    header("Content-Type:application/json");

    $sql = "SELECT * FROM rooms r INNER JOIN category ct ON r.category = ct.id  WHERE r.id NOT IN (SELECT c.idRoom FROM customer c)";
    $results = mysqli_query($conn,$sql);
    $post_arr = array();
    $post_arr['data']= array();
    while($row = mysqli_fetch_assoc($results)){
        extract($row);
        $post_item = array(
            'category' => $category,
            'beds' => $beds,
            'price' => $price,
            'code' => $roomCode

        );

        array_push($post_arr['data'],$post_item);
    }

   echo json_encode($post_arr);

?>