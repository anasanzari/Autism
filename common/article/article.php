<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Article.php';


$article = Article::find($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Autism</title>
  <link href="../../static/css/awe.css" rel="stylesheet">
  <link href="../../static/css/player.css" rel="stylesheet">
  <script type="text/javascript" src="../../static/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../../static/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../static/js/video.min.js"></script>

</head>

<body>

<div class="slc">
  <div class="slope subp subp-a">
    <div class="scontent">
      <h2>Autism Community</h2>
      <h1>Articles</h1>

    </div>
  </div>

  <div class="articles container-fluid">

    <div class="row">

      <div class="col-md-12">
        <div class="preview">
        <h1><?= $article->name ?> <small style="font-size:14px">by <?= $article->author ?></small></h1>
        <p><?= $article->content ?></p>
      </div>
      </div>


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
