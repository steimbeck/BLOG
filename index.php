 <?php
error_reporting(0);
define('IS_ADMIN',false);
 define('ROOT_DIRECTORY','');
include_once ROOT_DIRECTORY.'controllers/article.php';



 $router = 
[

"article-list"=> listArticles, 
"article-detail" => detailArticle,
"article-comment"=>addComment,
"article-report"=>reportComment,
"article-auteur"=>display,


];  



$controller = $_GET['controller'];


if (!$controller) 
{
    $controller = 'article-list';
    
    
    
    
}

if (!$router[$controller])
{
    echo "NOT FOUND";
} else {
        $router[$controller]();
}
 