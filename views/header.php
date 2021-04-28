<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/js/google-code-prettify/prettify.css">
<script src="https://kit.fontawesome.com/9a56e5c1e9.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">DevOps</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <?php if( is_logged_in() ): ?> 
        <a class="nav-link "  href="profile.php?id=<?= get_session('user_id') ?>">Mon Profil</a>
        </li>

         <a class="nav-link "  href="../share.php" >Partager</a>
        </li>
        <a class="nav-link "  href="../logout.php" >Déconnexion</a>
        </li>
        <?php else: ?>
                <li class="nav-item">
          <a class="nav-link "  href="../login.php" >Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../register.php">Inscription</a>
        </li>
          <?php endif; ?>
   
     
    </div>
  </div>
</nav>

 <?php include('views/flash.php');?>
