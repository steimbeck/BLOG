<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Connexion Administrateur</title><br> <br><br>
    </head>

    <body>
        <div class='container' align='center'>
            <h2>Identification Admin</h2><br>
            <div class="container">
                <form method="post" action="?controller=article-login&id ">
                    <div class="form-group">
                        <label for="name">Votre Pseudo</label>
                        <input type="text" name="name" id="name" class="form-control col-md-3"
                            placeholder="Entrez votre pseudo admin">
                    </div>
                    <div class="form-group">
                        <label for="texte"> Votre mot de passe</label>
                        <input type="password" class="form-control col-md-5" id="password" nom="password"
                            placeholder="Entrez mot de passe">
                    </div><br>
                    <button type="submit" class="btn btn-info" value="login">Envoyer </button><br>
                </form>

            </div>
        </div>

    </body>

</html>