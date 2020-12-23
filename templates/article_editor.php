<div class="wrapper">
    <section>
        <form action="update_article.php" method="POST" class="article_options">
            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php echo $_SESSION["articles"][$article_id]["title"];?>" />
            <input type="hidden" name="article_id" value="<?php echo $article_id ?>" />
            <label for="editor">Editor:</label>
            <textarea name="editor" cols="30" rows="30"><?php print_r($_SESSION["articles"][$article_id]["article"]); ?></textarea>
            <input type="submit" name="submit" value="Submit Changes" />
        </form>
    </section>
</div>