<?php
    require('actions/users/securite.php'); 
    require('actions/questions/infosQuestion.php');
    require('actions/questions/insererQuestion.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
 <?php include 'includes/navbar.php'; ?>   
</body>
<br><br>
<div class="container"> <!--Classe qui permet d'appliquer des marges -->
        <?php 
            if(isset($errorMsg)){
                echo '<p class="text-danger">'.$errorMsg.'</p>'; 
            }
        ?>

        <?php 
            if(isset($question_content)){
                ?>
                <form  method="POST"> <!--"POST"=> envoyer des données d'un formulaire vers code PHP -->
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
                        <input type="text" class="form-control" name="title" value="<?php echo  $question_title; ?>"> <!--un name pour avoir accès a chaque données-->
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description de la question</label>
                        <textarea type="text" class="form-control" name="description" ><?php echo  $question_description; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
                        <textarea type="text" class="form-control" name="content" ><?php echo  $question_content; ?></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-primary" name="validate">Modifier la question</button>
                    
                </form>
                <?php

            }
        ?>
            

    
</div>
    

</html>