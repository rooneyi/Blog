<?php 


 /*
    * 1. recuperer l'article
    * author <rooneyi/github.com>
    */
if(!isset($_GET['id'])){
    abort();
}

$id = $_GET['id'];
$db = new Database();

$article = $db->query("SELECT * FROM articles WHERE id = $id ")->fetch(PDO::FETCH_ASSOC);

$user = $db->query("SELECT * FROM users WHERE id = ".$article['user_id'])->fetch(PDO::FETCH_ASSOC);


$titleheader = $article["title"];

require "views/article.view.php";