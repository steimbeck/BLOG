<?php

include_once('models/article.php');

function addArticle() {
    echo "IMPLEMENT ME";
}

function saveNewArticle() {
    echo "IMPLEMENT ME";
}

function detailArticle() {
    $articleManager = new ArticleManager();
    $article = $articleManager->get((int)$_GET['id']);
    include_once('views/detail-article.php');
    
}

function listArticles() {
    $articleManager = new ArticleManager();
    $articles = $articleManager->list();
    include_once('views/list-articles.php');
    
    
    

}

function updateArticle() {
    echo "IMPLEMENT ME";
}

function saveUpdateArticle() {
    echo "IMPLEMENT ME";
}

function deleteArticle() {
    echo "IMPLEMENT ME";
}