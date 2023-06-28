<?php
    include("../components/header.php");

    if(!isset($_SESSION)){
        session_start();
        $result = $_SESSION['result'];
    }

    if($result==1){
        echo "<center> <h1 class='mt-3 mb-3'> Registered successfully!! Please go to login screen </h1> </center>";
        echo "<center><a href='/todo/pages/login.php' class='btn btn-outline-primary'>Login</a></center>";
    }
    else{
        echo "Error in register";
    }
?>