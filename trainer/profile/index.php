<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Article.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ../../login.php");
}

$username = $_SESSION['username'];
$user = User::find($username);
?>

<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'trainer_nav',['page'=>'profile','active'=>'profile']); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <h2>Profile</h2>
        <p><b><?= $user->name ?></b></p>
        <p><b><?= $user->email ?></b></p>
        <p><b><?= $user->address ?></b></p>
        <p><b><?= $user->phone ?></b></p>

        <a href="edit.php?id=<?= $user->id ?>" class="btn btn-default">Edit Details</a>
        <a href="edit_pass.php?id=<?= $user->id ?>" class="btn btn-default">Change Password</a>

      </div>
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
