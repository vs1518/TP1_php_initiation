<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include 'includes/_head.php'; ?>
</head>

<body>
  <?php
  include 'includes/_navbar.php';
  include 'data.php';
  ?>
  <main class="bg-white container-lg py-4">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $intro; ?></h1>
    <div class="row">
      <?php
      foreach ($products as $product) {
      ?>
        <div class="col-12 col-md-3 col-lg-4 mb-3">
          <div class="card">
            <a href="images/<?php echo $product["image"]; ?>" 
              data-lightbox="produit" data-title="<?php echo $product["name"]; ?>">
              <img src="images/<?php echo $product["image"]; ?>" 
              class="card-img-top" alt="<?php echo $product["name"]; ?>">
            </a>
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo $product["name"]; ?></h5>
              <p class="card-text"><?php echo $product["price"]; ?> €</p>
              <a href="#" class="btn btn-dark">Voir le détail</a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/lightbox.min.js"></script>
</body>

</html>