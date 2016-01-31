<?php
function active($params,$value){
  if($params['active']==$value){
    return 'class="active"';
  }
}
$user = $params['user'];
 ?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Autism Community</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li <?=active($params,'article')?>><a href="./index.php"><i class="fa fa-pencil"></i> Articles</a></li>
            <li <?=active($params,'video')?>><a href="#"><i class="fa fa-play"></i> Videos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$user->name?> <b class="caret"></b></a>
               <ul class="dropdown-menu">
                   <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                   <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                   <li class="divider"></li>
                   <li><a href="../../logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
               </ul>
           </li>
        </ul>
    </div>
</nav>
