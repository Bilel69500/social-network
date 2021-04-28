<?php include("header.php") ?>


<div id="main-content">

<div class="container">
    <div class="row">
        <div class="col-md-6">
        
        <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Profil de <?= e($user->pseudo)?></h3>
        </div>
        <div class="panel-body">
        
            <div class="row">
            <div class="col-md-5">
                <img src="<?= get_avatar_url($user->email) ?>" alt="Image de profil de <?= e($user->pseudo) ?>" class="img-circle">
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <strong><?= e($user->pseudo)?></strong><br>
                    <a href="mailto:<?=e($user->email) ?>"><?=e($user->email) ?></a> <br/>
                    <?= 
                    $user->city && $user->country ? '<i class="fa fa-location-arrow"></i> '.e($user->city).' - ' . e($user->country) . '<br/>' : '';
                     ?>
                </div>
                <div clas="col-sm-6">
                <?= 
                    $user->twitter ? '<i class="fab fa-twitter"></i> <a href="//twitter.com/'.e($user->twitter).'">@'.e($user->twitter).'</a><br/>' : '';
                     ?>

                <?= 
                    $user->github ? '<i class="fab fa-github"></i> <a href="//twitter.com/'.e($user->github).'">@'.e($user->github).'</a><br/>' : '';
                     ?>
                     <?= 
                    $user->sex = "H" ? '<i class="fa fa-male"></i>' : '<i class="fa fa-female"> </i>';
                    
                     ?>
                    <?= 
                    $user->available_for_job ? 'Disponible pour emploi' : 'Non disponible pour emploi';
                    
                     ?>
                </div>
            </div>
                <div class="row">
                <div class="col-md-12 ">
                    <h5>Biographie de <?= e($user->name) ?></h5>
                    <p>
                        <?=
                            $user->bio ? nl2br(e($user->bio)) : "Aucune biographie";
                        ?>
                    </p>
                </div>
                </div>
        </div>
        </div>
        </div>

        <div class="col-md-6">
                
        <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Compléter mon profil</h3>
        </div>
        <div class="panel-body">
           <?php include('views/errors.php') ?>

           <form method="post" autocomplete="off">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nom<span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nom" value="<?= get_input('name') ?: e($user->name) ?>" required="required" >
                    </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
                        <label for="city">Ville<span class="text-danger">*</span></label>
                        <input type="text" name="city" id="city" value="<?=  get_input('city') ?: e($user->city) ?>"  class="form-control" required="required"  >
                    </div>
           </div>
           <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Pays<span class="text-danger">*</span></label>
                        <input type="text" name="country" id="country" value="<?=  get_input('country') ?: e($user->country) ?>"  class="form-control"  required="required" >
                    </div>
           </div>
           <div class="col-md-6">
                    <div class="form-group">
                        <label for="sex">Sexe<span class="text-danger">*</span></label>
                        <select name="sex" id="sex" class="form-control">
                        <option value="H" <?= $user->sex == "H" ? "selected" : ""?>>
                        Homme
                        </option>
                        <option value="F"  <?= $user->sex == "F" ? "selected" : ""?>>
                        Femme
                        </option>
                        </select>
                    </div>
           </div>
           </div>
           <div class="row">
           <div class="col-md-6">
                    <div class="form-group">
                        <label for="twitter">Twitter<span class="text-danger">*</span></label>
                        <input type="text" name="twitter" id="twitter" value="<?=  get_input('twitter') ?: e($user->twitter) ?>"  class="form-control"   >
                    </div>
           </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="github">Github<span class="text-danger">*</span></label>
                        <input type="text" name="github" id="github" value="<?= get_input('github') ?: e($user->github) ?>"  class="form-control"  >
                    </div>
           </div>
           </div>

           <div class="row">
           <div class="col-md-12">
                    <div class="form-group">
                        <label for="available_for_job"> <input type="checkbox" name="available_for_job" id="available_for_job"  <?= $user->available_for_job  ? "checked" : ""?>> Disponible pour travailler ? 
                        </label?>
                        
                    </div>
           </div>
           </div>

           <div class="col-md-12">
                    <div class="form-group">
                        <label for="bio"> Biographie<span class="text-danger">*</span></label>
                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" required="required" placeholder="Racontez vos expérience"><?= get_input('bio') ?: e($user->bio) ?> </textarea>
                    </div>
           </div>
           </div>
           <input type="submit" class="btn btn-primary" value="Valider" name="update"/>
           </form>

        </div>
        </div>
        </div>
    </div>



</div>
</div>

</body>