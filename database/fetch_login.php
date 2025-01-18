<?php
include("../config/db.php");

$sql="SELECT * FROM `users` WHERE `username`= '$username' AND `email`= '$email' AND `password` = '$password'";

$result = $conn->query($sql);

if ($result === false) {
    // Query failed, output the error
    echo "Error in query execution: " . $conn->error;
} else {
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();


    $_SESSION['username'] = $user['username'];
    $_SESSION['password'] = $user['password'];

    echo "Username is " . $_SESSION['username']."<br>";
    echo "Password is " . $_SESSION['password'];
    
    
    header("Location: /php");
    exit();
} else {
    // If login fails
    echo "Invalid username, email, or password.";
}
}

?>