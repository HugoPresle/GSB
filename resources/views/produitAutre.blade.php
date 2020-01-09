<header>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</header>
<br>
Autre
<div class="container-fluid">
	<div class="row">
    <?php
        foreach ($produits as $produit) 
        {
        ?>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header">
                <?=$produit->ProdLibelle?>
				</h5>
				<div class="card-body">
					<p class="card-text">
                    <?=$produit->ProdPrix?>
					</p>
				</div>
				<div class="card-footer">
                <?=$produit->ProdDescription?>
				</div>
                <img src='<?=$produit->ProdImage?>' style="height:300px;width:100%" />
			</div>
		</div>
        <?php
        }
        ?>
		<form action="" method='get'>
		ooooooo
		<button formaction="../Sweatshirt">Sweatshirt</button> 
		<button formaction="../T-Shirt">T-Shirt</button>
		<button formaction="../Autre/asc">croissant</button>
		<button formaction="../Autre/desc">decroissant</button>
		<button formaction="/">Anuller</button>

	
		
		</form>
		
		</form>
	</div>
</div>