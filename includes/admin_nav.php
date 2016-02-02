<?php
function active($params,$value){
  if($params['active']==$value){
    return 'class="active"';
  }
}
if($params['page']=='article'){
$videolink = "../videos/index.php";
$articlelink = "./index.php";
}else{
  $videolink = "./index.php";
  $articlelink = "../articles/index.php";
}

 ?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Trainer</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li <?=active($params,'article')?>><a href="<?=$articlelink?>"><i class="fa fa-pencil"></i> Articles</a></li>
            <li <?=active($params,'video')?>><a href="<?=$videolink?>"><i class="fa fa-play"></i> Videos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-user">

            <li class="">
               <a href="../../logout.php" ><i class="fa fa-user"></i> Logout</a>
           </li>
        </ul>
    </div>
</nav>
