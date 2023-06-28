<?php
    include("../components/header.php");
?>

<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-7 shadow-lg p-3 mb-5 mt-3 bg-white-rounded">
            <h1 class="mb-4">Login</h1>
            <form action="../route/auth.php" method="post">
                <input type="email" name="email" placeholder="Email ID" class="form-control mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control mb-3">
                <input type="submit" value="Login" name='login' class="btn btn-outline-primary mb-3">
                <center>
                    <a href="./signup.php">Don't have an account? Signup</a>
                </center>
            </form>
        </div>
    </div>
</div>