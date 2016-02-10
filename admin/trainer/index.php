<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Video.php';
require_once '../../helpers/Article.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ../../login.php");
}

$users = User::all();

?>

<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'admin_nav',['page'=>'trainer','active'=>'trainer']); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <h2>Trainers</h2>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <td>Phone</th>
            <th>Email</th>
            <th>Videos</th>
            <th>Articles</th>
            <th>Links</th>
          </tr>
          <?php
          foreach($users as $user)
          {
            if($user->type == 3){?>
          <tr>
            <td><?= $user->name ?></td>
            <td><?= $user->phone ?></td>
            <td><?= $user->email ?></td>
            <td><?= sizeof($user->video) ?></td>
            <td><?= sizeof($user->article) ?></td>
            <td>
              <a href="edit.php?id=<?= $user->id ?>" class="btn btn-default">Edit</a>
              <a href="delete.php?id=<?= $user->id ?>" class="btn btn-default">Delete</a>
            </td>
          </tr>
          <?php }
        }
          ?>
        </table>

        <a href="./create.php" class="btn btn-default">Add New Trainer</a>

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
