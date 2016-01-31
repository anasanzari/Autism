<?php

function getTemplate($level,$name,$params=[]){
   $s = "";
   if($level==0){
     $s = "./"; // current directory
   }else{
     for ($i=0; $i < $level ; $i++) {
       $s .= "../";
     }
   }
   require_once $s."includes/$name.php";
}

function getErrorMessages(){
  $messages = array(
      'required' => 'The :attribute field is required.',
      'max' => 'Please enter a valid :attribute number.',
      'min' => 'Please enter a valid :attribute field.',
      'email' => 'Please enter a valid email address.',
      'numeric' => 'The :attribute field should consist only of digits.',
      'integer' => 'The :attribute field should be selected.',
      'digits_between' => 'The :attribute field should be contain minimum of 10 digits.'
  );
  return $messages;
}

function printErrors($messages){
  echo '<ul class="alert alert-danger">';
  foreach ($messages->all() as $message){
      echo "<li>".$message."</li>";
  }
  echo "</ul>";
}

function printLoginErrors($error,$messages){
  if($error==ERROR_INVALID){
    echo '<p class="alert alert-danger">Invalid Email/Password.</p>';
  }else if($error==ERROR_VALFAIL){
    printErrors($messages);
  }
}

function printSignUpErrors($error,$messages){
  if($error==ERROR_DB){
    echo '<p class="alert alert-danger">Email already taken.</p>';
  }else if($error==ERROR_VALFAIL){
    printErrors($messages);
  }
}


 ?>
