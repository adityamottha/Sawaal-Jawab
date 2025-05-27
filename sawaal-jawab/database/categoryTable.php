<?php
$serverName = "localhost";
$username = "root";
$password = "";
$database = "sawaaljawabdb";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connection = new mysqli($serverName, $username, $password, $database);

    $sql = "CREATE TABLE IF NOT EXISTS category(
    id INT PRIMARY KEY, 
    name VARCHAR(100)
    )";

    if($connection->query($sql)){
        // echo "Table is created.";
    }else{
        // echo "Table is not created!";
    }

  $InsertCategory = "INSERT INTO category (id, name) VALUES
        (1, 'mobile'),
        (2, 'laptop'),
        (3, 'food'),
        (4, 'coding'),
        (5,'general')";

    if($connection->query( $InsertCategory)){
        echo "data inserted succsessfully.";
    }else {
        echo " data is not inserted!";
    }
}catch(mysqli_sql_exception $error){
    // echo "database is not connected!".$error->getMessage();
}
?>