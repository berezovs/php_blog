<?php
    unset($_SESSION["login_id"]);
    session_destroy();
    header("Location: index.php");
?>