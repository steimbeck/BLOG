

<div class="container">
<div>
    <h4><span><?=$article['title']?></span><h4>
    <p><?=$article['content']?> </p>
</div>
<h3>Les commentaires de cet article :</h3><br>
<?php

foreach ($articles as $com): ?>
 <time>Article créer le <?=$com->comdate?></time><br><br>

<strong><?=$com->author?></strong> : <?=$com->comment?> - <a class="btn btn-blog pull-right marginBottom10"
    role="button" href="?controller=article-report&id=<?=$com->comid?>">Signaler </a> - <a class="btn btn-blog pull-right marginBottom10" role="button"
        href="?controller=article-delComment&id=<?=$com->comid?>">Supprimer</a><br><br>
<?php endforeach?>








<h4>Ajouter un commentaire</h4><br>

<form class="form-group" action="?controller=article-comment&id=<?=$article['id']?>" method="post">
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
</div>
<?php
if (isset($message)) {
    echo $message;
}
?>