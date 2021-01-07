<div>
    <span><?=$article['title']?></span>
    <p><?=$article['content']?> </p>
</div>


<h3>Ajouter un commentaire</h3>

<form class="form-group" action="?controller=article-comment&id=<?=$article['id']?>" method=" post">
    <div class="form-group">
        <label for="pseudo">Votre pseudo</label><br><br>
        <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
    </div><br>
    <div class="form-group">
        <label for="texte">
            Votre commentaire</label><br><br>
        <textarea name="message" id="message" cols="30" rows="8" class="form-control col-md-6"
            placeholder="Poster votre commentaire"></textarea>
    </div><br>

    <button type="submit" class="btn btn-info" name="submit_message">Envoyer votre commentaire</button><br />
</form>