<?php
session_start();
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid  gap-5">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav px-4 gap-5">
        <li class="nav-item">
          <a class="nav-link"  href="./">Home</a>
        </li>

        <?php 
        if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
        ?>

        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>

        <?php } 
         else{
        ?>
        
        <li class="nav-item">
          <a class="nav-link" href="server/formHandle.php?logout=true">Logout</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>