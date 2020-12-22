<section>
    <?php if ($articles != null) {
        foreach ($articles as $article) {
    ?>
            <div class="article">
                <h1 class="title"><?php echo $article["title"] ?></h1>
                <p class="preview"><?php echo substr($article["article"], 0, 800) ?></p>
            </div>
        <?php }
    } else { ?>
        <h3 class="error"><?php echo $errors["article"] ?></h3>
    <?php } ?>
</section>