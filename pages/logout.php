<?php
    include("../components/header.php");
?>

<div>
    <form action="../route/auth.php" method="post">
        <center>
            <h1>Do you want to logout?</h1>
            <input type="submit" value="Logout" name="logout" class="btn btn-outline-primary">
        </center>
    </form>
</div>

<?php
    include("../components/footer.php");
?>