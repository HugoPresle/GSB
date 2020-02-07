<!-- Affichage du header -->
@extends('layouts.app')

<!-- Début du body -->
@section('content')

<br>

<!-- Bouton de filtre pour l'affichage des articles -->
<form method='get'>
  <div class="container">
    <div class="row">
    <div class ="col-md-3">
        <button class='btn btn-dark' formaction="../../Article/T-Shirt">T-Shirts</button>
      </div>
      <div class ="col-md-3">
        <button class='btn btn-dark' formaction="../../Article/Sweatshirt">Sweatshirts</button> 
      </div>
      <div class ="col-md-3">
        <button class='btn btn-dark' formaction="../../Article/Accessoire">Accessoires</button>
      </div>
      <div class="form-group col-md-3">
        <select id="inputState" class="form-control" onChange="location = this.options[this.selectedIndex].value;">
          <option selected>Trier par</option>
          <option value="../../Article/All/asc">Prix (- cher)</option>
          <option value="../../Article/All/desc">Prix (+ cher)</option>
        </select>
      </div>
    <div>
  <div>
</form>
<br>

<!-- Affichage des articles dans des cards -->
<div class="container-fluid">
  <div class="row">
    @foreach ($produits as $produit)
    <div class="col-md-4">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="{{$produit->image}}"  style="height:300px;width:100%">
          </div>
          <div class="flip-card-back">
                <h4 class="card-title"> {{$produit->libelle}} </h4>
                <p class="card-text"> {{$produit->description}} </p>
                <p class="card-text"> {{$produit->prix}}€ </p>
                <form action="../Panier/Ajouter" method='post'>
                
                {{ csrf_field() }}
                  <input type="hidden" name='id' value='{{$produit->id}}'>
                  <input type="hidden" name='libelle' value='{{$produit->libelle}}'>
                  <input type="hidden" name='prix' value='{{$produit->prix}}'>
                  <button class="btn btn-dark">Ajouter au panier </button>
                </form>
                
          </div>
        </div>
        <br>
      </div>
      <br>
    </div>
    @endforeach
  </div>
  

  <div class="row">
    <div class="col-12 text-center">
      {{ $produits->links()}}
    </div>
  </div>
</div>

@endsection
<!-- Fin du body -->