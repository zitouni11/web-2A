<?php
    include "../Controller/evenementC.php";
    $evenementC=new evenementC();
    $Liste=$evenementC->afficherevenementtri1();
    $bdd=new PDO('mysql:host=localhost;dbname=gestion_des_evenements', 'root', '',);
$Liste = $bdd->query('SELECT * FROM evenement ORDER BY nom');
if (isset ($_GET['s']) AND !empty($_GET['s'])){
    $recherche =	htmlspecialchars($_GET['s']);
  $Liste = $bdd->query('SELECT * FROM evenement WHERE nom  LIKE "%' .$recherche .'%" '  ); 
    }
    ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>List Events</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/tooplate-artxibition.css">
<!--

Tooplate 2125 ArtXibition

https://www.tooplate.com/view/2125-artxibition

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** 
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
     ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Art<em>Xibition</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="rent-venue.html">Rent Venue</a></li>
                            <li><a href="shows-events.html" class="active">Shows & Events</a></li> 
                            <li><a href="tickets.html">Tickets</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Event Details</h2>
                    <span>Check out our latest Shows & Events and be part of us.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="shows-events-schedule">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
    <?php
    $con = new PDO('mysql:host=localhost;dbname=gestion_des_evenements', "root", "");

    // Check if a search query has been submitted
    if (isset($_POST["search"])) {
        $searchTerm = $_POST["search-area"];
        $query = "SELECT * FROM evenement WHERE nom LIKE '%$searchTerm%'";
    } else {
        $query = "SELECT * FROM evenement";
    }

    // Execute the query
    $rep = $con->query($query);

    // Check if there are any results
    if ($rep->rowCount() > 0) {
        while ($ligne = $rep->fetch()) {
            ?>
            <ul>
                <li>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="title">
                                <h4><?php echo $ligne["nom"]; ?></h4>
                                <span><?php echo $ligne["id_categorie"]; ?></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="time"><span><i class="fa fa-clock-o"></i><?php echo $ligne["date_debut"]; ?><br><?php echo $ligne["date_fin"]; ?></span></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="place"><span><i class="fa fa-map-marker"></i><?php echo $ligne["description"]; ?></span></div>
                        </div>
                        <div class="col-lg-3">
                            
                        </div>
                    </div>
                </li>
            </ul>
        <?php
        }
    } else {
        ?>
        <p>No events found</p>
    <?php
    }
    ?>
    <form method="POST">
        <input type="text" name="search-area" placeholder="Search for an event">
        <input type="submit" name="search" value="Search">
    </form>
</div>


                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- *** Subscribe *** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- *** Footer *** -->
    <footer>
        <div class="container">
            <div class="row">
                
                
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Open Hours</h4>
                        <ul>
                            <li>Mon to Fri: 10:00 AM to 8:00 PM</li>
                            <li>Sat - Sun: 11:00 AM to 4:00 PM</li>
                            <li>Holidays: Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <p></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span>Art<em>Xibition</em></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu">
                                    <ul>
                                        <li><a href="index.html" class="active">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="rent-venue.html">Rent Venue</a></li>
                                        <li><a href="shows-events.html">Shows & Events</a></li> 
                                        <li><a href="tickets.html">Tickets</a></li> 
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>

</html>