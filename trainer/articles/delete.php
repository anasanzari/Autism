<?php


require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Article.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ../../login.php");
}


  Article::destroy($_GET['id']);
  header("location: ./index.php");
?>
