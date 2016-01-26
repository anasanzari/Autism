<?php

require __DIR__.'/./vendor/autoload.php';
require './config.php';
require_once './helpers/session.php';
require './helpers/boot.php';
require_once './helpers/User.php';

$session = new Session();

if($session->getLoggedin()){
  header("Location: ./trainer/index.php");
}

if(isset($_POST['email'])&&isset($_POST['password'])){
  $u = User::where('email',$_POST['email'])->where('password',$_POST['password'])->first();
  //var_dump($u);
  if($u){
    $session->logIn($u->id, Session::USER_REGULAR);
    header('Location: ./trainer/index.php');
  }else{
    $error = true;
  }
}else{
//  header('Location: index.php');
}

 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Autism</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="./static/css/awe.css" rel="stylesheet">
  <link href="./static/css/player.css" rel="stylesheet">
  <link href="./static/css/styles.css" rel="stylesheet" />
  <script type="text/javascript" src="./static/js/jquery.min.js"></script>
  <script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
</head>
<body>


<div class="loginpage">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-12">
        <h1>Autism Community</h1>
        <h4>Login</h4>
        <?php

        if(isset($error)){
          ?>
          <p class="alert alert-danger">Invalid Email/Password.</p>
          <?php
        }

         ?>
        <form class="form-horizontal" action="login.php" method="POST">
          <div class="form-group">
                  <input class="form-control" placeholder="Email" name="email"  type="email" required>
          </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Password" name="password" type="password" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="submit" class="btn" value="Login"/>
                </div>
              </div>
        </form>

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
