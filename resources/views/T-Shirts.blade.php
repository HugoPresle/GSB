<header> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" > 
</header>

<?php
 include 'Header.php';
?> 

<br>

<form action="" method='get'>
  <div class="container">
    <div class="row">
      <div class ="col-md-3">
        <button formaction="../T-Shirts">T-Shirts</button>
      </div>
      <div class ="col-md-3">
        <button formaction="../Sweatshirts">Sweatshirts</button> 
      </div>
      <div class ="col-md-3">
        <button formaction="../Accessoires">Accessoires</button>
      </div>
      <div class="form-group col-md-3">
        <select id="inputState" class="form-control">
          <option selected>Trier par</option>
          <option>Prix (- cher)</option>
          <option>Prix (+ cher)</option>
        </select>
      </div>
    <div>
  <div>
</form>


<div class="container-fluid">
  <div class="row">
  <?php
  foreach ($produits as $produit) 
  {
?>
    <div class="col-md-4">
      <div class="card text-center" style="width: 18rem;">
      <img src='<?=$produit->ProdImage?>' style="height:250px;width:100%" />
        <div class="card-body">
            <h5 class="card-title"> <?=$produit->ProdLibelle?> </h5>
            <p class="card-text"> <?=$produit->ProdDescription?> </p>
            <p class="card-text"> <?=$produit->ProdPrix?>€ </p>
            <a href="#" class="btn btn-dark">Ajouter au panier</a>
        </div>
      </div>
      <br>
    </div>
    <?php
      }
    ?>
  </div>
</div>
