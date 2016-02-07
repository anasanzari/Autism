<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Article.php';
require_once '../../helpers/Video.php';


$video = Video::find($_GET['id']);

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
  <div class="slope subp subp-v">
    <div class="scontent">
      <h2>Autism Community</h2>
      <h1><?= $video->name ?></h1>

    </div>
  </div>

  <div class="articles container-fluid">

    <div class="row">

      <div class="col-md-8 col-md-offset-2 vid">


          <video id="my-video" class="video-js raised" controls preload="auto" style="width:100%"
            poster="./videos/thumbs/autism.jpg" data-setup="{}">
              <source src="../../videos/<?= $video->link ?>" type="<?= $video->type ?>">
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
          </video>


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
