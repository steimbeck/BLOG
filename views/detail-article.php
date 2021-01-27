<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../public/blog.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
           integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
       
        <title>BLOG</title>
    </head>

    <body class="bg-secondary">
        <div < class="container">
            
        
        <div class="row">
            <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark">
                <div class="nav navbar-nav">

                    <a class=" nav-item nav-link" href="index.php">Retour aux articles</a>
                    <a class="nav-item nav-link" href="views/auteur.php">Information sur l'auteur du bloc</a>

                    <?php if (IS_ADMIN) { ?> <a class="nav-item nav-link" href="?controller=article-add">Créer un
                        article</a>
                    <a class="nav-item nav-link" href="?controller=article-listReport&id">liste des
                        commentaires signalés</a><?php }?>
                </div>
        </div>

        </nav>
                    </div><br><br>
<div class="container">
    <div>
        <h4><span><?=$article['title']?></span>
            <h4>
                <p><?=$article['content']?> </p>
    </div>
    <h3>Les commentaires de cet article :</h3><br>
    <?php

foreach ($articles as $com): ?>
    <time>Article créer le <?=$com->comdate?></time><br><br>

    <strong><?=$com->author?></strong> : <?=$com->comment?> - <a class="btn btn-blog pull-right marginBottom10"
        role="button" href="?controller=article-report&id=<?=$com->comid?>">Signaler </a> - <a
        class="btn btn-blog pull-right marginBottom10" role="button"
        href="?controller=article-delComment&id=<?=$com->comid?>"><?php if ('$admin') { ?>
        <button>Supprimer</button><?php } ?> </a><br><br>

    <?php endforeach?>
<h4>Ajouter un commentaire</h4>

    <form class="form-group" action="?controller=article-comment&id=<?=$article['id']?>" method="post">
        <div class="form-group">
            <label for="pseudo"></label><br>
            <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
        </div>
        <div class="form-group">
            <label for="texte">
                </label>
            <textarea name="message" id="message" cols="30" rows="3" class="form-control col-md-6"
                placeholder="Poster votre commentaire"></textarea>
        </div><br>

        <button type="submit" class="btn btn-info" name="submit_message">Envoyer votre commentaire</button><br />
    </form>
</div>
<?php
if (isset($message)) {
    echo $message;
}
?>