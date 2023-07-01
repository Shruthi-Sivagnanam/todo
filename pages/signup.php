<?php
    include("../components/header.php");
    if(isset($_SESSION)){
        if($_SESSION['username'] && $_SESSION['email']){
            header("location: /todo/pages/home.php");
        }
    }
?>

<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-7 shadow-lg p-3 mb-5 mt-3 bg-white-rounded">
            <h1 class="mb-4">Signup</h1>
            <form action="../route/auth.php" method="post">
                <input type="email" name="email" placeholder="Email ID" class="form-control mb-3">
                <input type="text" placeholder="Username" name="username" class="form-control mb-3">
                <input type="password" name="pass" placeholder="Password" class="form-control mb-3">
                <input type="password" name="cpass" placeholder="Confirm Password" class="form-control mb-3">
                <input type="submit" value="Signup" name="signup" class="btn btn-outline-primary mb-3">
                <center>
                    <a href="./login.php">Do you have an account? Login</a>
                </center>
            </form>
        </div>
    </div>
</div>
<?php
    include("../components/footer.php");
?>