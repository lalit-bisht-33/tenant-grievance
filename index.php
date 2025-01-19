<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tenant</title>
    <?php
    include("./config/links.php");
    ?>
</head>
<body>
    <?php
    include("./components/navbar.php");
    // include("./config/db.php");

    if(isset($_GET['signup'])&& !isset($_SESSION['username']) && !isset($_SESSION['password'])){
    include("./pages/signup.php");
    }
    
    if(isset($_GET['login']) && !isset($_SESSION['username']) && !isset($_SESSION['password'])){
    include("./pages/login.php");
    }

    // if (!isset($_GET['signup']) && !isset($_GET['login'])) {
    //     echo "hello ji";
    //     include("./pages/home.php");
    // } 


    ?>
</body>
</html>