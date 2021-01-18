<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 

        <!-- <script>
                src="https://cdn.tiny.cloud/1/ji9gdzunqo0t0g5taic1uefi68xm5or5i521rfqlsgwwudjp/tinymce/5/tinymce.min.js"
               referrerpolicy="origin"></script>  -->
        <script >
            tinymce.init({
                selector: '#tinymce'

            });
        </script> 



        <title>BLOG</title>
    </head>


    <div class="container" align='center'><br /><br><br>



        <h3> Création d'un nouvelle article</h3><br />

        <form method="post" action="?controller=article-save&id">
            <div class="form-group">
                <label for="article_title"></label>
                <input class="form-control" type="text" placeholder="Titre" name="article_title"><br />
            </div><br>
            <div class="form-group col -md-6">
                <textarea placeholder="Contenu de l'article" class="form-control col -md-6" id="tinymce"
                    name="article_content"></textarea><br><br>

                <button class="btn btn-primary" type="submit" name="submit_Add">Envoyer l'article</button><br />
            </div>
    </div>
    </form>
    <br>



    </div>

   
    </body>

</html>