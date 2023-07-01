<?php

    require_once("../db/connection.php");

    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    $query = "SELECT * FROM todos WHERE username='$username' AND email='$email'";
    $data = mysqli_query($conn,$query);
    while($todoData = mysqli_fetch_assoc($data)){
        $des = $todoData['des'];
        $id = $todoData['id'];
    ?>
    <div class='row justify-content-center'>
        <div class='col-md-5 shadow-lg bg-white-rounded p-3 mb-3'>
            <div class='row'>
                <div class='col-sm-10'>
                    <p><?php echo $des; ?></p>
                </div>
                <div class='col-sm-2 justify-content-right'>
                    <form action="../route/todo.php" method="post">
                        <input type="hidden" name="id" value=<?php echo $id;?>>
                        <button type="submit" name='deleteTodo' class="btn btn-outline-danger">
                            <i class='fa fa-trash-o'></i>
                        </button>
                        <?php $_SESSION['id'] = $todoData['id'] ;?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
?>

