<header> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" > 
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../">GSB Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
        <form action="" method='post'>
        <button class="btn btn-outline-light mr-sm-2" formaction="Panier">Mon panier</button>
            <?php
                $co = true;
                if ($co) 
                { 
            ?>
                    <button class="btn btn-outline-light mr-sm-2" formaction="Connexion">Se connecter</button>
            <?php    
                } 
                else 
                { 
            ?> 
                    <button class="btn btn-outline-light mr-sm-2">Se déconnecter</button> 
            <?php 
                } 
            ?>
        </form>
    </div>
</nav>