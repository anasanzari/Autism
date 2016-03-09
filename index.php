<?php

require __DIR__.'/./vendor/autoload.php';
require './config.php';
require_once './helpers/session.php';
require './helpers/boot.php';
require_once './helpers/User.php';
require './helpers/functions.php';
require './helpers/Level.php';

$session = new Session();
if($session->getLoggedin()){
  $user = User::find($session->getUsername());
  $level = Level::where('user_id',$user->id)->first();
  if($user->type==session::USER_REGULAR&&!$level){
    header("Location: ./form.php");
  }else{

  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Autism</title>
  <link href="./static/css/awe.css" rel="stylesheet">
  <link href="./static/css/player.css" rel="stylesheet">
  <script type="text/javascript" src="./static/js/jquery.min.js"></script>
  <script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./static/js/video.min.js"></script>

</head>

<body>
<?php if(isset($user)){?>
<div class="logheader">
  <ul>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
<?php } ?>

<div class="slc <?=isset($user)?"logpad":""?>">
  <div class="slope main">
    <div class="scontent">
      <h1>Autism Community</h1>
      <h2>Something about this organization</h2>
      <?php if(!isset($user)){
        echo '<a class="button" href="login.php">Login</a>';
      }?>
    </div>
  </div>
  <div class="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-12">
          <h1>About Autism</h2>
          <p>Autism spectrum disorder (ASD) is a complex developmental disability; signs typically appear during early childhood and affect a person’s ability to communicate,
             and interact with others.ASD is defined by a certain set of behaviors and is a “spectrum condition” that affects individuals differently and to varying degrees.
          </p>

        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 vid">
          <video id="my-video" class="video-js raised" controls preload="auto" style="width:100%"
            poster="./videos/thumbs/autism.jpg" data-setup="{}">
              <source src="./videos/autism.mp4" type='video/mp4'>
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

<div class="community">
  <div class="container-fluid">
          <div class="row quote">
              <div class="col-md-8 col-md-offset-2">
                <h1>Autism Community</h1>
                <p><em>“I think that the best thing we can do for our children is to allow them to do things for themselves,
                  allow them to be strong, allow them to experience life on their own terms, allow them to take the subway...
                  let them be better people, let them believe more in themselves.”</em> </p>
                  <p class="pull-right"> - C. JoyBell C.</p>
                  <h1 style="padding-top:30px">About Us</h2>
                  <p>The Autism Community, the nation’s leading grassroots autism organization, exists to improve the lives of all affected by autism.
                     We do this by increasing public awareness about the day-to-day issues faced by people on the spectrum,
                     advocating for appropriate services for individuals across the lifespan,
                    and providing the latest information regarding treatment, education, research and advocacy.</p>

                </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

            </div>
          </div>
    </div>
</div>

<div class="services container-fluid">

        <div class="row tiles">
          <h1>Services</h1>
          <div class="col-md-3">
            <img src="./static/images/icons/talk.png" />
            <a href="./chat/index.php"><h3>Online training</h3></a>
          </div>
          <div class="col-md-3">
            <a href="./common/videos.php"><img  src="./static/images/icons/videos.png" /></a>
            <a href="./common/videos.php"><h3>Watch videos</h3></a>
          </div>
          <div class="col-md-3">
            <a href="./common/articles.php"><img src="./static/images/icons/text.png" /></a>
            <a href="./common/articles.php"><h3>Read Articles</h3></a>
          </div>
          <div class="col-md-3">
            <a href="./common/list.php"><img src="./static/images/icons/team.png" /></a>
            <a href="./common/list.php"><h3>Trainers and Doctors</h3></a>
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
