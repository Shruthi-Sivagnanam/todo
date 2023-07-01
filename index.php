<?php 
    include("./components/header.php");

    if(isset($_SESSION)){
        if($_SESSION['username'] && $_SESSION['email']){
            header("location: /todo/pages/home.php");
        }
    }
?>

<div class="container">
    <div class="row align-items-center text-center"  style="min-height: 80vh">
        <div class="col-md-12">
            <h1 class="mb-3">Plan Your Activity with Us ....</h1>
            <a 
                href="./pages/signup.php" 
                class="btn btn-outline-primary btn-md" 
                role="button" aria-pressed="true"
                >
                Get Started
                <i class="fa fa-arrow-right"></i>
            </a>

        </div>
    </div>
</div>
<?php
    include("./components/footer.php");
?>