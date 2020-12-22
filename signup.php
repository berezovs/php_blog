<?php
include("config/db.config.php");
$first_name = $last_name = $username = $email = $password = '';
$signupSuccessful = true;
if (isset($_POST['submit'])) {
    if (empty($_POST['username'])) {
        echo "Username is requred";
    } else {
        $username = htmlspecialchars($_POST["username"]);
    }
    if (empty($_POST['password'])) {
        echo "Password is required";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }
    if (empty($_POST['email'])) {
        echo "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
    if (empty($_POST['first_name'])) {
        echo "First name is requred";
    } else {
        $first_name = htmlspecialchars($_POST["first_name"]);
    }
    if (empty($_POST['last_name'])) {
        echo "Last Name is requred";
    } else {
        $last_name = htmlspecialchars($_POST["last_name"]);
    }
}

$check_availability = "SELECT 1 FROM user WHERE user_name='{$username}' OR email='{$email}';";
$result = mysqli_query($conn, $check_availability);

if (mysqli_num_rows($result) == 0) {
    $create_new_user_sql = "INSERT INTO user VALUES(default,'{$first_name}', '{$last_name}', '{$email}', '{$username}', '{$password}', default);";
    mysqli_query($conn, $create_new_user_sql);
    header("Location: signup_succesful.php");
} else {
    header("Location: signup_failed.php");
}

mysqli_free_result($result);
mysqli_close($conn);
?>