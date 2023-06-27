<?php
session_start();
require('../actions/database.php');

if (isset($_GET['id']) AND !empty($_GET['id'])) {
    //Une fois l'id récupéré,vérifier dans la BDD si l'id correspond bien a l'id d'un user .
    $getId = $_GET['id'];
    $recupUsers = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $recupUsers->execute(array($getId));
    if ($recupUsers->rowCount() > 0) {
        $supprimeUser = $bdd->prepare('DELETE FROM users WHERE id = ?');
        $supprimeUser->execute(array($getId));

        header('Location: users.php');
    }else {
        echo "Aucun membre n'a été trouvé";
    }
}else{
    
    echo "L'identifiant n'a pas été récupérer";
}


?>