<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>My PickUp</title>
</head>

<h1> Bienvenue sur My Pickup ! </h1>



   <?php require_once('header.php'); 
       ?>
</br>

<br/>
<a href="deconnexion.php">Déconnexion</a>
</br>



<?php
include_once'Classes/Users.php';
include_once 'Classes/Posts.php';
require_once('Classes/Stock.php');
   $newstock = new Stock();

  
if (isset($_SESSION['utilisateur'])){
    $user = $_SESSION['utilisateur'];
    if (is_file('utilisateur/'.$user.'.txt')){
        
       $contenu= $newstock->readUser($user);
        echo $newstock->asHtml($contenu);

    }
}
$listeAnnonce = $newstock->readPosts();

foreach ($listeAnnonce as $annonce){

   echo '<br/>'.$annonce->htmlpost();
}



?>

</html>