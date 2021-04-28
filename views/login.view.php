<?php require("header.php") ?>


<div id="main-content">

<div class="container">

<h1 class="text-center">Connexion ! </h1>
<?php include('views/errors.php') ?>

<form method="post" >
<div class="form-group well" class="well col-md-6 col-md-offset-3">
    <label class="control-label" for="identifiant">Pseudo ou Adresse </label>
    <input type="text" value="<?= get_input('identifiant')?>" class="form-control" id="identifiant" name="identifiant"  required="required" placeholder="Entrer votre nom">
  </div>



  <div class="form-group">
    <label class="control-label" for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Mot de passe">
  </div>

  
  
  <button type="submit" value="Connexion" name="login" class="btn btn-primary">Connexion</button>
</form>
</div>
</div>

</body>