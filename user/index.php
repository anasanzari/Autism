<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Level.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ../login.php");
}
$user = User::find($session->getUsername());
$level = Level::find($user->id);
if($level){
  header("Location: ./articles/index.php");
}else{
  header("Location: ./form.php");
}



?>
