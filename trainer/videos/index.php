<?php

require __DIR__.'/../../vendor/autoload.php';
require '../../config.php';
require_once '../../helpers/session.php';
require '../../helpers/boot.php';
require '../../helpers/functions.php';
require_once '../../helpers/User.php';
require_once '../../helpers/Video.php';

$session = new Session();
if(!$session->getLoggedin()){
  header("Location: ./login.php");
}

$video = Video::all();

?>

<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'admin_nav',['page'=>'videos','active'=>'video']); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <h2>Videos</h2>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <th>Links</th>
          </tr>
          <?php
          foreach($video as $video)
          {?>
          <tr>
            <td><?= $video->name ?></td>
            <td>
              <a href="view.php?id=<?= $video->id ?>" class="btn btn-default">Watch Now</a>
              <a href="delete.php?id=<?= $video->id ?>" class="btn btn-default">Delete</a>
            </td>
          </tr>
          <?php }
          ?>
        </table>

        <a href="./create.php" class="btn btn-default">upload</a>

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
