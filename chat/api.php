<?php

require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require_once '../helpers/session.php';
require '../helpers/boot.php';
require '../helpers/functions.php';
require_once '../helpers/User.php';
require_once '../helpers/OnlineUser.php';
require_once '../helpers/Chat.php';


$data = file_get_contents("php://input");
$data = json_decode($data,TRUE);

$out = [];

if(isset($data['post'])){

}else{
  //get request
  if (isset($_GET['query'])) {
        $type = $_GET['query'];
        switch ($type) {
            case 'online' : $out = online();
                break;
            case 'online_doctors' : $out = online_users(session::USER_DOCTOR);
                break;
            case 'online_users' : $out = online_users(session::USER_REGULAR);
                break;
            default: setStatus($out,'fail','invalid type.');
                break;
        }

  } else {
      setStatus($out,'fail','query not set.');
  }

}

header('Content-type: text/plain');
echo json_encode($out, JSON_PRETTY_PRINT);


function setStatus($out,$msg,$error=NULL){
  $out['status'] = $msg;
  if(!is_null($error)){
    $out['error'] = $error;
  }
}

function online(){
  return OnlineUser::with('user')->get();
}
function logger() {
    $queries = \Illuminate\Database\Capsule\Manager::getQueryLog();
    $formattedQueries = [];
    foreach( $queries as $query ) :
        $prep = $query['query'];
        foreach( $query['bindings'] as $binding ) :
            $prep = preg_replace("#\?#", $binding, $prep, 1);
        endforeach;
        $formattedQueries[] = $prep;
    endforeach;
    return $formattedQueries;
}

function online_users($type){
    $r = OnlineUser::join('autism_users', 'autism_users.id', '=', 'autism_online.id')
        ->where('autism_users.type','=',$type)
        ->get();
    return $r;
}
?>
