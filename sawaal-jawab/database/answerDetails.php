<?php
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "sawaaljawabdb";
 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connection = mysqli_connect($serverName,$username,$password,$databaseName);
       
    $insertTable = "CREATE TABLE IF NOT EXISTS answer(
    id INT AUTO_INCREMENT PRIMARY KEY,
    answer VARCHAR(300),
    question_id INT,
    user_id INT
    )";
    
    if($connection->query($insertTable)){
        echo "Answer Table is created.";
    }else{
        echo "Answer Table is not created!";
    }
}catch(mysqli_sql_exception $Error){
    echo "Error!".$Error->getMessage();
}
?>