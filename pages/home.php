<?php
    include("../components/header.php");
    if(isset($_SESSION)){
        if(!($_SESSION['username'] && $_SESSION['email'])){
        header("location: /todo/");
        }
    }
?>

<div class="container">


    <?php
    if($_SESSION['result']){
            echo"
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            Added Successfully!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        $_SESSION['result']="";
        }
    else if($_SESSION['result'] == 0){
        echo"
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Error in adding!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        $_SESSION['result']=-1;
    }
    else if($_SESSION['deleteResult']){
        echo"
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            Deleted Successfully!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        $_SESSION['deleteResult']="";
    }
    else if($_SESSION['deleteResult']==0){
        echo"
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Error in deleting
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        $_SESSION['deleteResult']="";
    }
    ?>


    <div class="row justify-content-center">
        <div class="col-md-5 shadow-lg bg-white-rounded p-3 mb-5 mt-3">
            <a href="/todo/pages/addtodo.php" class="btn btn-outline-success"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <?php include("../components/todoelement.php"); ?>
</div>
<div class="mb-5"></div>
<div class="mb-5"></div>
<div class="mb-5"></div>

<div class="mb-5"></div>
<div class="mb-5"></div>
<div class="mb-5"></div>

<?php
    include("../components/footer.php");
?>