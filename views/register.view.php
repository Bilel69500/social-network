<?php require("header.php") ?>


<div id="main-content">

<div class="container">

<h1 class="text-center">Devenez membre ! </h1>
<?php include('views/errors.php') ?>

<form method="post" >
<div class="form-group well" class="well col-md-6 col-md-offset-3">
    <label class="control-label" for="name">Nom</label>
    <input type="text" class="form-control" value="<?= get_input('name') ?>" id="name" name="name"  placeholder="Entrer votre nom">
  </div>

<div class="form-group">
    <label class="control-label" for="pseudo">Pseudo</label>
    <input type="text" class="form-control" id="pseudo" value="<?= get_input('pseudo') ?>" name="pseudo" required="required"   placeholder="Entrer votre Pseudo">
  </div>

<div class="form-group">
    <label class="control-label" for="email">Adresse email</label>
    <input type="email" class="form-control" id="email" value="<?= get_input('email') ?>" name="email" required="required" placeholder="Entrer votre email">
  </div>

  <div class="form-group">
    <label class="control-label" for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required="required" placeholder="Mot de passe">
  </div>

    <div class="form-group">
    <label class="control-label" for="password_confirm">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" placeholder="Mot de passe">
  </div>
  
  <button type="submit" value="Inscription" name="register" class="btn btn-primary">S'inscrire</button>
</form>
</div>
</div>

</body>