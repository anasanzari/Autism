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
  header("Location: ./login.php");
}

$articles = Article::all();

?>

<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'admin_nav',['active'=>'article']); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <h2>Articles</h2>
        <table class="table table-striped">
          <tr>
            <th>Name</th>
            <td>Author</th>
            <th>Links</th>
          </tr>
          <?php
          foreach($articles as $article)
          {?>
          <tr>
            <td><?= $article->name ?></td>
            <td><?= $article->author ?></td>
            <td>
              <a href="show.php?id=<?= $article->id ?>" class="btn btn-default">Show</a>
              <a href="edit.php?id=<?= $article->id ?>" class="btn btn-default">Edit</a>
              <a href="delete.php?id=<?= $article->id ?>" class="btn btn-default">Delete</a>
            </td>
          </tr>
          <?php }
          ?>
        </table>

        <a href="./create.php" class="btn btn-default">Create</a>

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
