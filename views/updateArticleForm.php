<h1>Modification de l'article </h1>


<form action="?controller=article-saveUpt&id=<?= $article['id'] ?>" method="post">
    <div class="form-group">
        <label for=title>Titre de l'article</label><br>
        <input class="form-control" type="text" name="title" value="<?=$article['title']?>">
    </div>
    <div class="form-group">

        <label for="texte"></label><br>
        <textarea class="form-control col-md-6" name="content" id="content"><?=$article['content']?> </textarea>
    </div><br>
    <button type="submit" class="btn btn-info" name="submit_comment">Envoyer l'article modifié</button>
</form>