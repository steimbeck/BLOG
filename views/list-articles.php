<?php

echo "Ceci est ma vue list articles";

foreach($articles as $article):?>
<div>
    
    <a href="?controller=article-detail&id=<?= $article['id']?>">
     <span><?=$article['title'] ?></span>
    </a>
    <article><?=$article['content'] ?></article>
</div>
<?php endforeach ?>