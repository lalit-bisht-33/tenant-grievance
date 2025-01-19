<?php
include("../config/db.php");

if (!isset($_SESSION['start_id'])) {
  echo "Session variable 'id_insert' is not set.";
  exit; // Exit if the session variable is not set
}
$user_id=$_SESSION['start_id'];

$sql="INSERT INTO `grievances` (`user_id`, `title`, `description`, `image`, `status`, `priority`, `created_at`, `updated_at`) VALUES ('$user_id', '$title', '$description', '$image', '$status', '$priority', current_timestamp(), current_timestamp())";

if ($conn->query($sql) === TRUE) {
    echo "User grievance information is submitted!!";
    $_SESSION['success_grievance'] = "User grievance information is submitted!!"; 
    header("Location: /php/pages/home.php");
   
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
