<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white bg-primary">
  <div class="container-fluid gap-5">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav px-4 gap-5">
        <?php if (isset($_SESSION['username']) && isset($_SESSION['password'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="/php/pages/home.php">Home</a>
          </li>
        <?php } ?>
        <?php if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="/php">Get Started</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="/php/pages/home.php?logout=true">Logout</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
