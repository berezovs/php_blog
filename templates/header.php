<head>
    <?php echo "<link rel='stylesheet' type='text/css' href='./styles/styles.css?v=<?php echo time(); ?>'/>";
    ?>
    <div class="header">
        <title>Personal Pages</title>
        <meta charset="utf-8">
        <h2>Personal Pages</h2>
         <?php if (isset($_SESSION["login_id"])) {
                    echo'<a href="logout.php" class="logout">Logout</a>';
                } else {
                    echo '<a href="login_form.php" class="login">Login</a>';
                } ?> 
    </div>
</head>