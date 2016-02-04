<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Video.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ./login.php");
}

$video = Video::find($_GET['id']);

 ?>
<!DOCTYPE html>
<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'admin_nav',['page'=>'videos','active'=>'video']); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <a href="./index.php" class="btn btn-default">Watch Other Videos</a>
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
  </div>
</div>
</body>
</html>
