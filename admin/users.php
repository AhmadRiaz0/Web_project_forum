<?php 
    session_start();
    require('../actions/database.php');
    if(!$_SESSION['password']){
        header('Location: connexionAdmin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body>

    <?php 
        $recupUsers = $bdd->query('SELECT * FROM users');
        while($user = $recupUsers->fetch()){
            ?>
            <p><?= $user['pseudo']; ?> <a href="supprimeUser.php?id=<?= $user['id']; ?>">Supprimer le membre</a></p>
            <?php 
          
        }
    ?>
    <div class="container">
    <?php
        $recupUsers = $bdd->query('SELECT * FROM users');
        while($user = $recupUsers->fetch()){ 
            ?>
            
            <div class="card">
                <h5 class="card-header">
                <p><?= $user['pseudo']; ?></p>  
                </h5>
                <div class="card-body">
                
                    <p class="card-text">
                        
                    </p>
                    <a href="supprimeUser.php?id=<?= $user['id']; ?>" class="btn btn-danger">Supprimer le membre</a>
                   
    
                </div>
            </div>
            <br>
            <?php
        }
    ?>
    </div>
        
</body>
</html>