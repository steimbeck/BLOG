<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form class="form-group" action="?controller=article-comment&id" method="post">
            <div class="form-group">
                <label for="pseudo">Votre pseudo</label>

                <input type="text" name="pseudo" id="pseudo" class="form-control col-md-3">
            </div>

            <div class="form-group">

                <label for="texte">
                    Votre commentaire</label>
                <textarea class="form-control col-md-6" name="message" id="message"
                    placeholder="Poster votre commentaire"></textarea>
            </div><br>
            <button type="submit" class="btn btn-info" name="submit_comment" value="Mettre à jour">Envoyer mon
                commentaire</button><br />
        </form>


    </body>

</html>