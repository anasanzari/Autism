<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Autism</title>
  <link href="../static/css/awe.css" rel="stylesheet">
  <link href="../static/css/player.css" rel="stylesheet">
  <script type="text/javascript" src="../static/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>

</head>

<body ng-app="app">

<div class="slc">
  <div class="slope subp subp-a">
    <div class="scontent">
      <h2>Autism Community</h2>
      <h1>Articles</h1>

    </div>
  </div>

  <div class="articles container-fluid">

    <div class="row">
      <div class="col-md-12">
        <h1>Chat</h2>
          <div ng-controller="Shell as vm">

            <div class="chat-container">
              <irontec-simple-chat
                  messages="vm.messages"
                  username="vm.username"
                  input-placeholder-text="You can write here"
                  submit-button-text="Send your message"
                  title="Super Awesome Chat"
                  theme="material"
                  submit-function="vm.sendMessage"
                  visible="true">
              </irontec-simple-chat>
            </div>
          </div>


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


<script type="text/javascript" src="../static/js/angular.min.js"></script>
<script type="text/javascript" src="../static/js/chat/index.js"></script>
<script type="text/javascript" src="../static/js/chat/templates.js"></script>
<script type="text/javascript" src="../static/js/chat/app.js"></script>

</body>
</html>
