<!--<html>
    
<form method="POST" action="#">
<label>Commentaire :</label>
   <input type="text" name="commentaire">
   <button>Publier</button>
</form>
<a href="deconnexion.php">Déconnexion</a>
<br/>

</html>

  
/*
if(isset($_POST['commentaire'])) {
   $commentaire = $_POST['commentaire'];
 
//On crée un nouveau fichier pour l'utilisateur
   $new_file = fopen("commentaire/".$commentaire.".txt", "x+");
   //On met son mdp encrypté dedans
   fwrite($new_file, $commentaire);
   //on ferme le fichier
   fclose($new_file);
}
$iterator = new DirectoryIterator('commentaire');
foreach($iterator as $fichier){
     
     echo 'Commentaire: <p>'.basename($fichier->getFilename(),'.txt').'</p><br>';*/
}

   ?>*/