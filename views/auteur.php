<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
        if (IS_ADMIN) { 
        ?> 
        <link rel="stylesheet" href="../public/style.css">
        <?php }else?> <?php { echo " ";
         }?>

        <?php 
        if (!IS_ADMIN) { 
        ?> 
        <link rel="stylesheet" href="public/style.css">
        <?php }else?> <?php { echo "";
         }?>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Josefin+Slab:wght@500&family=Lora:ital@1&display=swap');
        </style>
    </head>

    <body>
        <nav>
            <ul>
                <li><a class=" lien-nav" href="index.php">Retour aux articles</a></li>
                <li><a class="lien-nav" href="?controller=article-auteur&id">Information sur l'auteur du blog</a>
                </li> <?php if (IS_ADMIN) { ?>
                <li><a class="lien-nav" href="?controller=article-add&id">Créer un article</a>
                </li>
                <li> <a class="lien-nav" href="?controller=article-listReport&id">Liste des
                        commentaires signalés</a><?php }?>
                    <ul>
        </nav>


        <h1 class="titre-auteur"> Qui suis je? </h1>

        <p class="biographie"> *********Je suis Jean Forteroche, acteur et ecrivain.**********</p>
        <p class="biographie">******Je travaile actuellement sur mon prochain roman, "Billet simple pour
            L'Alaska".**************<p>
                <p class="biographie">******* Je souhaite innover et le publier par episode en ligne sur ce
                    site.************<p>
                        <p class="biographie">********* Bonne lecture à tous**************</p>

    </body>

</html>