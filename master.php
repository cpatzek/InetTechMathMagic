<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- SKALIERUNG -->
    <meta name="description" content="Mathe Nachhilfe">
    <meta name="author" content="AA_EE_CP">
    <title>Mathe-Hilfe für alle</title>
	 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet"> <!-- Style Zeug! -->
	<!-- Für die Logos/Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    
  </head>

  <body onload=initMap()>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
          <a class="navbar-brand" href="./start.php">
			<img src="img/mm.png" alt="Mathe-Magier">
		  </a>
		  
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./start.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rechnungen<b class="caret"></b></a>
              <ul class="dropdown-menu">
             	<li class="dropdown-header">Flächen</li>
                <li><a href="#quadrat" data-toggle="modal">Quadrat</a></li>
                <li><a href="#">Rechteck</a></li>
				<li><a href="#">Kreis</a></li>
              </ul>
            </li>   
			<li>  
             <!--   <a href="?page=maps" data-toggle="modal">Persönliche Nachhilfe</a>-->
                <a href="./maps.php" data-toggle="modal">Persönliche Nachhilfe</a>
            </li>			
            <li><a href="#contact" data-toggle="modal">Kontakt</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
			    
    <!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>© 2017 MATHE-MAGIER</p>
    		</div>
    		<div class="navbar-text pull-right">
    			<a href="https://de-de.facebook.com/htwsaar"><i class="fa fa-facebook-square fa-2x"></i></a>
    			<a href="https://twitter.com/htw?lang=en"><i class="fa fa-twitter fa-2x"></i></a>
    			<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
    		</div>
    	</div>
    </div>

      <?php
        //if((($_GET['page'])=="maps")){
      //      header('Location: master.php') and
    //        include('maps.php');
  //      }
      ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Am Ende der Seite anhängen um schneller zu laden, weiß nicht ob das stimmt :/ -->
      <div class="modal fade" id="contact" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!--mail-->
                  <!--<form class="form-horizontal" role="form" action="/mail.php" method="POST"> <!--Formular-Klasse-->
                  <form class="form-horizontal" role="form" method="post">
                      <!--Formular-Klasse-->
                      <div class="modal-header">
                          <h4>Kontakt</h4>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="kontakt-name" class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="uname" class="form-control" id="" placeholder="Ihr Name" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="kontakt-email" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="email" name="emailadr" class="form-control" id="kontakt-email" placeholder="max@muster.com" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="kontakt-nachricht" class="col-sm-2 control-label">Nachricht</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" name="nachricht" rows="4"></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <a href="mail.php" class="btn btn-default" data-dismiss="modal">Schließen</a>
                          <a href="mail.php" class="btn btn-default">test</a>
                          <button type="submit" class="btn btn-primary">Senden</button>
                      </div>
                  </form>




              </div>
          </div>
      </div>

          <!-- Modal HTML -->
          <div id="quadrat" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Quadratfläche</h4>
                      </div>
                      <div class="modal-body">
                          <label for="lSeitenlaenge">Seitenlänge</label>
                          <input id="userEingabe1" type="text" size="2" maxlength="6" />
                          <br />
                          <label>Quadrat-Fläche:  </label>
                          <br />
                          <div id="flaecheErg"></div>
                          <label>Quadrat-Umfang:  </label>
                          <br />
                          <div id="umfangErg"></div>
                          <label>Quadrat-Diagonale:  </label>
                          <br />
                          <div id="diagonaleErg"></div>
                          <div id="fehlerEingabe"></div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="onButtonClick()">Lösen</button>
                      </div>
                  </div>
              </div>
          </div>



          <!--Scripte-->
          <!--google-maps AKI-Key-->
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2hbKKcyaTJABv37h5XuXHEwt-6T-GQnw&callback=initMap"
              type="text/javascript"></script>
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->

          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
          <!-- <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>-->
          <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>


        <script src="js/bootstrap.min.js"></script>
        <script src="js/mail.js"></script>
        <script src="js/flaeche.js"></script>
        <script src="js/maps.js"></script>
        <script src="js/pruefung.js"></script>

    </body>
</html>