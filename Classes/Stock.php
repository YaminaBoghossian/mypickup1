<?php

// CLASS CREATION => DATABASE => USERS COMMENTS AND POSTS//

class Stock {

    function createPost(Posts $post) {
        if (!is_dir('annonce')) {
            mkdir('annonce');
        }

        $postStock = serialize($post);
        $newpost = fopen('annonce/' . $post->getPosttitle() . ".txt", "x+");
        fwrite($newpost, $postStock);
        fclose($newpost);
    }
    
    function readPost(String $title) : Posts{
        // regarder si le fichier titre.txt existe
        // unserialize du contenu de titre.txt
        // retourner le post
    }
    
    function readPostsList() :Array {
        // lister le contenu du dossier annonce
        // ouvrir les fichiers un à un
        // unserialize le contenu du fichier
        // ajouter le post au tableau
        // retourner le tableau
    }

    function createUser(Users $user) {

        if (!is_dir('utilisateur')) {
            mkdir('utilisateur');
        }

        $userStock = serialize($user);
        $new_file = fopen("utilisateur/" . $user->getUsername() . ".txt", "x+");
        //On met son mdp encrypté dedans
        fwrite($new_file, $userStock);
        //on ferme le fichier
        fclose($new_file);
    }
    
    // TODO : implémenter en premier à partir de login.php
    function readUser(String $username) :Users {
        // regarder si le fichier toto.txt existe
        // unserialize du contenu de toto.txt
        // retourner l'utilisateur toto
    }

    function readUsersList() :Array {
        // lister le contenu du dossier utilisateur
        // ouvrir les fichiers un à un
        // unserialize le contenu du fichier
        // ajouter le user au tableau
        // retourner le tableau
    }
}
