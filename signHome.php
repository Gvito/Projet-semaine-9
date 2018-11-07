<?php
//load Header
include "Template/header.php";

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
  <select class="custom-select" required>
      <label name="userSexe">Votre sexe</label>
      <option value="1">Homme</option>
      <option value="2">Femme</option>
    </select>
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
