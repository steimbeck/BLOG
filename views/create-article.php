<div class="container"><br /><br><br>



    <h3> Création d'un nouvelle article</h3><br />
    <form method="post" action="post&status=news">
        <div class="form-group">
            <label for="title_Article"></label>
            <input class="form-control" type="text" placeholder="Titre" name="title_Article"><br />
        </div><br />
        <div class="form-group">
            <textarea placeholder="Contenu de l'article" class="form-control col -md-6"
                name="content_Article"></textarea><br />
            <span class="invalid">

            </span>
            <button class="btn btn-primary" type="submit" name="submit_Add">Envoyer l'article</button><br />
        </div>
    </form>
    <br />
    <?php
    if (isset($message)) {
        echo $message;
    }
    ?>

</div>
</body>

</html>