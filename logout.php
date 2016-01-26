<?php
require_once './helpers/session.php';
$session = new Session();
$session->logOut();
header('Location: ./index.php');

 ?>
