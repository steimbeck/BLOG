<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/style.css">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

        <!-- <script>
                src="https://cdn.tiny.cloud/1/ji9gdzunqo0t0g5taic1uefi68xm5or5i521rfqlsgwwudjp/tinymce/5/tinymce.min.js"
               referrerpolicy="origin"></script>  -->
        <script>
            tinymce.init({
                selector: '#tinymce'

            });
        </script>



        <title>BLOG</title>
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



        <h3 class="titre-add"> Création d'un nouvelle article</h3><br />

        <form class="form-add" method="post" action="?controller=article-save&id>

            <label for=" article_title"></label>
            <input class="input-add" type="text" placeholder="Titre" name="article_title"
                value="<?=$_POST['article_title'] ?? "" ?>"><br />


            <textarea class="textarea-add" placeholder="Contenu de l'article" id="tinymce" name="article_content"
                cols="75" rows="15"> <?=$_POST['article_content'] ?? ""?></textarea><br><br>

            <button class="btn-add" type="submit" name="submit_Add">Envoyer l'article</button><br />


        </form><br>
        <span class="signaler"></span>

    </body>

</html>