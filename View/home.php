<?php ob_start() ?> 
<?php foreach ($articles as $article) { ?> 
    <div class="col-md-offset-1 col-md-10">
        <article class="">
            <h2>
                <a href="../public/index.php?route=article&idArt=<?= htmlspecialchars($article['id']);?>" class="chapter">
                    <?= htmlspecialchars($article['title']);?>
                </a>
            </h2>
            <p>
                <?= $article['content']?>
            </p>
            <p>
                <strong>Date d'ajout :</strong> 
                <?= htmlspecialchars($article['created_at']);?>
            </p>
        </article>
    </div>
<?php } ?>


<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>