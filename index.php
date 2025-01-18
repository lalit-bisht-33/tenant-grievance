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

    if(isset($_GET['signup'])){
    include("./pages/signup.php");
    }
    
    if(isset($_GET['login'])){
    include("./pages/login.php");
    }
    ?>
</body>
</html>