<?php 
    session_start();
    if(isset($_POST['validate'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['password']) ){
            $defaultPseudo = "admin";
            $defaultPasword = "admin1234";

            $enteredPseudo = htmlspecialchars($_POST['pseudo']);
            $enteredPassword = htmlspecialchars($_POST['password']);

            if($enteredPseudo == $defaultPseudo AND $enteredPassword == $defaultPasword){
                $_SESSION['password'] = $enteredPassword;
                header('Location: indexAdmin.php');
            }else{
                echo "Votre mot de passe ou pseudo est incorrect";
            }

        }else{
            echo "Veuillez svp compléter tous les champs...";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php'; ?>
<body>
<br><br>
<form class="container" method="POST"> <!--"POST"=> envoyer des données d'un formulaire vers code PHP -->
      
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pseudo</label>
        <input type="text" class="form-control" name="pseudo"><!--un name pour avoir accès a chaque données-->
    </div>

    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
    <br><br>
    
</form>
</body>
</html>