<?php

include("config/db.config.php")
?>

<!doctype html>

<html lang="en">

<?php include('templates/header.php'); ?>

<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" class="textbox">
            <label for="password">Password</label>
            <input type="password" name="password" class="textbox" value="" minlength="8" placeholder="" required>
            <input type="submit" name="submit" value="submit"/>
        </form>
    </div>
</body>

</html>