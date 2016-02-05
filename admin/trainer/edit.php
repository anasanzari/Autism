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


if(isset($_POST['create']))
{
  $user = User::find($_GET['id']);
  $user->name = $_POST['name'];
  $user->phone = $_POST['phone'];
  $user->email = $_POST['email'];
  $user->address = $_POST['address'];
  $user->save();
  header("location: ./index.php");
}

else{
  $user = User::find($_GET['id']);
}
?>
  <?php getTemplate(2,'header'); ?>

    <div class="wrapper">

      <?php getTemplate(2,'admin',['page'=>'doctor','active'=>'doctor']); ?>

        <div class="page-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <form action="edit.php?id=<?= $user->id ?>" method="post" class="horizontal-form">
                  <div class="form-group">
                    <label>Trainer Name</label>
                      <input class="form-control" type="text" name="name" value="<?= $user->name ?>">
                  </div>
                  <div class="form-group" name="name">
                    <label>Phone</label>
                    <input class="form-control" name="phone" value="<?= $user->phone ?>">
                  </div>
                  <div class="form-group" name="name">
                    <label>Email</label>
                    <input class="form-control" name="email" value="<?= $user->email ?>">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address"><?= $user->address ?></textarea>
                  </div>
                  <div class="form-group">
                      <input class="form-control btn btn-primary" type="submit" value="submit" name="create">
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
