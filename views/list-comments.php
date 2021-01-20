<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> les commentaires signalés : </h2>
<?php


foreach ($comments as $com): ?>
<time>Article créer le <?=$com->comdate?></time><br><br>

<strong><?=$com->author?></strong> : <?=$com->comment?>-
<a href="?controller=article-delComment&id=<?=$com->comid?>">Supprimer</a><br><br>
<hr>
    
<?php endforeach?>
</body>
</html>