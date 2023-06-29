<?php
    include("../components/header.php");

    if(isset($_SESSION)){
       $username = $_SESSION['username'];
       $email = $_SESSION['email'];
    }

    if(!($username && $email)){
        echo "<center> <h1 class='mt-4 mb-3'> Unsuccessfull Login!! No such User</h1> </center>";
        echo "<center><a href='/todo/pages/login.php' class='btn btn-outline-primary'><i class='fa fa-arrow-left'></i> Login</</a></center>";
    }
    else if($username && $email){
        header("location: /todo/pages/home.php");
    }
?>