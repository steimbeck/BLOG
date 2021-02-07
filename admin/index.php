<?php
error_reporting(0);
define('IS_ADMIN',true);
define('ROOT_DIRECTORY','../');
include_once '../controllers/article.php';





$router = [
    "article-list" => listArticles,
    "article-detail" => detailArticle,
    "article-add" => addArticle,
    "article-save"=>saveNewArticle,
    "article-del"=> deleteArticle,
    "article-update"=> updateArticle,
    "article-saveUpt"=>saveUpdateArticle,
    "article-comment"=>addComment,
    "article-delComment"=>deleteComment,
    "article-report"=>reportComment,
    "article-listReport"=>listWarningComments,
    "article-auteur"=>display
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