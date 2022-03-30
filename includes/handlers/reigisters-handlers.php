<?php 

function sanitizeFormPassword($unputText) {
     $inputText = strip_tags($inputText);
     return $inputText;
}

function sanitizeFormUsername($iunputText) {
     $inputText = strip_tags ($inputText);
     $inputText = str_replace(" ", "",$inputText);
     return $inputText;
}

function sanitizeFormUsername($iunputText) {
     $inputText = strip_tags ($inputText);
     $inputText = str_replace(" ", "",$inputText);
     $inputText = ucfirst(strtolower($inputText));

}

 if(isset($_POST['loginbutton'])) {
     //login button was pressed

}

if(isset($_POST['loginbutton'])) {
  //Register button was pressed
  $username = sanitizeFormUsername($_POST['username']);   

  $firstName = sanitizeFormString($_POST['firstName']);   

  $lastName = sanitizeFormString($_POST['lastName']);   

  $email = sanitizeFormString($_POST['email']);   

  $email2 = sanitizeFormString($_POST['email2']);   

  $username = sanitizeFormPassword($_POST['password']);   

    $username = sanitizeFormPassword($_POST['password2']);   
}






?>
 