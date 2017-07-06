<?php
/*
  Nous allons ici récupérer les données d'un post
  pour l'inscrire à notre site.
  L'inscription consistera à stocker dans un dossier
  les informations liees au post en question,
  /*on include stock qui contient les informations des POST */

include_once 'Classes/Stock.php';
include_once'Classes/Posts.php';
include_once 'Classes/Users.php';
 $post = new Stock();

if (isset($_POST['titre'])) {
    session_start();
    if (isset($_SESSION['utilisateur'])){
    $user = $_SESSION ['utilisateur'];
    if (is_file('utilisateur/'.$user.'.txt')){
        $newuser=$post->readUser($user);
        $post->createPost(new Posts($_POST['titre'], $_POST['lieudepart'], $_POST['lieuarrivee'], $_POST['date'], $_POST['time'], $_POST['prix'], $_POST['weight'], $_POST['infos'], $newuser ));
    }
    }
    
    //On récupère les variables
   
    //var_dump($newpost = new Posts($_POST['titre'], $_POST ['lieudepart'], $_POST['lieuarrivee'], $_POST['date'], $_POST['time'], $_POST['prix'], $_POST['weight'], $_POST['infos']));
    
  
}

?>
<a href="/mypickup1/index.php">Retour</a>

