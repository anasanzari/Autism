<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ../../login.php");
}

$err = 0;

if(isset($_POST['create']))
{
  $user = User::find($_GET['id']);
  if($user->password == $_POST['cur_pass'])
  {
     if($_POST['new_pass']==$_POST['conf_pass'])
     {
       $user->password = $_POST['new_pass'];
       $user->save();
       $err = 5;
     }
     else{
       $err = 2;
     }
  }
  else{
    $err = 1;
  }
}

else{
  $user = User::find($_GET['id']);
}
?>
  <?php getTemplate(2,'header'); ?>

    <div class="wrapper">

      <?php getTemplate(2,'trainer_nav',['page'=>'profile','active'=>'profile']); ?>

        <div class="page-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                  <?php
                    if($err==1){
                  ?>
                      <div class="alert alert-dismissible alert-danger">
                        <button class="close" data-dismiss="alert">&times;</button>
                         <b>Wrong Password</b>
                      </div>
                    <?php
                    }
                    else if($err==2){
                    ?>
                      <div class="alert alert-dismissible alert-danger">
                        <button class="close" data-dismiss="alert">&times;</button>
                         <b>Invalid Password Confirmation</b>
                      </div>
                      <?php
                    }
                    else if($err==5){
                      ?>
                        <div class="alert alert-dismissible alert-success">
                          <button class="close" data-dismiss="alert">&times;</button>
                           <b>Password Succesfully Updated</b>
                        </div>
                      <?php
                     }
                      ?>
                <form action="edit_pass.php?id=<?= $user->id ?>" method="post" class="horizontal-form">
                  <div class="form-group">
                    <label>Current Password</label>
                      <input class="form-control" type="password" name="cur_pass">
                  </div>
                  <div class="form-group">
                    <label>New Password</label>
                    <input class="form-control" type="password" name="new_pass">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" type="password" name="conf_pass">
                  </div>
                  <div class="form-group">
                      <input class="form-control btn btn-primary" type="submit" value="Confirm" name="create">
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript" src="../../static/js/markitup/jquery.markitup.js"></script>
      <script type="text/javascript" src="../../static/js/markitup/settings.js"></script>

</body>
</html>
