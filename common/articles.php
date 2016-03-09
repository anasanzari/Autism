<?php

require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require_once '../helpers/session.php';
require '../helpers/boot.php';
require '../helpers/functions.php';
require_once '../helpers/User.php';
require_once '../helpers/Article.php';

require_once '../helpers/Level.php';

$session = new Session();
$user = NULL;
if($session->getLoggedin()){
  $user = User::find($session->getUsername());
  $level = Level::where('user_id',$user->id)->first();
  $articles = Article::where('level',$level->level)->get();
}else{
  $articles = Article::all();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Autism</title>
  <link href="../static/css/awe.css" rel="stylesheet">
  <link href="../static/css/player.css" rel="stylesheet">
  <script type="text/javascript" src="../static/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
  <link href="../static/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="../static/js/video.min.js"></script>

</head>

<body>

<?php getTemplate(1,'log_bar',['user'=>$user]); ?>

<div class="slc">
  <div class="slope subp subp-a">
    <div class="scontent">
      <h2>Autism Community</h2>
      <h1>Articles</h1>

    </div>
  </div>

  <div class="articles container-fluid">

    <div class="row">
      <?php
      foreach($articles as $article)
      {?>
      <div class="col-md-4">
        <div class="card">
          <h2><i class="small fic fa fa-pencil"></i> <?= $article->name ?></h2>
          <h4><i class="auth fic fa fa-user"></i> <?= $article->author ?></h4>
          <a href="./article/article.php?id=<?=$article->id?>" class="btn btn-default">Read</a>
        </div>
      </div>
      <?php }
      ?>

    </div>

  </div>

</div>




<div class="contact">
  <div class="slope tilt">
      <div class="scontent">
        <h1>Contact Us</h1>
        <p>Autism Community<br>
        Somewhere between the streets<br>
        Bangalore, Karnataka<br>
        India</p>
        <p>
          Email : auticom@acorg.in</br>
          Phone : 8956127568
        </p>
      </div>
  </div>
</div>



</body>
</html>
