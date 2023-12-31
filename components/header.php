<?php
  //error_reporting(0);
  if(!isset($_SESSION)){
    session_start();
    $username='';
    if($_SESSION['username'])
      $username = $_SESSION['username'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="min-height: 100vh">
<nav class="navbar navbar-expand-lg navbar-light shadow-lg p-3 mb-3 bg-white-rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="/todo/">Todo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <?php
            if($username)
              echo "<a class='nav-link' href='/todo/pages/home.php'>$username</a></li>";
            else  
              echo "<a class='nav-link' href='/todo/'>Home</a></li>";
            ?>
        </li>
        <li class="nav-item">
          <?php
        if($username){
          echo "<a class='nav-link' href='/todo/pages/logout.php'>Logout</a></li>";
        }
        else{
          echo "<a class='nav-link' href='/todo/pages/login.php'>Login</a>";
        }
        ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>