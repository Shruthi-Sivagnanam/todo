<?php

    include("../components/header.php");

    if(isset($_SESSION)){
        if(!($_SESSION['username'] && $_SESSION['email'])){
            header("location: /todo/");
        }
    }

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 shadow-lg mb-5 p-3 bg-white-rounded">
            <h1 class="text-center">Add a Todo</h1>
            <form action="../route/todo.php" method="post">
                <textarea name="todo" cols="30" rows="5" class="form-control mt-5" placeholder="Enter your todo"></textarea>
                <center>
                    <input type="submit" value="Submit" name="addTodo" class="btn btn-outline-primary mt-4 mb-3">
                </center>
            </form>
        </div>
    </div>
</div>