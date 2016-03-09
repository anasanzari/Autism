<?php

require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require_once '../helpers/session.php';
require '../helpers/boot.php';
require '../helpers/functions.php';
require_once '../helpers/User.php';
require_once '../helpers/Article.php';
require_once '../helpers/Video.php';

require_once '../helpers/Level.php';

$session = new Session();
$user = NULL;
if($session->getLoggedin()){
  $user = User::find($session->getUsername());
}

$users = User::where('type','3')->orWhere('type','4')->get();


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
  <script type="text/javascript" src="../static/js/jquery.min.js"></script>
  <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../static/js/video.min.js"></script>

</head>

<body>

<?php getTemplate(1,'log_bar',['user'=>$user]); ?>

<div class="slc">
  <div class="slope subp subp-d">
    <div class="scontent">
      <h2>Autism Community</h2>
      <h1>Trainers and Doctors</h1>
    </div>
  </div>

  <div class="articles container-fluid">

    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <h2>Trainers</h2>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php foreach ($users as $key => $value) {
            if($value->type=='3'){ ?>
              <div class="panel">
                <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collap<?=$key?>">
                  <?=$value->name?>
                </a>
                <div id="collap<?=$key?>" class="panel-collapse collapse" role="tabpanel">
                  <div class="panel-body pb">
                    <p>Email: <?=$value->email?></p>
                    <p>Phone: <?=$value->phone?></p>
                    <p>Address: <?=$value->address?></p>
                  </div>
                </div>
              </div>
           <?php
          }
        }?>
      </div>
      </div>
      <div class="col-md-4">
        <h2>Doctors</h2>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php foreach ($users as $key => $value) {
              if($value->type=='4'){ ?>
                <div class="panel">
                  <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>">
                    <?=$value->name?>
                  </a>
                  <div id="collapse<?=$key?>" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body pb">
                      <p>Email: <?=$value->email?></p>
                      <p>Phone: <?=$value->phone?></p>
                      <p>Address: <?=$value->address?></p>
                    </div>
                  </div>
                </div>
             <?php
            }
          }?>
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
