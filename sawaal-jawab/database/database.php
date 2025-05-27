<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "sawaaljawabdb";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connection = mysqli_connect($serverName,$userName,$password,$databaseName);
    // echo "Database is connected <br>";

    $sql = "CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    password VARCHAR(100),
    address VARCHAR(255)
    )";
    
    if($connection->query($sql)){
        // echo "Table is created <br>";
    }else{
        // echo "Table is not created <br>";
    }

}catch(mysqli_sql_exception $error){
    // echo "Database is not connected <br>".$error->getMessage();
}
?>