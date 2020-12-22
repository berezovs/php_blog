<?php ?>

<!doctype html>
<html lang="en">
<?php echo "<link rel='stylesheet' type='text/css' href='./styles/styles.css'/>"; ?>
<?php include('templates/header.php'); ?>

<body>
    <div class="wrapper">
        <h3 class="message">Login failed. Username or password are incorrect</h3>
        <form action="login_form.php">
            <input type="submit" name="submit" value="Back">
        </form>
    </div>
</body>

</html>