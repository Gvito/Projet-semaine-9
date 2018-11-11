<?php
//load page function
require "Model/function.php";
//if the POST is present
if(!empty($_POST)) {
  //clean the entries of the form
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }
  //var the board getUsers
  $users = getUsers();

  //check if we find a correspondence with the form's infomations
  foreach ($users as $user) {
    if($user["name"] === $_POST["user_name"] && $user["password"] === $_POST["user_password"]) {
      //If so, start a session to store user information
      session_start();
      $_SESSION["user"] = $user;
      // redirection on the products page
      header("Location: products.php");
      exit;
    }
  }
  //if there are no users with that name
  header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
  exit;
}
//If the form is not filled
else {
  header("Location: index.php?message=Vous devez remplir les champs du formulaire");
  exit;
}

 ?>
