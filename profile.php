<?php
session_start();

include("filters/auth_filter.php");
require("includes/functions.php");
require("db/database.php");
if(!empty($_GET['id'])){
    $user = find_user_by_id($_GET['id']);


    if(!$user){
        redirect('index.php');
    }
} else{
    redirect('profile.php?id='.get_session('user_id'));
}

if(isset($_POST['update'])) {

    $errors = [];
    if (not_empty(['name','city','country','sex','bio'])){
        extract($_POST);

    $q = $db->prepare('UPDATE users SET name = :name, city = :city, country = :country, sex = :sex, twitter = :twitter, github = :github, available_for_job = :available_for_job, bio = :bio WHERE id = :id');
    $q->execute([
        'name' => $name,
        'city' => $city, 
        'country' => $country, 
        'sex' => $sex, 
        'twitter' => $twitter, 
        'github' => $github, 
        'available_for_job' => !empty($available_for_job) ? '1' : '0',
        'bio' => $bio, 
        'id' =>$_SESSION['user_id'],

    ]);
    set_flash('Votre profil a était mis à jour !');
    redirect('profile.php?id='.get_session('user_id'));
    } else{
        
        $errors[] = "Veuillez remplir tout les champs";
       }
 } else{
     clear_input_data();
 }
  require("views/profile.view.php");
?>
