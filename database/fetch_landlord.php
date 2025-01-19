<?php
include("../config/db.php");

$tenant_id=$_SESSION['start_id'];

$sql = "SELECT * FROM `landlords` WHERE `landlord_id` = (SELECT `landlord_id` FROM `properties` WHERE `tenant_id` = '$tenant_id')";

$result = $conn->query($sql);

if ($result === false) {
    echo "Error in query execution: " . $conn->error;
} else {
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    $_SESSION['landlord_name'] = $user['name'];
    $_SESSION['landlord_email'] = $user['email'];
    $_SESSION['landlord_phone'] = $user['phone'];
    $_SESSION['landlord_address'] = $user['address'];
    
   
} else {

    echo "landlord information fail to fetch!!";
}
}

?>