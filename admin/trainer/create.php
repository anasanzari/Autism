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
  $user = new User;
  $user->name = $_POST['name'];
  $user->phone = $_POST['phone'];
  $user->email = $_POST['email'];
  $user->address = $_POST['address'];
  $user->type = 3;
  $user->password = "password";
  $user->save();
  header("Location: ./index.php");
}
?>
<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'admin_nav',['page'=>'trainer','active'=>'trainer']); ?>


  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

        <form action="create.php" method="post" class="horizontal-form">
          <div class="form-group">
            <label>Trainer Name</label>
              <input class="form-control" type="text" name="name">
          </div>
          <div class="form-group" name="name">
            <label>Phone</label>
            <input class="form-control" name="phone">
          </div>
          <div class="form-group" name="name">
            <label>Email</label>
            <input class="form-control" name="email">
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address"></textarea>
          </div>
          <div class="form-group">
              <input class="form-control btn btn-primary" type="submit" value="submit" name="create">
          </div>
        </form>
      </div>
  </div>
</div>
</div>

<script type="text/javascript" src="../../static/js/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="../../static/js/markitup/settings.js"></script>

  </body>
<r/html>
