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
  header("Location: ../../login.php");
}

$f=4;
if(isset($_POST['upload']))
{
  $allowedExts = array("webm", "mp4" , "ogv");
  $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  if (($_FILES["file"]["size"] < 100000000)
  && (in_array($extension, $allowedExts)))

    {

    if ($_FILES["file"]["error"] > 0)
      {
      $f=0;
      echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
      }
    else
      {

      if (file_exists("../../videos/" . $_FILES["file"]["name"]))
        {
         $f=2;
        }
      else
        {
        $video = new Video;
        $video->name = $_POST['vid_name'];
        move_uploaded_file($_FILES["file"]["tmp_name"],
        "../../videos/" . $_FILES["file"]["name"]);
        $video->link =  $_FILES["file"]["name"];
        $video->type = $_FILES["file"]["type"];
        $video->level = $_POST['level'];
        $username = $_SESSION['username'];
        $video->user_id = $username;
        $video->save();
        $f=1;
        }
      }
    }
  else
    {
    $f=3;
    }
}
?>
<?php getTemplate(2,'header'); ?>

<div class="wrapper">

  <?php getTemplate(2,'trainer_nav',['page'=>'videos','active'=>'video']); ?>


  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <?php
         if($f!=4)
         {?>
            <?php
            if($f==0)
            {
              echo '<div class="alert alert-warning alert-dismissible">'.$_FILES["file"]["error"].'
              <button class="close" data-dismiss="alert">&times;</button></div>';
            }
            else if($f==1)
            {
              echo '<div class="alert alert-success alert-dismissible">Video Uploaded Successfully
              <button class="close" data-dismiss="alert">&times;</button></div>';
            }
            else if($f==3)
            {
              echo '<div class="alert alert-warning alert-dismissible">Invalid Video
              <button class="close" data-dismiss="alert">&times;</button></div>';
            }
            else
            {
              echo '<div class="alert alert-warning alert-dismissible">'.$_FILES["file"]["name"].' Already Exist
              <button class="close" data-dismiss="alert">&times;</button></div>';
            }
            ?>
          <?php
           } ?>

        <form action="create.php" method="post" class="horizontal-form" enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
              <input class="form-control" type="text" name="vid_name">
          </div>
          <div class="form-group">
            <label>Autism Level</label>
            <select class="form-control" name="level">
              <option value="1">NO AUTISM</option>
              <option value="2">MILD AUTISM</option>
              <option value="3">MODERATE AUTISM</option>
              <option value="4">SEVERE AUTISM</option>
            </select>
          </div>
          <div class="form-group">
            <label>Video</label>
              <input class="btn btn-primary file" type="file" name="file" id="file" />
          </div>
          <div class="form-group">
              <input class="form-control btn btn-primary" type="submit" value="upload" name="upload">
          </div>
        </form>
        <a href="./index.php" class="btn btn-default">View All Videos</a>
      </div>
  </div>
</div>
</div>
  </body>
<r/html>
