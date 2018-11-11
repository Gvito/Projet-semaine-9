<?php
$code = "";
$pattern = '/(?=.*[A-Z]{1,})(?=.*[0-9]{1,}).{6,}/';
// si le formulaire est complet
if (isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['repeatpassword']) && isset($_POST['inlineRadioOptions'])) {
    // protège mon formulaire du HT
    $htmlspe = ['user_name', 'user_password', 'repeatpassword'];
    $_POST[$htmlspe] = htmlspecialchars($_POST[$htmlspe]);

  if (strlen($_POST['user_name']) < 3) {
     // Si le nom ne comporte pas les bonnes conditions
     $code .= "0";
  }

  if ($_POST['user_password'] != $_POST['repeatpassword']) {
    // Si le password de confirmation n'est pas identique
     $code .= "1";
  }

  if (!preg_match($pattern, $_POST['user_password'])) {
     // Si le password ne comporte pas les bonnes conditions
     $code .= "2";
  }

  if (empty($_POST['inlineRadioOptions'])) {
     $code .= "3";
  }

  if (empty($code)) {
    header("Location: index.php");
    exit;
  }

  else {
    header("Location: signHome.php?code=$code");
    exit;
  }

}

 ?>
