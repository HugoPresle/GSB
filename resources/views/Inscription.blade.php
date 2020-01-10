<header> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" > 
</header>

<?php
 include 'Header.php';
?>

<br><br>

  <form>
    <div class="container">
         <br>
         <div class="form-group text-center">
              <p><b><h3> Créer mon compte <h3></b></p>
          </div>
          <br>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMail">Adresse mail :</label>
              <input type="Mail" class="form-control" id="inputMail" placeholder="Saisissez votre adresse mail">
            </div>
            <div class="form-group col-md-6">
              <label for="inputTelephone">Téléphone :</label>
              <input type="Telephone" class="form-control" id="inputTelephone" placeholder="Saisissez votre numéro de téléphone">
            </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputMdp">Mot de passe :</label>
              <input type="Mdp" class="form-control" id="inputMdp" placeholder="Saisissez un mot de passe">
            </div>
            <div class="form-group col-md-6">
              <label for="inputConfirmationMdp">Confirmation :</label>
              <input type="ConfirmationMdp" class="form-control" id="inputConfirmationMdp" placeholder="Confirmez votre mot de passe">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNom">Nom :</label>
              <input type="Nom" class="form-control" id="inputNom" placeholder="Saisissez votre nom">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPrenom">Prénom :</label>
              <input type="Prenom" class="form-control" id="inputPrenom" placeholder="Saisissez votre prénom ">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="example-date-input">Date de naissance :</label>
                <input class="form-control" type="date" value="2000-01-01" id="example-date-input">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAdresse">Adresse :</label>
              <input type="Adresse" class="form-control" id="inputAdresse" placeholder="Saisissez votre adresse">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputVille">Ville :</label>
              <input type="Ville" class="form-control" id="inputVille" placeholder="Saisissez votre ville">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPays">Pays :</label>
              <input type="Pays" class="form-control" id="inputPays" placeholder="Saisissez votre pays">
            </div>
          </div> 
          <br>

          <div class="text-center">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Valider mes informations
                </label>
              </div>
            </div> 
            <button type="submit" class="btn btn-dark">Créer mon compte</button>
          </div> <br>
      </div>
  </form>


