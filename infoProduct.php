<?php
//Start session user
session_start();
//page for data access
include("Template/header.php");
require "Model/function.php";

// var of board
$products = getProducts();
// If the ID is present
if (isset($_GET['id'])) {
    $id= $_GET['id'];
}
// var_dump($products[$id]);

?>

  <div class="mb-5 d-flex justify-content-between">
    <article class="h-100 w-50">
      <a href="products.php" type="button" class="btn btn-primary h-25" "text-white"><i class="fas fa-arrow-circle-left"></i> Retour à la page des produits</a>
      <h2 class="mt-4 mb-4">Infos du produit</h2>
      <div class="pb-5 d-flex justify-content-between">
        <ul class="list-group w-100">
          <!-- view name -->
          <li class="list-group-item active">Nom: <?php echo $product["name"] ?></li>
          <!-- view price -->
          <li class="list-group-item">Prix: <?php echo $product["price"] ?></li>
          <!-- view stock -->
          <li class="list-group-item">Stock: <?php echo $product["stock"] ?></li>
          <!-- view description -->
          <li class="list-group-item">Description: <?php echo $product["description"] ?></li>
          <!-- view category -->
          <li class="list-group-item">Catégories: <?php echo $product["category"] ?></li>
          <!-- view made_in -->
          <li class="list-group-item">Lieu de fabrication: <?php echo $product["made_in"] ?></li
        </ul>
      </div>
    </article>
    <!-- load Aside -->
    <?php include("Template/aside.php"); ?>
  </div>

<!-- load Footer -->
<?php include("Template/footer.php") ?>
