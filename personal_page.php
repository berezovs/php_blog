<?php
session_start();
include("config/db.config.php");
$user = $article = $errors = array();
$articles = array();
if (isset($_SESSION["login_id"])) {
    if (isset($_GET["id"]) && $_SESSION["login_id"] == $_GET["id"]) {
        $id = mysqli_real_escape_string($conn, $_GET["id"]);
        $user_sql = "SELECT * FROM user WHERE id = '{$id}';";
        $article_sql = "SELECT article.article, article.title, article.article_id FROM article WHERE person_id='{$id}'";

        $author_result =  mysqli_query($conn, $user_sql);
        $article_result = mysqli_query($conn, $article_sql);

        if ($author_result->num_rows == 0) {
            $errors["user"] = "Could not find user";
        } else {
            $user = mysqli_fetch_assoc($author_result);
        }
        if ($article_result->num_rows == 0) {
            $errors["article"] = "No articles to display";
        } else {
            $articles = mysqli_fetch_all($article_result, MYSQLI_ASSOC);
        }
    } else {
        $errors["article"] = "Not authorized to view this page";
    }
} else {
    $errors["article"] = "Not authorized to view this page";
}
?>

<!doctype html>
<html lang="en">

<?php include('templates/header.php'); ?>

<body>
    <div class="wrapper">
        <?php include('templates/article_preview.php'); ?>
    </div>
</body>

</html>