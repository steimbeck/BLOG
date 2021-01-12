<?php
include_once 'controllers/article.php';

$router = 
[
    "article-list" => listArticles,
    "article-detail" => detailArticle,
    "article-comment"=>addComment,
    "article-del"=> deleteArticle,
    "article-delcomment"=>eraseComment,
    "article-update"=> updateArticle,
      "article-saveUpt"=>saveUpdateArticle,
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