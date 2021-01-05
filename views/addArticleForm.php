<div class="container"><br /><br><br>



    <h3> Création d'un nouvelle article</h3><br />
    <form method="post" action="?controller=article-save&id">
        <div class="form-group">
            <label for="article_title"></label>
            <input class="form-control" type="text" placeholder="Titre" name="article_title"><br />
        </div><br>
        <div class="form-group col -md-6">
            <textarea placeholder="Contenu de l'article" class="form-control col -md-6"
                name="article_content"></textarea><br>

            <button class="btn btn-primary" type="submit" name="submit_Add">Envoyer l'article</button><br />
        </div>
    </form>
    <br>
    
    

</div>
</body>

</html>