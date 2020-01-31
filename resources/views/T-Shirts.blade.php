@extends('layouts.app')

@section('content')

<br>

<form action="" method='get'>
  <div class="container">
    <div class="row">
      <div class ="col-md-3">
        <button formaction="../../Article/T-Shirts">T-Shirts</button>
      </div>
      <div class ="col-md-3">
        <button formaction="../../Article/Sweatshirts">Sweatshirts</button> 
      </div>
      <div class ="col-md-3">
        <button formaction="../../Article/Accessoires">Accessoires</button>
      </div>
      <div class="form-group col-md-3">
        <select id="inputState" class="form-control" onChange="location = this.options[this.selectedIndex].value;">
          <option selected>Trier par</option>
          <option value="../Article/T-Shirts/asc">Prix (- cher)</option>
          <option value="../Article/T-Shirts/desc">Prix (+ cher)</option>
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
      <img src='<?=$produit->image?>' style="height:250px;width:100%" />
        <div class="card-body">
            <h5 class="card-title"> <?=$produit->libelle?> </h5>
            <p class="card-text"> <?=$produit->description?> </p>
            <p class="card-text"> <?=$produit->prix?>€ </p>
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
@endsection