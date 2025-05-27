<div class="container">
    <div class="row">
         <div class="col-8">
           <h1 class="heading">Questions</h1>
    <?php
    try{
     include("./database/database.php");

     
$categoryId = $_GET['c-id'] ?? null;
$userId = $_GET['u-id'] ?? null;
$search = $_GET['search'] ?? null;

     if(isset($_GET['c-id'])){
        $query = "SELECT * FROM question WHERE category_id=$categoryId";
     }
     elseif(isset($_GET['u-id'])){
          $query = "SELECT * FROM question WHERE user_id=$userId";
     }
     elseif(isset($_GET['latest'])){
      $query = "SELECT * FROM question ORDER BY id DESC";
     }elseif(isset($_GET['search'])){
      $query = "SELECT * FROM question WHERE `title` LIKE '%$search%'";
     }
     
     else{
       $query = "SELECT * FROM question";
     }
     $result = $connection->query($query);
     foreach ($result as $row) {
        $title = $row['title'];
        $id = $row['id'];
       echo "<div class='row question-item'>
       <h5 class='myQuestion'><a href='?q-id=$id'>$title</a>";
      echo $userId?"<a href='./server/request.php?delete=$id'>Delete</a>":"";
       echo "</h5></div>";
     }
     }catch(Exception $error){
      echo "Error!" .$error->getMessage();
     }
    ?>
    </div>
    <div class="col-4">
    <?php include('categoryList.php'); ?>
    </div>

    </div>
    </div>
