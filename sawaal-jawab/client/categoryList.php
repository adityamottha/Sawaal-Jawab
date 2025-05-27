<div>
    <h1 class="heading">Categories</h1>
    <?php include('./database/database.php');
     $categoryQuery = "SELECT * FROM category";
     $result = $connection->query($categoryQuery);

     foreach($result as $row){
        $id = $row['id'];
       $categoryName = ucfirst($row['name']);
       
       echo "<div class= 'row question-item'>
          <h5><a href='?c-id=$id'>$categoryName</a></h5>
       </div>";
        
     }
    ?>

</div>