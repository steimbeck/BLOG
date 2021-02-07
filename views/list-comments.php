<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/style.css">
        <title>Blog-MVC</title>
    </head>

    <body>


        <nav>
            <ul>
                <li><a class=" lien-nav" href="index.php">Retour aux articles</a></li>
                <li><a class="lien-nav" href="../views/auteur.php">Information sur l'auteur du blog</a></li>
                <?php if (IS_ADMIN) { ?> <li><a class="lien-nav" href="?controller=article-add&id">Créer un article</a>
                </li>
                <li> <a class="lien-nav" href="?controller=article-listReport&id">liste des
                        commentaires signalés</a><?php }?></li>
                <ul>
        </nav>
        <h2 class="titre-report"> Les commentaires signalés : </h2>
        <?php

 
foreach ($comments as $com): ?>
        <div class="report">
            <p class="report-number">Article numéro : <?=$com->ticketid?></p>
            <p class="report-number">Commentaire numéro: <?=$com->comid?></p><br>
            <time class="date-made">Créer le <?=$com->comdate?></time><br><br>
            <strong class="author-report"><?=$com->author?> : </strong>
            <article class="article-report"><?=$com->comment?></article>
            <a class="btn-report" href="?controller=article-delComment&id=<?=$com->comid?>">Supprimer</a>
            <br><br>
        </div>
        <hr>

        <?php endforeach?>

    </body>

</html>