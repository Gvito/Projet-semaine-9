<?php
//Start session user
session_start();
//page for data access
include("Template/header.php");
require "Model/function.php";
?>

<a href="products.php" type="button" class="btn btn-primary" "text-white"><i class="fas fa-arrow-circle-left"></i> Retour à la page des produits</a>

<h2>Infos du produit</h2>

<!-- Aside user info -->
<?php include("Template/aside.php"); ?>

<?php include("Template/footer.php") ?>
