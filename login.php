<?php

require __DIR__.'/./vendor/autoload.php';
require './config.php';
require_once './helpers/session.php';
require './helpers/boot.php';
require_once './helpers/User.php';

$session = new Session();

if($session->getLoggedin()){
  header("Location: ./customer/index.php");
}

if(isset($_POST['email'])&&isset($_POST['password'])){
  $u = User::where('email',$_POST['email'])->where('password',$_POST['password'])->first();
  //var_dump($u);
  if($u){
    $session->logIn($u->id, Session::USER_REGULAR);
    header('Location: ./customer/index.php');
  }
}else{
//  header('Location: index.php');
}

 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <title>FoodWeb</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="./public/css/styles.css" rel="stylesheet" />
  <script type="text/javascript" src="./public/js/jquery.min.js"></script>
  <script type="text/javascript" src="./public/js/materialize.min.js"></script>
</head>
<body>


<div class="loginpage">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <p class="error">Incorrect Email/Password. Please try again.</p>
        <h4>Login</h4>
        <form class="col s12" action="login.php" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Email" name="email"  type="email">
                </div>
                <div class="input-field col s12">
                  <input placeholder="Password" name="password" type="password">
                </div>
                <div class="input-field col s12">
                  <input type="submit" class="waves-effect btn" value="Login"/>
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
