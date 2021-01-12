<?php
include_once('controllers/article.php');

$router = [
    //"article-list" => listArticles,
    //"article-detail" => detailArticle,
   // "article-add" => addArticle,
    //"article-del"=> deleteArticle,
   // "article-update"=> updateArticle,
   // "article-saveUpt"=>saveUpdateArticle,
];

$controller = $_GET['controller'];

if (!$controller) {
    $controller = 'article-list';
}

if (!$router[$controller]) {
    echo "NOT FOUND";
} else {
    $router[$controller]();
}

