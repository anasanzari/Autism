<?php

require __DIR__.'/./vendor/autoload.php';
require './config.php';
require './helpers/boot.php';

require_once './helpers/OnlineUser.php';
require_once './helpers/session.php';
$session = new Session();
$session->logOut();
header('Location: ./index.php');

 ?>
