<?php
    require_once("../db/connection.php");

    if(!isset($_SESSION)){
        session_start();
    }

    # for signup
    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];
        
        if(strlen($username)>=3 && strlen($password)>=4 && $password == $cpassword){
            //echo "right";
            $query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
            $result = mysqli_query($conn,$query);
            $_SESSION['signupResult'] = $result;
            header("location: /todo/pages/redirect.php");
            //echo "<script type='text/javascript'>alert('Signed Up successfully! Please login to continue');</script>";

        }
        else{
            echo"wrong";
        }
    }

    // for login
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT username FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$query);

        $data = mysqli_fetch_assoc($result);
        $username = $data['username'];

        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        //$_SESSION['loginResult'] = $result;
        //echo $username;
        header("location: /todo/pages/redirect2.php");
    }

    // for logout
    if(isset($_POST['logout'])){
        $_SESSION['username']='';
        header("location: /todo/");
    }

?>