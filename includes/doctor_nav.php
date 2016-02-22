<?php
function active($params,$value){
  if($params['active']==$value){
    return 'class="active"';
  }
}
if($params['page']=='trainer'){
$doctorlink = "../doctor/index.php";
$trainerlink = "./index.php";
}else{
  $doctorlink = "./index.php";
  $trainerlink = "../trainer/index.php";
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
        <a class="navbar-brand" href="#">Doctor</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="#"><i class="fa fa-pencil"></i> Chat</a></li>
            <!--li <?=active($params,'trainer')?>><a href="<?=$trainerlink?>"><i class="fa fa-pencil"></i> Trainers</a></li>
            <li <?=active($params,'doctor')?>><a href="<?=$doctorlink?>"><i class="fa fa-play"></i> Doctors</a></li-->
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-user">

            <li class="">
               <a href="../logout.php" ><i class="fa fa-user"></i> Logout</a>
           </li>
        </ul>
    </div>
</nav>
