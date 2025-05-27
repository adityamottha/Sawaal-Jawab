<?php
session_start();
include("../database/database.php");
// signin part 
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $address = $_POST['address'];

    try {
        $user = $connection->prepare("INSERT INTO `users`(`username`, `email`, `password`, `address`) VALUES (?, ?, ?, ?)");

        $user->bind_param("ssss", $username, $email, $password, $address);
        $result = $user->execute();

       $user->insert_id;

        if ($result) {
            $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
            header('Location: ../index.php');
            exit();
        } else {
            // echo "User not registered!";
        }

        $user->close();
    } catch (Exception $error) {
        echo "Oops! Error: " . $error->getMessage();
    }
}
//  login part 
elseif (isset($_POST['login'])) {
  $email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $username = "";
  $user_id = 0;
try{
 $sql = "SELECT * FROM users WHERE email = '$email'";
$result = $connection->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($_POST['password'], $row['password'])) {
        // Login successful
    }

    foreach($result as $row){
        $username = $row['username'];
        $user_id = $row['id'];
    }
    $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user_id] ;
    header('Location: ../index.php');
    exit();
 }else {
    echo "user not register!";
 }
}catch(Exception $error){
    echo"Opps Error! " .$error->getMessage();
}
}
//  This is the part for logout 
elseif (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: ../index.php');
    exit();
}

// this is for questions 


elseif(isset($_POST['ask'])){

     $title = $_POST['title'];
    $description = $_POST['description'];
   $category_id = $_POST['category'];
    $userId =  $_SESSION['user']['user_id'];

    try {
        $question = $connection->prepare("INSERT INTO `question`(`title`, `description`, `category_id`, `user_id`) VALUES (?, ?, ?, ?)");

        $question->bind_param("ssii", $title, $description, $category_id, $userId);
        $result = $question->execute();

       $question->insert_id;

        if ($result) {
            header('Location: ../index.php');
            exit();
        } else {
            echo "Question not insert into database!";
        }

        $question->close();
    } catch (Exception $error) {
        echo "Oops! Error: " . $error->getMessage();
    }
    // this is the answer section 
}elseif (isset($_POST['answer'])) {
   
     $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $userId =  $_SESSION['user']['user_id'];

    try {
        $answerQuery = $connection->prepare("INSERT INTO `answer`(`answer`, `question_id`,  `user_id`) VALUES (?, ?, ?)");

        $answerQuery->bind_param("sii", $answer, $question_id, $userId);
        $result = $answerQuery->execute();

        if ($result) {
            header("Location: ../index.php?q-id=$question_id");
            exit();
        } else {
            echo "Answer not insert into database!";
        }

        $answerQuery->close();
    } catch (Exception $error) {
        echo "Oops! Error: " . $error->getMessage();
    }
   
}elseif(isset($_GET['delete'])){
  echo  $question_id = $_GET['delete'];
    $query = $connection->prepare("DELETE FROM question WHERE id = $question_id");
    $result = $query->execute();
    if($result){
        header('Location: ../index.php');
    }else{
        echo "Question is not deleted";
    }
}


?>