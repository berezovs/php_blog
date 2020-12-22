<section>
    <?php if ($articles != null) {
        foreach ($articles as $article) {
    ?>
            <div class="article">
                <h1 class="title"><?php echo $article["title"] ?></h1>
                <p class="preview"><?php echo substr($article["article"], 0, 800) ?></p>
            </div>
            <div class="article-options">
                <form method="POST" action="article_options.php">
                    <input type="hidden" name="article_id" value = "<?php echo $article['article_id'];?>" />
                    <input type="submit" value="Edit" name="edit" />
                    <input type="submit" value="Delete" name="delete" />
                </form>
            </div>
        <?php }
    } else { ?>
        <h3 class="error"><?php echo $errors["article"] ?></h3>
    <?php } ?>
</section>