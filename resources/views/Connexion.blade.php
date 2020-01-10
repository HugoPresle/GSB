<header> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" > 
</header>

<?php
 include 'Header.php';
?>
<br><br><br><br><br><br><br><br>

<body class="text-center">
  <form style="width: 100%; max-width: 330px; padding: 15px; margin: auto;">
    <h1 class="h3 mb-3 font-weight-normal">S'identifier </h1>
    <label for="inputMail" class="sr-only">Adresse mail </label>
    <input type="Mail" id="inputMail" class="form-control" placeholder="Saisissez votre adresse mail" required="" autofocus="">
    <label for="inputMdp" class="sr-only">Mot de passe :</label>
    <input type="Mdp" id="inputMdp" class="form-control" placeholder="Saisissez votre mot de passe" required="">
    <br>
    <button class="btn btn-lg btn-dark btn-block" type="submit">Se connecter</button>
    <br>
  </form>
  <form style="width: 100%; max-width: 330px; padding: 15px; margin: auto;" action="" method='post'>
    <button class="btn btn-lg btn-dark btn-block" formaction="Inscription">Créer mon compte</button>
  </form>
<body>

