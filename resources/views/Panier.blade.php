<!-- Affichage du header -->
@extends('layouts.app')

<!-- Début du body -->
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
      <br>
          <b>Voici le contenue de votre panier</b> <br>
          <small> Livraison gratuite pour toutes les commandes<small>
			</h3>
      <br><br><br>

<!-- Affichage des articles du panier -->
			<div class="row">
				<div class="col-md-9">
					<table class="table table-striped table-hover">
						<tbody>
							<tr class="table">
								<td>
								</td>

								<td>
								</td>

								<td>
                  					<input class="quantity" min="0" name="quantity" value="1" type="number">
								</td>

								<td>
									<form action="/" method="post">
										<button class="btn btn-dark"><i class="fa fa-trash-alt"></i></button>
									</form>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

<!-- Affichage et code du prix du panier -->
				<div class="col-md-3">

					<div class="card bg-default">
						<div class="card-body">
							<div class="row">
								<div class="col-md-5">
									<h6>Produits</h6>
								</div>
								<div class="col-md-7">
									<h6><h6>
								</div>
							</div>

							<div class="row">
								<div class="col-md-5">
									<h6>Livraison</h6>
								</div>
								<div class="col-md-7">
									<h6>gratuite<h6>
								</div>
							</div>
							<hr>

							<div class="row">
								<div class="col-md-5">
									<h5>Prix total</h5>
								</div>
								<div class="col-md-7">
									<h6><h6>
								</div>
							</div>
							
						</div>	   
					</div>

<!-- Affichage et code du bouton pour valider son panier -->
          <br>
					<button type="button" class="btn btn-md btn-dark">
						Valider mon panier
					</button>
          <br><br>
          
<!-- Affichage d'informations générales sur la commande -->
					<div class="card bg-default">
            			<div class="card-body">
							<div class="row">
								<div class="col-md-2">
									<h6><i class="fa fa-lock"></i></h6>
								</div>
								<div class="col-md-10">
									<h6>Paiement sécurisé<h6>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<h6><i class="fa fa-truck"></i></h6>
								</div>
								<div class="col-md-10">
									<h6>Livraison gratuite<h6>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<h6><i class="fa fa-hourglass-half"></i></h6>
								</div>
								<div class="col-md-10">
									<h6>Expédié en 48h maximum<h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		
<!-- Affichage du bouton de redirection vers la page d'accueil -->
			<form action="" method='get'>
				<button formaction="../../" class="btn btn-dark" >
					Continuer mes achats
				</button>
			</form>

		</div>
	</div>
</div>

@endsection
<!-- Fin du body -->