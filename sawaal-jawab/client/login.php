<div class="container">

<h1 class="heading">Login</h1>
<form action ="./server/request.php" method="post">

     <div class="col-6 offset-sm-3 form-margin15"> 
    <label for="email" class="form-label textBold">E-mail:</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email">
     </div>

     <div class="col-6 offset-sm-3 form-margin15"> 
    <label for="password" class="form-label textBold">Password:</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
     </div>

     <div class="col-6 offset-sm-3 ">
         <button type="submit" name="login" class="btn btn-primary">Login</button>
     </div>

</form>
</div>