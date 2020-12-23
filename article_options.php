<?php
include("config/db.config.php");
$article_id = '-1';
session_start();
if (isset($_SESSION["login_id"])) {
    $article_id = mysqli_escape_string($conn, $_POST['article_id']);
    if (isset($_POST['delete'])) {
        $delete_article_sql = "DELETE FROM article WHERE article_id = $article_id;";
        mysqli_query($conn, $delete_article_sql);
        header("Location: personal_page.php?id={$_SESSION["login_id"]}");
    } 
}
?>
<!doctype html>
<html lang="en">
<?php include("templates/header.php"); ?>

<body>
    <?php include('templates/article_editor.php'); ?>
</body>

</html>
