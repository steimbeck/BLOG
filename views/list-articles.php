<?php

echo "Ceci est ma vue list articles";

foreach($articles as $article) {
    ?>
<div>
    <a href="?controller=article-detail&id=<?= $article->id; ?>">
        <span><?= $article->title; ?></span>
    </a>
    <p><?= $article->content; ?></p>
</div>
<?php

}
