<?php

$messages= [
  'Le nom doit comporter au moins 3 caractères',
  'La confirmation du mot de passe n\'est pas identique',
  'Le mot de passe doit comporter au moins 6 caractères, une majuscule et un chiffre',
  'Veuillez choisir une sexe'
];
//load Header
include "Template/header.php";

//if there are a code on the URL
if (isset($_GET['code'])) {
//var code URL
$code = $_GET['code'];
  //loops the different error messages
  for ($i=0; $i < strlen($code); $i++) {
    // view error messages
    echo '<div class="alert alert-danger w-75 mx-auto" role="alert"> ' . $messages[$code[$i]] . ' </div>';
  }
}

?>


<form class="w-50 mx-auto my-5" action="sign.php" method="post">
  <div class="form-group">
    <label for="userName">Votre nom</label>
    <input type="text" class="form-control" id="userName" name="user_name" required>
  </div>
  <div class="form-group">
    <label for="userPassword">Votre mot de passe</label>
    <input type="password" class="form-control" id="userPassword" name="user_password" required>
  </div>
  <div class="form-group">
    <label for="userPassword">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="userPassword" name="repeatpassword" required>
  </div>
  <div class="form-group">
   <div class="text-center">
     <div class="form-check form-check-inline">
       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
       <label class="form-check-label" for="inlineRadio1">Homme</label>
     </div>
     <div class="form-check form-check-inline">
       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
       <label class="form-check-label" for="inlineRadio2">Femme</label>
     </div>
      <!-- <label class="user">Votre sexe</label>
      <option value="1" name='user_select'>Choisir un sexe</option>
      <option value="2" name="user_man">Homme</option>
      <option value="3" name="user_girl">Femme</option> -->
   </div>
  </div>
  <p class="text-center"><button type="submit" class="btn lightBg">S'inscrire</button></p>
  <div class="d-inline text-right">
    <p class="mb-1"> Déjà un compte ?</p>
    <p><a href="index.php" class="btn btn-primary">Se connecter</a></p>
  </div>
</form>

 <?php
 //load Footer
 include "Template/footer.php"
  ?>
