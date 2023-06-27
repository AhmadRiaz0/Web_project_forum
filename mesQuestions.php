<?php 
    require('actions/users/securite.php'); //Permet à l'utilisateur d'etre rediriger vers la page d'accueil si pas authentifé
    require('actions/questions/mesQuestionsA.php'); 
    

?>
<!DOCTYPE html>
<html lang="en">
<?php include  'includes/head.php'?>
<body>
    <?php include 'includes/navbar.php'?>
    <br><br>
    <div class="container">
    <?php
        while($question = $getAllQuestions->fetch()){ //Récupérer chaque données
            ?>
            <!-- Dans Bootstrap rechercher 'card' -->
            <div class="card">
                <h5 class="card-header">
                    <a href="question.php?id=<?php echo $question['id']; ?>"><?= $question['titre'];?></a>
                    <p>Titre question: <?php echo $question['titre']; ?></p>
                </h5>
                <div class="card-body">
                    
                    <p class="card-text">
                        <p>Description: <?php echo $question['description']; ?></p>
                    </p>
                    <a href="question.php?id=<?php echo $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
                    <a href="lesQuestions?id=<?php echo $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                    <a href="actions/questions/supprimeQuestion.php?id=<?php echo $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
    
                </div>
            </div>
            <br>
            <?php
        }
    ?>
    </div>
</body>
</html>