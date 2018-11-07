<?php
// on vérifie si le formulaire est completé
if (isset($_POST['user_name, user_password, repeatpassword'])) {
    // protège mon formulaire du HTML
    $_POST['user_name, user_password, repeatpassword'] = htmlspecialchars($_POST['user_name, user_password, repeatpassword']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#(a-zA-Z{3,})#", $_POST['user_name'])) {

      if (preg_match("#(a-z([A-Z]{1})([1-9]{1}){6,})#", $_POST['user_password'])) {

        if ($user_password == $repeatpassword) {

        }

      }

    }

    header("Location: signHome.php?message=");
    exit;
}




// si mon formulaire n'est pas completé
else {
  header("Location: signHome.php?message=Veuillez remplir toutes les conditions");
  exit;
}

 ?>
