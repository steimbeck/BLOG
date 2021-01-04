
 <h1>Modification de l'article</h1>


<form action="" method="post">
    <div class="form-group">
        <label for=title>Titre de l'article</label><br>
        <input class="form-control" type="text" name="title" value="<?=$article?>">
    </div>
    <div class="form-group">

        <label for="texte"></label><br>
        <textarea class="form-control col-md-6" name="modif" id="modif">Ajouter votre commentaire</textarea>
    </div><br>
    <button type="submit" class="btn btn-info" name="submit_comment">Envoyer ma article modifié</button>
</form>











