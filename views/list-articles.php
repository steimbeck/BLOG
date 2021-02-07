<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php 
        if ( IS_ADMIN) { ?>
      
      <link rel= " stylesheet " href = "../public/style.css " >
      <?php }else?> <?php { echo " ";
         } ?>

      <?php 
        if (!IS_ADMIN) { ?>
      
      <link rel=" stylesheet " href= " public/style.css ">
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
                <li><a class=" lien-nav" href="index.php">Retour aux articles</a></li>
                <li><a class="lien-nav" href="?controller=article-auteur&id.php">Information sur l'auteur du blog</a>
                </li>
                <?php if (IS_ADMIN) { ?> <li><a class="lien-nav" href="?controller=article-add&id">Créer un article</a>
                </li>
                <li> <a class="lien-nav" href="?controller=article-listReport&id">Liste des
                        commentaires signalés</a><?php }?></li>
                <ul>
        </nav>



        <h1>Bienvenue sur mon blog livre</h1>
        <br>
        <h2><strong>Billet simple pour L'Alaska</strong></h2>


        <?php



foreach($articles as $article):?>


        <h3 class="titre-article"><a class="lien-article" href="?controller=article-detail&id=<?=$article['id']?>">
                <span class="t-article"><?=$article['title'] ?></span>
            </a></h3><br>

        <article class=""><?=$article['content'] ?></article><br><br>

        <p class="edition">Article edité le <?=$article['date']?></p>

        <?php if (IS_ADMIN) { ?><button class="btn-modif"><a class="lien-modif"
                href="?controller=article-update&id=<?=$article['id']?>">Modifier</a></button>&ensp;

        <button class="btn-supprimer" type="submit" name="submit-del"><a class="lien-supprimer"
                href="?controller=article-del&id=<?=$article['id']?>">Supprimer</a></button><?php }?>
        <hr />
       
<?php endforeach ?>
  



        

    </body>

</html>