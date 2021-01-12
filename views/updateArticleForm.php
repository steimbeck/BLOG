<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BLOG</title>
</head>

<body class="bg-secondary">
    <div class='container'>

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
    </div>
</body>
