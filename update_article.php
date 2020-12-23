<?php
include("config/db.config.php");
session_start();
$message_type = $message = $url = '';
if (isset($_POST["submit"])) {
    $title = htmlspecialchars($_POST["title"]);
    $article = htmlspecialchars($_POST["editor"]);
    $article_id = htmlspecialchars($_POST["article_id"]);

    $update_query = "UPDATE article SET title = '$title', article = '$article' WHERE article_id = '$article_id';";
    $result = mysqli_query($conn, $update_query);
}
if ($result === TRUE) {
    $message_type = "message";
    $message = "Article updated";

    echo $url;
} else {
    $message_type = "error";
    $message = "Article could not be updated";
}
$url = "personal_page.php?id=" . $_SESSION["login_id"];
?>

<!doctype html>
<html lang="en">
<?php include("templates/header.php"); ?>

<body>
    <div class="wrapper">
        <h3 class=<?php echo $message_type ?>><?php echo $message ?></h3>
        <form method="POST" action="<?php echo $url ?>">
            <input type="submit" name="submit" value="Back" />
        </form>
    </div>
</body>

</html>