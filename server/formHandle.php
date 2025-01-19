<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['signup'])){
        
        $username=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        include("../database/insert.php");
      
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;


    }

    else if(isset($_POST['login'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        include("../database/fetch_login.php");
       
        header("Location: /php/pages/home.php");
    }
   
}


?>