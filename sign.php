<?php
$code = "";
$pattern = '/(?=.*[A-Z]{1,})(?=.*[0-9]{1,}).{6,}/';
// on vérifie si le formulaire est complet
if (isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['repeatpassword'])) {
    // protège mon formulaire du HT
    // $_POST['user_name, user_password, repeatpassword'] = htmlspecialchars($_POST['user_name, user_password, repeatpassword']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    // (strlen('user_name')
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

if (empty($code)) {
  header("Location: index.php?message=Vous êtes inscrit");
  exit;
} else {
  header("Location: signHome.php?code=$code");
  exit;
}

}
// si le formulaire n'est pas complet
else {
  header("Location: signHome.php?message=Veuillez remplir toutes les champs du formulaire");
  exit;
}

// header("Location: index.php?message=Vous êtes inscrit. Bienvenue !");
// exit;

 ?>
