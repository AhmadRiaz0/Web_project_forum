<?php 
    session_start();
    if(!$_SESSION['password']){
        header('Location: connexionAdmin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body>
    <a href="users.php">Afficher tous les membres</a>
</body>
</html>