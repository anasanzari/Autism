<?php

require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require_once '../helpers/session.php';
require '../helpers/boot.php';
require '../helpers/functions.php';
require_once '../helpers/User.php';
require_once '../helpers/Video.php';
require_once '../helpers/Article.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ../login.php");
}

$user = User::find($session->getUsername());

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

</head>

<body ng-app="app">

<div class="wrapper">

  <?php getTemplate(1,'doctor_nav',['page'=>'trainer','active'=>'trainer']); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div ng-controller="ChatController">
      <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <h3>Online Users</h3>
          <p class="alert alert-danger" ng-show="doctors.length==0">Nobody is online.</p>
          <div class="list-group">
            <button ng-repeat="doctor in doctors"
                    ng-click="changeDoctor(doctor)"
                    type="button" class="list-group-item">{{doctor.name}}</button>
          </div>
        </div>
        <div ng-show="boxOn" class="col-md-6">
          <irontec-simple-chat
              messages="messages"
              username="username"
              my-user-id="userid"
              input-placeholder-text="You can write here"
              submit-button-text="Send your message"
              title="{{currentDoctor.name}}"
              theme="material"
              on-submit= "sendMessage"
              visible="true">
          </irontec-simple-chat>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


<script type="text/javascript" src="../static/js/angular.min.js"></script>
<script type="text/javascript" src="../static/js/angular-resource.min.js"></script>
<script type="text/javascript" src="../static/js/chat/index.js"></script>
<script>

(function() {
  'use strict';

  var app = angular.module('app', ['irontec.simpleChat','ngResource']);

  function error(r){
    console.log(r);
    var v;
    for(var key in r){
      v+=r[key];
    }
    alert(v);
  }

  app.factory('ChatApi',function ($resource) {
      return $resource("../chat/api.php", {},
      {
          get:{method:'GET', cache:false,isArray:false},
          getArray:{method:'GET', cache:false,isArray:true},
          post: {method:'POST',cache:false,isArray:false},
      });
  })

  app.controller('ChatController', function($scope,ChatApi){
    $scope.messages = [];
    $scope.username = 'Matt';
    $scope.userid = <?= $user->id; ?> ; // this is my userid.
    $scope.lastRecieved = '';
    $scope.boxOn = false;

    $scope.getMessages = function(fromid,toid){
      ChatApi.getArray({query: 'getHistory',from_id: fromid, to_id: toid}, function (response) {
          $scope.messages = response;
          $scope.lastRecieved = response[response.length-1].time;
          console.log(response);
      });
    }

    $scope.sendMessage = function(message, username) {
      if(message && message !== '' && username) {
        var post = new ChatApi();
        post.post = 'addMessage';
        post.from_id = $scope.userid;
        post.to_id = $scope.currentDoctor.id;
        post.message = message;
        post.$post({}, function (response) {
          console.log(response);
          $scope.messages.push(response);
        });
      }
    };

    setInterval(function () {
      $scope.update();
      $scope.refreshOnline();
    }, 5000);

    $scope.changeDoctor = function(doctor){
      $scope.boxOn = true;
      $scope.currentDoctor = doctor;
      $scope.getMessages($scope.userid,$scope.currentDoctor.id);
    }

    $scope.update = function(){
      if(!$scope.currentDoctor){
        return;
      }
      ChatApi.getArray({query: 'getUpdates',from_id: $scope.userid, to_id: $scope.currentDoctor.id,lastRecieved:$scope.lastRecieved}, function (response) {
          for(var i=0;i<response.length;i++){
            $scope.messages.push(response[i]);
          }
          if(response.length>0){
            $scope.lastRecieved = response[response.length-1].time;
          }
          console.log(response);
      });
    }

    $scope.refreshOnline = function(){
      ChatApi.getArray({query: 'online_users'}, function (response) {
          $scope.doctors = response;
          console.log(response);
      });
    };
    $scope.refreshOnline();


  });


})();


</script>
</body>

</html>
