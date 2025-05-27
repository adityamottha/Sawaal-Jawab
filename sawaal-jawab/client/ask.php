<div class="container">

<h1 class="heading">Ask A Question</h1>
<form action ="./server/request.php" method="post">

     <div class="col-6 offset-sm-3 form-margin15"> 
    <label for="title" class="form-label textBold">Title:</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter your Question">
     </div>

       <div class="col-6 offset-sm-3 form-margin15"> 
    <label for="description" class="form-label textBold">Description:</label>
    <textarea name="description" class="form-control" id="description" placeholder="Type the Description"></textarea> 
     </div>

     <div class="col-6 offset-sm-3 form-margin15">
      <label for="category" class="form-label textBold">Category:</label>
      <?php 
      include("category.php");
      ?>
     </div>

     <div class="col-6 offset-sm-3 ">
         <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
     </div>

</form>
</div>