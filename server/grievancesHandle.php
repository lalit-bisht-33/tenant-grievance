<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['grievance'])){

        $title=$_POST['title'];
        $description=$_POST['description'];
        $image=$_POST['image'];
        $status=$_POST['status'];
        $priority=$_POST['priority'];
       

        include("../database/insert_grievances.php");

    }
}
?>