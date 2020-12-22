<?php

session_start();
include("config/db.config.php");

$username = $password = $id='';
if (isset($_POST['submit'])) {

    if (empty($_POST['username'])) {
        echo "Username is required";
    } else {
        $username = htmlspecialchars($_POST["username"]);
    }
    if (empty($_POST['password'])) {
        echo "Password is requred";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }
}


$sql = "SELECT * FROM user WHERE user_name = '{$username}' AND password = '{$password}';";


$result = mysqli_query($conn, $sql);
if ($result->num_rows == 0) {
    header("Location: login_failed.php");
} else {
    $user = mysqli_fetch_assoc($result);
    $id = $user["id"];
    $_SESSION["login_id"] = $id;
    header("Location: personal_page.php?id={$id}");
}
mysqli_free_result($result);
mysqli_close($conn);

?>
