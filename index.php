<?php
include("config/db.config.php");

$sql = 'SELECT id, first_name, last_name FROM user';
$result = mysqli_query($conn, $sql);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<body>
    <?php include('signup_form.php'); ?>
</body>

</html>