<?php ?>

<!doctype html>
<html lang="en">
<?php echo "<link rel='stylesheet' type='text/css' href='./styles/styles.css'/>"; ?>
<?php include('templates/header.php'); ?>

<body>
    <div class="wrapper">
        <h3 class="message">Succesfull signup! </h3>
        <form action="login_form.php">
            <input type="submit" name="submit" value="login">
        </form>
    </div>
</body>

</html>