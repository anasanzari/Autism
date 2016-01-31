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
  header("Location: ./login.php");
}
$user = User::find($session->getUsername());
$article = Article::find($_GET['id']);

 ?>
<!DOCTYPE html>
<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'user_nav',['active'=>'article','user'=>$user]); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <h1><?= $article->name ?> <small style="font-size:14px">by <?= $article->author ?></small></h1>
        <p><?= $article->content ?></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
