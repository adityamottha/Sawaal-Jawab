<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
<a href="./"><img  src="./public/imgQuetions.avif" class="rounded-circle imgLogo" width="50" height="50"></a>

    <a href="./"><h1 class="logoText">Sawaal-jawab</h1></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse headerText" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link active" href="./">Home</a>
        </li>

         <?php if(isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/request.php?logout=true">Logout(<?php echo ucfirst($_SESSION['user']['username']);?>)</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Quetion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'];?>">My Questions</a>
          </li>
         <?php } ?>

  <li class="nav-item">
          <?php if(!isset($_SESSION['user'] ['username'])) {?>
<a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Sign-up</a>
            <?php } ?>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
      </ul>

      <form class="d-flex" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Search questions" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>