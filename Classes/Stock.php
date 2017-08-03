<?php

// CLASS CREATION => DATABASE => USERS COMMENTS AND POSTS//

class Stock {

    function createPost(Posts $post) {
        if (!is_dir('annonce')) {
            mkdir('annonce');
        }

        $postStock = serialize($post);
        $newpost = fopen('../annonce/' . $post->getPosttitle() . ".txt", "x+");
        fwrite($newpost, $postStock);
        fclose($newpost);
    }
    
    
    
        // regarder si le fichier titre.txt existe
        // unserialize du contenu de titre.txt
        // retourner le post
   // }
    
    //function readPostsList() :Array {
        // lister le contenu du dossier annonce
        // ouvrir les fichiers un à un
        // unserialize le contenu du fichier
        // ajouter le post au tableau
        // retourner le tableau
    

    function createUser(Users $user) {

        if (!is_dir('utilisateur')) {
            mkdir('utilisateur');
        }

        $userStock = serialize($user);
        $new_file = fopen("../utilisateur/" . $user->getUsername() . ".txt", "x+");
        //On met son mdp encrypté dedans
        fwrite($new_file, $userStock);
        //on ferme le fichier
        fclose($new_file);
    }
    
    function readUser (string $username): Users{
      
        $contenu = unserialize(file_get_contents('../utilisateur/' . $username.  '.txt'));
        return $contenu;

    }
    
   
    
    function asHtml (Users $user){
    return '<pre>Username: '. $user->getUsername() .'</pre><pre>Email:'.
            $user->getEmail().'</pre>';
    }
    



    //function readUsersList() :Array {
        // lister le contenu du dossier utilisateur
        // ouvrir les fichiers un à un
        // unserialize le contenu du fichier
        // ajouter le user au tableau
        // retourner le tableau
    

   function readPosts(): Array {
       $dossier = '../annonce/';
       $files = scandir($dossier);
       $listeAnnonce = [];
       var_dump($files);
       foreach ($files as $contenupost) {
           if (!is_dir($contenupost)) {
               $listeAnnonce[] = unserialize(file_get_contents($dossier . $contenupost));
           }
       }
       return $listeAnnonce;
}}
   
    

    
