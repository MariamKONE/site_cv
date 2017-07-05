<?php
require '../connexion\connexion.php'
//se connecter

?>
<?php if (!empty($_GET)){

    header("location: ../admin/competences.php");
}
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Mon css -->
    <link rel="stylesheet" href="/site_cv/css/style.css">

</head>

<body id="page-top">

    <?php

        $sql = $pdoCV->query(" SELECT * FROM utilisateurs WHERE id_utilisateur='1' ");
        $ligne = $sql ->fetch();//siginifie 'récupérer' dans la table utilisateur


        $titre = $pdoCV->query("SELECT * FROM titres_cv WHERE utilisateur_id='1' ");
        $ligne_titre = $titre ->fetch();//récupérer les informations de la table titre



     ?>
     <!-- Navigation -->
     <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand" href="#">Admin <?php echo $ligne['prenom'],' '.$ligne['nom'];?></a>
         <div class="collapse navbar-collapse" id="navbarExample">
             <ul class="sidebar-nav navbar-nav">
                 <li class="nav-item active">
                     <a class="nav-link" href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="fa fa-fw fa-area-chart"></i> Charts</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="fa fa-fw fa-table"></i> Tables</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"><i class="fa fa-fw fa-wrench"></i> Components</a>
                     <ul class="sidebar-second-level collapse" id="collapseComponents">
                         <li>
                             <a href="#">Fixed Navigation</a>
                         </li>
                         <li>
                             <a href="#">Custom Card Examples</a>
                         </li>
                         <li>
                             <a href="#">Blank Page</a>
                         </li>
                         <li>
                             <a href="#">Login Page</a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"><i class="fa fa-fw fa-sitemap"></i> Menu Levels</a>
                     <ul class="sidebar-second-level collapse" id="collapseMulti">
                         <li>
                             <a href="#">Second Level Item</a>
                         </li>
                         <li>
                             <a href="#">Second Level Item</a>
                         </li>
                         <li>
                             <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                             <ul class="sidebar-third-level collapse" id="collapseMulti2">
                                 <li>
                                     <a href="#">Third Level Item</a>
                                 </li>
                                 <li>
                                     <a href="#">Third Level Item</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
             </ul>
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-fw fa-envelope"></i> <span class="hidden-lg-up">Messages <span class="badge badge-pill badge-primary">12 New</span></span>
                         <span class="new-indicator text-primary hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">12</span></span>
                     </a>
                     <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                         <h6 class="dropdown-header">New Messages:</h6>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">
                             <strong>David Miller</strong> <span class="small float-right text-muted">11:21 AM</span>
                             <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">
                             <strong>Jane Smith</strong> <span class="small float-right text-muted">11:21 AM</span>
                             <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">
                             <strong>John Doe</strong> <span class="small float-right text-muted">11:21 AM</span>
                             <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item small" href="#">
                             View all messages
                         </a>
                     </div>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-fw fa-bell"></i> <span class="hidden-lg-up">Alerts <span class="badge badge-pill badge-warning">6 New</span></span>
                         <span class="new-indicator text-warning hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">6</span></span>
                     </a>
                     <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <form class="form-inline my-2 my-lg-0 mr-lg-2">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Search for...">
                             <span class="input-group-btn">
                         <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                     </span>
                         </div>
                     </form>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#"><i class="fa fa-fw fa-sign-out"></i> Logout </a>
                 </li>
                 <span class="time" style="color:white;">
                     <?php $dt = new DateTime();
                     echo $dt->format('d-m-Y H:i:s');?>
                </span>
             </ul>
         </div>
     </nav>

<div class="card mb-3">
    <?php
    $competence = $pdoCV->query("SELECT * FROM competences WHERE utilisateur_id='1' ORDER BY competence ASC ");
    $nbr_compentences = $competence->rowCount(); //compter le nombre de compétences
    $ligne_competences = $competence ->fetchAll();//tout récupérer les informations de la table competence
     ?>
    <div class="card-header">
        <i class="fa fa-table"></i> Compétences
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                    <tr>
                        <th><?php echo $nbr_compentences?> Competences </th>
                    </tr>
                <tbody>
                    <?php foreach ($ligne_competences as $ligne_competence) {
                        echo '<tr>
                                  <td>'.$ligne_competence["competence"].'</td>
                                  <td><i class="fa fa-times" aria-hidden="true"></i></span><a href="competences.php?id_competence='.$ligne_competence["id_competence"].'">Supprimer</a></td>
                              </tr>';
                    }
                     ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php

    //--------- INSERER UNE COMPETENCE
if ($_POST){
    	$pdoCV->query("INSERT INTO competences(competence,utilisateur_id)VALUES('$_POST[competence]','1')");
    }

    //--------- SUPPRIMER UNE COMPETENCE
if (isset($_GET['id_competence'])){
    $efface = $_GET['id_competence'];
    $sql = "DELETE FROM competences WHERE id_competence ='$efface'";
    $pdoCV->query($sql);//ou on peut mettre exec
    header("location: ../admin/competences.php");
    }
?>
        <div class="card-block">
        <table class="table table-bordered"  width="100%" id="dataTable" cellspacing="0">
                <tr>
                    <th style="width:100%"> Ajouter une compétence</th>
                </tr>
                <tbody>
                    <form class="" action="competences.php?action=1" method="post">
                      <tr>
                          <td><input type="text" name="competence" class="form-control" placeholder="Saisir une nouvelle compétence"></td>
                           <td><input type="submit" value="Ajouter une competence"></td>
                      </tr>
                      </form>
                </tbody>
        </table>
    </div>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/tether/tether.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/sb-admin.min.js"></script>

        <script type="text/javascript">

        $(function(){
            $('form').on("submit",function(e){
            });
        });

        </script>


    </body>

    </html>
