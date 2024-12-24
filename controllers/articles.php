<?php

$db = new Database();

$query ="SELECT * FROM articles";
$articles = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
$user = "SELECT * FROM articles WHERE user_id";

$users = $db->query($user)->fetchAll(PDO::FETCH_ASSOC);

$titleheader = "Tous Les articles";
require "views/articles.view.php";