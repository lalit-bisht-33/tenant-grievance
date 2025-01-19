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


    $_SESSION['start_id'] = $user['id'];
    $_SESSION['created_time'] = $user['created_at'];
    $_SESSION['contact'] = $user['mobile'];

    // echo "setted!!";
    
    
   
} else {
    // If login fails
    echo "Invalid username, email, or password.";
}
}

?>