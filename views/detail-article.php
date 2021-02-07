<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
        if ( IS_ADMIN) { ?> 
         <?php ?><link rel= " stylesheet " href= "../public/style.css " > 
        <?php }else?> <?php { echo " ";
         } ?>

        <?php 
        if (!IS_ADMIN) { ?>  
          <?php ?>  <link rel= " stylesheet " href= " public/style.css " > 
        <?php }else?> <?php  { echo '  ' ;
        }?>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Josefin+Slab:wght@500&family=Lora:ital@1&display=swap');
        </style>

        <title>BLOG</title>
    </head>

    <body>

        <nav>
            <ul>
                <li><a class="lien-nav" href="index.php">Retour aux articles</a></li>
                <li><a class="lien-nav" href="views/auteur.php">Information sur l'auteur du bloc</a></li>
                <?php if (IS_ADMIN) { ?> <li><a class="lien-nav" href="?controller=article-add">Créer un article</a>
                </li>
                <li> <a class="lien-nav" href="?controller=article-listReport&id">liste des
                        commentaires signalés</a><?php }?></li>
                <ul>
        </nav>




        <div class="one-article">

            <h3 class="titre-one"><?=$article['title']?><h3>

                    <p class="one-content"><?=$article['content']?> </p>

                    <h2 class="titre-comment">Les commentaires de cet article :</h2><br><br>
                    <?php

foreach ($articles as $com): ?>

                    <time class="date-comment">Article créer le <?=$com->comdate?></time><br>


                    <p class="author-comment"><strong><?=$com->author?> :</strong></p>
                    <article class="comment"><?=$com->comment?></article>&ensp;&ensp;<br>
                    <a class="btn-signaler" href="?controller=article-report&id=<?=$com->comid?>">Signaler
                    </a>&ensp;&ensp;

                    <?php if (IS_ADMIN) { ?><a class="btn-remove"
                        href="?controller=article-delComment&id=<?=$com->comid?>">
                        Supprimer<?php } ?> </a><br><br><br>
                    <?php endforeach?>

                     <?php if (isset($_SESSION['message'])):?>
                  <?echo $_SESSION['message'];
                  $_SESSION['message'] = " L'article a été supprimé avec succés";?>
                  
                 <?php endif?>

                    
        </div>
        <h3 class="titre-addComment">Ajouter un commentaire</h3>


        <form class="form-comment" action="?controller=article-comment&id=<?=$article['id']?>" method="post">

            <label for="pseudo"></label><br>
            <input class="input-pseudo" type=" text" name="pseudo" id="pseudo" placeholder="  Votre pseudo "
                value="<?=$_POST['pseudo'] ?? "" ?>"><br>


            <label for=" texte">
            </label>
            <textarea class="textarea-comment" name=" message" id="message" cols="100" rows="15" class=""
                placeholder=" Poster votre commentaire "><?=$_POST['message'] ?? "" ?> </textarea><br>

                <span class="signaler"></span>

            <button class="btn-sendComment" type="submit" class="" name="submit_message">Envoyer votre
                commentaire</button><br />
        </form><br>
        
    </body>

</html>