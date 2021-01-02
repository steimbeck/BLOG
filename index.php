<?php
include_once 'controllers/article.php';

$router = 
[
    "article-list" => listArticles,
    "article-detail" => detailArticle,
    "article-new" => addArticle
    
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
