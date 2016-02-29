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

$user = User::find($session->getUsername());
$articles = Article::all();
?>

<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'user_nav',['active'=>'article','user'=>$user]); ?>


<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <h2>Articles</h2>

        <div class="container-fluid">

          <div class="row">
            <?php
            foreach($articles as $article)
            {?>
            <div class="col-md-4">
              <div class="card">
                <h2><i class="small fic fa fa-pencil"></i> <?= $article->name ?></h2>
                <h4><i class="auth fic fa fa-user"></i> <?= $article->author ?></h4>
                <a href="./read.php?id=<?=$article->id?>" class="btn btn-default">Read</a>
              </div>
            </div>
            <?php }
            ?>

          </div>

        </div>

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
