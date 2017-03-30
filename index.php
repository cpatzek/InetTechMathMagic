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

  <body>
	<div class="container">	
		<div class="jumbotron text-center">
			<img src="img/mm.png" id="mmLogo" alt="Logo">
			<p id="websiteSlogan">Bietet Mathematik Nachhilfe für alle.</p>
			<!--Buttons-->
			<!-- <a href="#" class="btn btn-primary">Lernen</a>
			<a href="#" class="btn btn-success">Lösen</a> -->
		</div>

		<div class="row">
			<div class="col-sm-4">
				<a href="./ableitungen.php" class="thumbnail">
					<img src="img/ableit.png" alt="Ableitungen">
				</a>
				<h3>Ableitungen verstehen.</h3>
				<p>Die Differential- bzw. Differenzialrechnung ist ein wesentlicher Bestandteil
                 der Mathematik. Sie ist eng verwandt mit der Integralrechnung.</p>
				<a href="./ableitungen.php" class="btn btn-danger">View</a>
			</div>
			
			<div class="col-sm-4">
				<a href="./gleichung.php" class="thumbnail">
					<img src="img/gleichung.png" alt="Gleichungen">
				</a>
				<h3>Lineare Gleichungssysteme lösen.</h3>
				<p>Ein lineares Gleichungssystem (kurz LGS) ist in der linearen Algebra eine Menge linearer Gleichungen 
                    mit einer oder mehreren Unbekannten, die alle gleichzeitig erfüllt sein sollen.</p>
				<a href="./gleichung.php" class="btn btn-danger">View</a>
			</div>
			
			<div class="col-sm-4">
				<a href="./flaechen.php" class="thumbnail">
					<img src="img/flaechen.png" alt="Flächen">
				</a>
				<h3>Flächen berechnen.</h3>
				<p>Eine Fläche wird wird je nach Teilgebiet der Mathematik unterschiedlich definiert. 
                Gemeinsam haben alle Definitionen, dass die Fläche ein zweidimensionales Objekt ist.</p>
				<a href="./flaechen.php" class="btn btn-danger">View</a>
			</div>
		</div>
	</div>	
	

      <?php
      //if((($_GET['page'])=="ableitungen")){
          //"ableitungen.php";
      //}
      ?>



  </body>
</html>