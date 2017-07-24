<?php
/*
Nous allons ici récupérer les données d'un utilisteur
pour l'inscrire à notre site.
L'inscription consistera à stocker dans un fichier
le mot de passe de l'utilisateur en question, encrypte
/*on include stock qui contient les informations des utilisateurs */

include_once 'Classes/Stock.php';
include_once'Classes/Users.php';
include_once'signupform.html';


if(isset($_POST['pseudo'])
   && isset($_POST['mdp'])
        ){
   //On récupère les variables
    $user = new Stock();
    $user->createUser(new Users($_POST['pseudo'], md5($_POST['mdp'])));     
  
  
   
   //On crée un nouveau fichier pour l'utilisateur
 
   //On lance la session à l'inscription et on y
   //stock le nom d'utilisateur
   session_start();
   $_SESSION['utilisateur'] = $_POST['pseudo'];
   echo '<span style="color:green; font-weight: bold">You are now logged in!</span>';
   header('location: index.php');
}
?>

<a href="/mypickup1/index.php">Retour</a>

