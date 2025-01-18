<?php
include("../config/db.php");

$id=0;
$id++;

$sql="INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `password`, `role_id`, `created_at`, `updated_at`) VALUES ('$id', '$username', '$email', '$mobile', '$password', '1', current_timestamp(), current_timestamp())";


if ($conn->query($sql) === TRUE) {
    echo "$username"."<br>";
    echo "$email"."<br>";
    echo "$mobile"."<br>";
    echo "$password"."<br>";
    echo "User information is signed up!!";

    header("Location : /php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
