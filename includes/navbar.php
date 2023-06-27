<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container-fluid">
     <!-- Brand/logo -->
  
    <a href="index.php"><i class="fa-solid fa-code text-light fa-2x mx-3"></i></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a href="#"><i class="fa-solid fa-display-code"></i></a>
      <a class="navbar-brand text-warning mx-0" href="#">Forum-</a>
      <a class="navbar-brand " href="#">Dev</a>
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  font-weight-bold px-3 "  href="index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  font-weight-italic px-3" href="publieQuestion">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link t font-weight-bold px-3" href="mesQuestions">Mes questions</a>
        </li>
        
        <?php
          if(isset($_SESSION['auth'])){
            ?>
              <li class="nav-item">
              <a class="nav-link font-weight-bold px-3" href="profile.php?id=<?php echo $_SESSION['id']; ?>">Mon profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  font-weight-bold px-3" href="actions/users/deconnexion.php">Deconnexion</a>
            </li>
          
        </li>
            <?php
          }
        ?>
        <?php
        if(!isset($_SESSION['auth'])){

          ?>
            <li class="nav-item">
          <a class="nav-link  font-weight-bold px-3" href="connexion">Se connecter</a>
          <?php
        }
        ?>
       
      </ul>
      
    </div>
  </div>
</nav>