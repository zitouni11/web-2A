<?php
include_once '../Model/evenement.php';
include_once '../Controller/evenementC.php';
    $id =(int) $_GET["id"];
    $con = new PDO ('mysql:host=localhost;dbname=gestion_des_evenements',"root","");
    //creation un variable chaine de caractere contenant la requete sql 
    $req ="select * from evenement where id = $id";
  //execution de la requete avec la methode query la reponse sera mise dans $rep
    $resp= $con->prepare($req);
    $resp->execute();
    $evenement = $resp->fetch();


?> 

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier evenement </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace de evenement </a>
                    </li> 
                    <h3 class="menu-title"> Espace de evenement</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="table-user.php">User</a></li>
                        
                        <li><i class="fa fa-table"></i><a href="table-evenement.php">Evenement</a></li>
                        <li><i class="fa fa-table"></i><a href="table-categorie.php">categorie</a></li>
                        
                        </ul>
                    </li>

   
                </ul>
        
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Espace Admin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Espace Admin</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active"> table de donnée </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style=" justify-content: center;">
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Evenement</strong>
                            </div>
                            <div class="card-body" >
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Modifier Evenement </h3>
                                        </div>
                                        <hr>
                                        <form action="modifierdevPHPE.php" method="POST">
                                            <input type="hidden" name="id" value="<?=$evenement["id"]?>">
                                            <div class="form-group">
                                                <label >Nom</label>
                                                <input type="text" name="nom"value="<?php echo $evenement["nom"]?>" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label >Date debut</label>
                                                <input type="date" name="date_debut"value="<?php echo $evenement["date_debut"]?>" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label >Date fin</label>
                                                <input type="date" name="date_fin"value="<?php echo $evenement["date_fin"]?>" class="form-control"  >
                                            </div>
                                            <div class="form-group">
                                                <label >description</label>
                                                <input type="text"  name="description" value="<?php echo $evenement["description"]?>" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label >categorie</label>
                                                <input type="text"  name="id_categorie" value="<?php echo $evenement["id_categorie"]?>" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label >user</label>
                                                <input type="text"  name="id_user" value="<?php echo $evenement["id_user"]?>" class="form-control" >
                                            </div>
                                            
                                           


                                                <div>
                                                    <button type="submit" class="btn btn-lg btn-info btn-block">

                                                        <span >modifier </span>

                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->




                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>