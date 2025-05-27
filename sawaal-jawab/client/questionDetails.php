<div class="container">
    <div class="row">
    <div class="col-8">
        <h1 class="heading">Question</h1>
    <?php
    include("./database/database.php");
    $selectQuery = "SELECT * FROM question WHERE id = $questionId";
    $result = $connection->query($selectQuery);
   $row = $result->fetch_assoc();
   $categoryId = $row['category_id'];
   echo "<h4 class='form-margin15 questionTitle'>Question : ".$row['title']."</h4>
   <p class='form-margin15 Dectext'>".$row['description']."</p>";
   include("answers.php");
    ?>
   <form action="./server/request.php" method="POST">
    <input type="hidden" name="question_id" value="<?php echo $questionId ?>">
    
    <textarea class="form-control form-margin15" name="answer" placeholder="Type your Answer..."></textarea>
    
    <button class="btn btn-primary form-margin15">Post</button>
</form>
    </div>
    <div class="col-4">
        <?php
        $categoryQuery = "SELECT name FROM category WHERE id = $categoryId";
         $categoryResult = $connection->query($categoryQuery);
         $categoryRow = $categoryResult->fetch_assoc();
         echo "<h1 class='heading'>".ucfirst($categoryRow['name'])."</h1>";

$queryForQuestionRelatedToCategory = "SELECT * FROM question WHERE category_id = $categoryId AND id!=$questionId";
$result = $connection->query($queryForQuestionRelatedToCategory);

foreach ($result as $row) {
    $questionId = $row['id'];
    $questionTitle = $row['title'];

  echo "<div class='row question-item'>
        <h5><a href='?q-id=$questionId'>$questionTitle</a></h5> 
         </div>";
}
?>

    </div>
    </div>
</div>