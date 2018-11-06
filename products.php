<?php
//Start session user
session_start();
//any user = return page home
if(!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}
//page for data access
require "Model/function.php";
include "Template/header.php";
//the variable of the data tables
$products = getProducts();
 ?>

 <div class="row mt-5">
    <section class="col-lg-9">
      <h2>Nos produits</h2>
      <div class="container-fluide">
        <div class="row">
          <?php
            //Start product loops
            foreach ($products as $key => $product) {
          ?>
          <article class="col-lg-6 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $product["name"] ?></h5>
                <p class="card-text"><?php echo $product["description"] ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Prix : <?php echo $product["price"] ?></li>
                <li class="list-group-item">Lieu de production: <?php echo $product["made_in"] ?></li>
                <li class="list-group-item">Catégorie : <?php echo $product["category"] ?></li>
              </ul>
              <div class="card-body">
                <a type="button" href="#" class="btn btn-primary card-link text-white">Ajouter au panier</a>
                <a type="button" href="infoProduct.php" class="btn btn-primary card-link text-white">Info du produit</a>
              </div>
            </div>
          </article>
          <?php
          //End product loops
            }
           ?>
        </div>
      </div>
    </section>
    <!-- Aside user info -->
    <?php include "Template/aside.php"; ?>
  </div>

 <?php
 include "Template/footer.php"
  ?>
