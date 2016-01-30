<?php


require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require '../helpers/boot.php';
require_once '../helpers/Article.php';

$article = Article::all();

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
      <h2>Articles</h2>
      <table class="table table-striped">
        <tr>
          <th>Name</th>
          <td>Author</th>
          <th>Links</th>
        </tr>
        <?php
        foreach($article as $article)
        {?>
        <tr>
          <td><?= $article->name ?></td>
          <td><?= $article->author ?></td>
          <td>
            <a href="show.php?id=<?= $article->id ?>" class="btn btn-link">Show</a>
            <a href="edit.php?id=<?= $article->id ?>" class="btn btn-link">Edit</a>
            <a href="delete.php?id=<?= $article->id ?>" class="btn btn-link">Destroy</a>
          </td>
        </tr>
        <?php }
        ?>
      </table>
  </div>
  </body>
</html>
