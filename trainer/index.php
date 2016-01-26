<?php

require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require_once '../helpers/session.php';
require '../helpers/boot.php';
require_once '../helpers/User.php';

$session = new Session();

if(!$session->getLoggedin()){
  header("Location: ./login.php");
}

$id = $session->getUsername();

$user = User::find($id);

 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Autism</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="../static/css/awe.css" rel="stylesheet">
  <link href="../static/css/player.css" rel="stylesheet">
  <link href="../static/css/styles.css" rel="stylesheet" />
  <script type="text/javascript" src="../static/js/jquery.min.js"></script>
  <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
</head>
<body>


<div class="loginpage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-12">
        <h1>Welcome.<?= $user->name ?></h1>
        <a class="btn btn-default" href="../logout.php">Logout</a>

      </div>
    </div>
  </div>
</div>



    <script>
      $(document).ready(function() {

      });
    </script>
</body>

</html>
