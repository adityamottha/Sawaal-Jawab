<div class="container">

<h1 class="heading">Sign-Up</h1>
<form action="./server/request.php" method="post">
  <div class="col-6 offset-sm-3 form-margin15"> 
    <label for="username" class="form-label textBold" >Username:</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter your Username">
     </div>

     <div class="col-6 offset-sm-3 form-margin15"> 
    <label for="email" class="form-label textBold">E-mail:</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email">
     </div>

     <div class="col-6 offset-sm-3 form-margin15"> 
    <label for="password" class="form-label textBold">Password:</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
     </div>

      <div class="col-6 offset-sm-3 form-margin15" > 
    <label for="address" class="form-label textBold">Residential-Address:</label>
    <input type="text" name="address" class="form-control" id="password" placeholder="Enter your address">
     </div>

     <div class="col-6 offset-sm-3 ">
         <button type="submit" name="signup" class="btn btn-primary">Sign-up</button>
     </div>

</form>
</div>