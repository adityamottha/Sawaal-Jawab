<select class="form-control" name="category" id="category">
    <option value="">Select A Category</option>
    <?php
      include("./database/categoryTable.php");
      $queryForInsertinOptions = "SELECT * FROM category";
      $results = $connection->query($queryForInsertinOptions);

      foreach($results as $result){
        $id = $result['id'];
        $name = ucfirst($result['name']);
  
        echo "<option value=$id>$name</option>";
      }


    ?>
</select>