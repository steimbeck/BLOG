<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../public/blog.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato:ital@0;1&family=Pacifico&family=Potta+One&family=Ubuntu&display=swap');
        </style>
        <title>BLOG</title>
    </head>

    <body>

        <nav>
            <ul>
                <li><a class="lien-nav" href="index.php">Retour aux articles</a></li>
                <li><a class="lien-nav" href="views/auteur.php">Information sur l'auteur du bloc</a></li>
                <?php if (IS_ADMIN) { ?> <li><a class="lien-nav" href="?controller=article-add">Créer un article</a></li>
                <li> <a class="lien-nav" href="?controller=article-listReport&id">liste des
                        commentaires signalés</a><?php }?></li>
                <ul>
        </nav>

        
            <div class="text-center mt-5 pt-5">

                <h1>Bienvenue sur mon blog livre</h1>
                <br>
                <h2><strong>Billet simple pour L'Alaska</strong></h2>
            </div>
        </main>
        <div class="container">
            <?php



foreach($articles as $article):?>
            <div><br>

                <h3 class="titre-article"><a class="lien-article" href="?controller=article-detail&id=<?=$article['id']?>">
                        <span><?=$article['title'] ?></span>
                    </a></h3><br>

                <article><?=$article['content'] ?></article><br><br>
                <?php if (IS_ADMIN) { ?><button class="btn-modif"><a class="lien-modif"
                    href="?controller=article-update&id=<?=$article['id']?>">Modifier</a></button>&ensp;

                <button class="btn-supprimer"><a class="lien-supprimer"
                    href="?controller=article-del&id=<?=$article['id']?>">Supprimer</a></button><?php }?>
                <hr />

            </div>
            <?php endforeach ?>