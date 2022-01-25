

<?php

require('database.php');

?>
<?php require('security.php') ; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Systéme d'information ENA</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
              </ul>
          
        </form>
     
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Authentification</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"></div>
             
              <a href="login.php" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Se Connecter
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Déconnexion
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">ENA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ENA</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Tableau de bord</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Tableau de bord</span></a>
             
            </li>
            <li class="menu-header">Scolarité</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-file-alt"></i> <span>Etudiant</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="ajout_Etudiant.php">Ajouter un étudiant</a></li>
                <li><a class="nav-link" href="affichage_liste_etudiant.php">Liste des étudiants</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Groupe</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="ajout_groupe.php">Crée un groupe</a></li>
                <li><a class="nav-link" href="affichage_liste_groupe.php">Liste des  groupes crées</a></li>
                
              </ul>
            </li>
            
            <li class=active><a class="nav-link" href="accueil.php"><i class="far fa-square"></i> <span>Accueil</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Services</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="ajout_Attestation_Inscription.php">Reçu de paiement</a></li>
              </ul>
            </li>

            
            <li class="menu-header"></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Année Universitaire</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="">2021/2022</a></li>
                
              </ul>
            </li>
           
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Niveaux</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="ajout_Classe.php">Ajouter une classe</a></li>
                <li><a class="nav-link" href="affichage_liste_classe.php">liste des classes</a></li>
                <li><a class="nav-link" href="liste_etudiant_classe.php">liste des étudiants par classes</a></li>
             
              </ul>
            </li>
            
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Module</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="ajout_Module.php">Ajouter un module</a></li>
                  <li><a class="nav-link" href="affichage_liste_module.php">Liste des modules</a></li>
                  <li><a class="nav-link" href="affichage_liste_module_classe.php">Liste des modules par classe</a></li>
                  
               
                </ul>
              </li>
             
                    </aside>
      </div>

        <!-- Main Content -->
        <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Ecole nationale d'architecture</h1>
            <div class="section-header-breadcrumb">
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Liste des groupes selon les classes</h2>
           

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                
                <div class="card-header">
                    
                  </div>
                  <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th scope="col">Code Classe</th>
                        <th scope="col">Année Universitaire</th>
                        <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  $getInfosOfThisGroupeReq = $bdd->query('SELECT * FROM groupe');
                            while($groupeInfos = $getInfosOfThisGroupeReq->fetch()) {  ?>
     <tr>
     <?php  
     echo "<tr>";

            echo "<td>".$groupeInfos['Code_Classe']."</td>";
            echo "<td>".$groupeInfos['Annee_Universitaire']."</td>"; 
        
            echo "<td><a href=\"editActionGroupe.php?id_Groupe=$groupeInfos[id_Groupe]\">Modifier</a> | <a href=\"delete_Groupe.php?id_Groupe=$groupeInfos[id_Groupe]\" onClick=\"return sure()\">Spprimer</a></td>";
                                 
                                  }?>
                                   
                                  <script>
                                function sure()
                                {
                                    return(confirm('Etes-vous sûr de vouloir supprimer ?'));
                                }
                                   </script>
     
                         
                        </tr>
                      </tbody>
                    </table>
                   
                  </div>
                </div>
               
               
              </div>
            </div>
          </div>
</section>
      <!-- Main Content -->
      
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Ecole Nationale d'architecture<a href=""></a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>