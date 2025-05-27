<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sawaal-Jawab</title>
  <?php include('./client/commonFiles.php')?>
</head>
<body>
  <?php 
  try{
  session_start();
  include('./client/header.php');

  $notShowSignIn = !isset($_SESSION['user']['username']);
  $notShowLogIn = !isset($_SESSION['user']['username']);

  
  if(isset($_GET['signup']) && $notShowSignIn){
    include('./client/signup.php');
  }
   elseif(isset($_GET['login']) && $notShowLogIn){
    include('./client/login.php');
  }
  
  elseif(isset($_GET['ask'])){
    include("./client/ask.php");
  }
    elseif(isset($_GET['q-id'])){
       $questionId = $_GET['q-id'];
    include("./client/questionDetails.php");
   }
   elseif(isset($_GET['c-id'])){
    $categoryId = $_GET['c-id'];
    include('./client/questions.php');
   }
   elseif(isset($_GET['u-id'])){
     $userId = $_GET['u-id'];
     include('./client/questions.php');
   }
   elseif(isset($_POST['latest'])){
    include('./client/questions.php');
   }
   elseif(isset($_GET['search'])){
    $search = $_GET['search'];
    include('./client/questions.php');
   }
  else{
    include('./client/questions.php');
  }
 }catch(Exception $Error){
    echo "ERROR ".$Error->getMessage();
  }
  ?>
</body>
</html>