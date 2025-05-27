<div class="container">
    <div class="offset-sm-1">
    <h5 class="headOfAnswer">Answers:</h5>
    <?php
     $selctingAnswerQuery = "SELECT * FROM answer WHERE question_id = $questionId";
     $result = $connection->query($selctingAnswerQuery);

     foreach($result as $row){
        $answer = $row["answer"];
        echo "<div class= 'row'>
        <p class='answerWrapper'>$answer</p>
        </div>";
     }
    ?>
    </div>
</div>