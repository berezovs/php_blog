

<!doctype html>
<html lang="en">
<body>
    <div class="wrapper">

        <form autocomplete="off" action="signup.php" method="POST">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" class="textbox">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" class="textbox">
            <label for="username">Username</label>
            <input type="text" name="username" class="textbox" value="username">
            <label for="email">Email</label>
            <input type="email" name="email" class="textbox">
            <label for="password">Password</label>
            <input type="password" name="password" class="textbox" value="" minlength="8" value="" required>
            <input type="submit" name="submit" value="submit">
        </form>
</body>

</html>