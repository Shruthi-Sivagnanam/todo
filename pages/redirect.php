<?php
    include("../components/header.php");

    if(isset($_SESSION)){
        //session_start();
        $result = $_SESSION['signupResult'];
        //$loginResult = $_SESSION['loginResult'];
    }

    

    if($result==1){
        // echo $result;
        echo "<center> <h1 class='mt-4 mb-3'> Registered successfully!! Please go to login screen </h1> </center>";
        echo "<center><a href='/todo/pages/login.php' class='btn btn-outline-primary'>Login <i class='fa fa-arrow-right'></i></</a></center>";
        $result="";
    }
    else if($result==0){
        // echo $result;
         echo "<center> <h1 class='mt-4 mb-3'> Error in Register!! Please go to Signup screen again </h1> </center>";
        echo "<center><a href='/todo/pages/signup.php' class='btn btn-outline-primary'><i class='fa fa-arrow-left'></i> Signup</a></center>";
    }
?>
<?php
    include("../components/footer.php");
?>