<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>BLOG</title>
    </head>

    <body class="bg-secondary">
        <div class="row">
            <nav class="navbar navbar-expand fixed-top navbar-dark bg-primary">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="Controller/admin/index.php">Connexion Administrateur <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="index.php">Retour aux articles</a>
                    <a class="nav-item nav-link" href="?controller=article-new&id=<?=$article['id']?>">Créer un article</a>
                </div>
        </div>

        </nav>
        
                  <main role="main" class="container">
                      <div class="text-center mt-5 pt-5">

                          <h1>Bienvenue sur mon blog livre</h1>
                          <br>
                          <h2><strong>Billet simple pour L'Alaska</strong></h2>
                      </div>
                  </main>
                  <div class="container">
<?php

echo "Ceci est ma vue list articles";

foreach($articles as $article):?>
<div><br>
    
    <h3><a href="?controller=article-detail&id=<?= $article['id']?>">
     <span><?=$article['title'] ?></span>
    </a></h3><br>
    
    <article><?=$article['content'] ?></article><br>
    <a class="btn btn-blog pull-right marginBottom10 btn btn-info" role="button"
        href="?controller=edit&id=<?=$article['id']?>">Modifier</a>
    
        <a class="btn btn-blog pull-right marginBottom10" href="?controller=delete&id=<?=$article['id']?>">Supprimer</a>
        <hr />

</div>
                  

<?php endforeach ?>