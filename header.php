<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>
<body>
   <!--A afficher que si l'utilisateur n'est pas
loggé -->
<?php

session_start();
if(isset($_SESSION['utilisateur'])){
   echo '<p>Bonjour, '.$_SESSION['utilisateur'];
   
}else{
   echo '<p> M\'inscrire ou me connecter </p>';
   
?>

<form id="username" action="inscription.php" method="POST">
   <label>Pseudo :</label>
   <input type="text" name="pseudo">
   <label>Mot de Passe :</label>
   <input type="password" name="mdp">
   <label>Email:</label>
   <input type="text" name="mail">
   <button>S'inscrire</button>
</form>
<form id="password" action="login.php" method="POST">
   <label>Pseudo :</label>
   <input type="text" name="pseudo">
   <label>Mot de Passe :</label>
   <input type="password" name="mdp">
   <button>Connexion</button>
</form>

<?php } ?>
   <a href='deconnexion.php'> Se déconnecter </a>
</body>
</html>