<?php

require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require '../helpers/boot.php';
require_once '../helpers/Article.php';

$article = Article::find($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Articles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../static/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container" style="padding:30px">
    <h1><?= $article->name ?> <small style="font-size:14px">by <?= $article->author ?></small></h1>
    <p><?= $article->content ?></p>
  </div>
  </body>
</html>
