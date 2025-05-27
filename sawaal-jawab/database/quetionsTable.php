<?php
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "sawaaljawabdb";

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connection = new mysqli($serverName, $username, $password, $databaseName);
    
    $sqlQuery = "CREATE TABLE IF NOT EXISTS question(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    description VARCHAR(300),
    category_id INT,
    user_id INT 
    )";

    if($connection->query($sqlQuery)){
        echo "Table Quetion is Created.";
    }else{
        echo "Table Question is not Created";
    }
}catch(Exception $error){
    echo "Opps Error! ".$error->getMessage();
}

 
?>