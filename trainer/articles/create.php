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


if(isset($_POST['create']))
{
  $article = new Article;
  $article->name = $_POST['name'];
  $article->author = $_POST['author'];
  $article->content = $_POST['content'];
  $article->save();
  header("Location: ./index.php");
}
?>
<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'admin_nav',['active'=>'article']); ?>


  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

        <form action="create.php" method="post" class="horizontal-form">
          <div class="form-group">
            <label>Author</label>
              <input class="form-control" type="text" name="author">
          </div>
          <div class="form-group" name="name">
            <label>Name of Article</label>
            <input class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content"></textarea>
          </div>
          <div class="form-group">
              <input class="form-control btn btn-primary" type="submit" value="submit" name="create">
          </div>
        </form>
      </div>
  </div>
</div>
</div>
  </body>
<r/html>
