<?php
//load Header
include "Template/header.php";

//error message sent
if(isset($_GET["message"])) {
  $message = htmlspecialchars($_GET["message"]);
  echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}
// message success
if (empty($code)) {
  echo '<div class="alert alert-success w-25 text-center mx-auto" role="alert"> ' . 'Vous êtes inscrit. Bienvenue !' . ' </div>';
}
 ?>

<form class="w-50 mx-auto my-5" action="login.php" method="post">
  <div class="form-group">
    <label for="userName">Nom</label>
    <input type="text" class="form-control" id="userName" name="user_name" required>
  </div>
  <div class="form-group">
    <label for="userPassword">Mot de passe</label>
    <input type="password" class="form-control" id="userPassword" name="user_password" required>
  </div>
  <p class="text-center"><button type="submit" class="btn lightBg mx-auto">Se connecter</button></p>
  <div class="d-inline text-right">
    <p class="mb-1"> Pas encore de compte ?</p>
    <p><a href="signHome.php" class="btn btn-primary">S'inscrire</a></p>
  </div>
</form>

 <?php
 //load Footer
 include "Template/footer.php"
  ?>
