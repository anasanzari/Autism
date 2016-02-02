<?php


require __DIR__.'/../vendor/autoload.php';
require '../config.php';
require_once '../helpers/session.php';
require '../helpers/boot.php';
require_once '../helpers/User.php';
require_once '../helpers/Video.php';




if(isset($_POST['upload']))
{


  $allowedExts = array( "avi", "flv", "mp4", "3gp");
  $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  if (($_FILES["file"]["type"] == "video/3gpp")
  && ($_FILES["file"]["size"] < 2000000)
  && (in_array($extension, $allowedExts)))

    {

    if ($_FILES["file"]["error"] > 0)
      {
      echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
      }
    else
      {
      echo "Upload: " . $_FILES["file"]["name"] . "<br />";
      echo "Type: " . $_FILES["file"]["type"] . "<br />";
      echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
      echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

      if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
        echo $_FILES["file"]["name"] . " already exists. ";
        }
      else
        {
        $video = new Video;
        $video->name = $_POST['vid_name'];
        move_uploaded_file($_FILES["file"]["tmp_name"],
        "upload/" . $_FILES["file"]["name"]);
        $video->link =  "upload/" . $_FILES["file"]["name"];
        $video->save();
        }
      }
    }
  else
    {
    echo "Invalid file";
    }



}
?>


<div class="wrapper">




  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

        <form action="create.php" method="post" class="horizontal-form"  enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
              <input class="form-control" type="text" name="vid_name">
          </div>
          <div class="form-group">
            <label>Video</label>
              <input class="form-control" type="file" name="file" id="file" />
          </div>
          <div class="form-group">
              <input class="form-control btn btn-primary" type="submit" value="upload" name="upload">
          </div>
        </form>
      </div>
  </div>
</div>
</div>
  </body>
</html>
