<?php
    include("../components/header.php");
?>

<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-7 shadow-lg p-3 mb-5 mt-3 bg-white-rounded">
            <h1 class="mb-4">Signup</h1>
            <form action="" method="post">
                <input type="email" name="" placeholder="Email ID" class="form-control mb-3">
                <input type="text" placeholder="Username" name="" class="form-control mb-3">
                <input type="password" name="" placeholder="Password" class="form-control mb-3">
                <input type="password" name="" placeholder="Confirm Password" class="form-control mb-3">
                <input type="submit" value="Signup" class="btn btn-outline-primary mb-3">
                <center>
                    <a href="./login.php">Do you have an account? Login</a>
                </center>
            </form>
        </div>
    </div>
</div>