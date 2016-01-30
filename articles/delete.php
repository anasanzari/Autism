<?php


require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require '../helpers/boot.php';
require_once '../helpers/Article.php';


  Article::destroy($_GET['id']);
  header("location:index.php");
?>
