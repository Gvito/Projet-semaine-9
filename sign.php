<?php
$code = "";
$pattern = '/(?=.*[A-Z]{1,})(?=.*[0-9]{1,}).{6,}/';
// if the form is complete
if (isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['repeatpassword']) && isset($_POST['inlineRadioOptions'])) {
    // protect my HTML form
    $htmlspe = ['user_name', 'user_password', 'repeatpassword'];
    $_POST[$htmlspe] = htmlspecialchars($_POST[$htmlspe]);

  if (strlen($_POST['user_name']) < 3) {
     // If the name does not have the right conditions
     $code .= "0";
  }

  if ($_POST['user_password'] != $_POST['repeatpassword']) {
    // If the confirmation password is not the same
     $code .= "1";
  }

  if (!preg_match($pattern, $_POST['user_password'])) {
     // If the password does not have the right conditions
     $code .= "2";
  }

  if (empty($_POST['inlineRadioOptions'])) {
    // If the choice does not have the right conditions
     $code .= "3";
  }

  if (empty($code)) {
    //redirection on the index page if there are a code in the URL
    header("Location: index.php");
    exit;
  }

  else {
    //code on the URL
    header("Location: signHome.php?code=$code");
    exit;
  }

}

 ?>
