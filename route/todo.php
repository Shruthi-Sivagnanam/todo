<?php
    require_once('../db/connection.php');
    if(!isset($_SESSION)){
       session_start();
    }

    if(isset($_POST['addTodo'])){

        $des = $_POST['todo'];
        $email = $_SESSION['email'];
        $username = $_SESSION['username'];

        if($des != ""){
            $query = "INSERT INTO todos (email,username,des) VALUES ('$email','$username','$des')";
            $result = mysqli_query($conn,$query);
            $_SESSION['result'] = $result;
            header("location: /todo/pages/home.php");
        }
    }

    if(isset($_POST['deleteTodo'])){
        $id = $_POST['id'];
        $query = "DELETE FROM todos WHERE id='$id'";
        $result = mysqli_query($conn,$query);
        $_SESSION['deleteResult'] = $result;
        //echo $id;
        header("location: /todo/pages/home.php");
    }
?>