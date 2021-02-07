<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../public/style.css">
        <title>BLOG</title>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


        <script>
            tinymce.init({
                selector: '#content'

            });
        </script>
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



        <h1 class="titre-update">Modification de l'article </h1>


        <form class="form-update" action="?controller=article-saveUpt&id=<?= $article['id'] ?>" method="post">

            <label class="label-titre">Titre de l'article</label><br>
            <input class="input-update" type="text" name="title" value="<?=$article['title']?>"><br><br>


            <label class="label-texte">Contenu de l'article</label><br><br>

            <textarea class="textarea-update" cols="50" rows="8" name="content"
                id="content"><?=$article['content']?> </textarea><br><br>


            <button class="btn-update" type="submit" name="submit_comment">Envoyer l'article modifié</button><br>

        </form>
        <span></span>
    </body>

</html>