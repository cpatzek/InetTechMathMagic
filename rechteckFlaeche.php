<?php
include('master.php');
?>

<div class="column">
		<div class="col-sm-4">
			<h2> Rechteck </h2>
			<a class="thumbnail">
			<img src="img/RechteckFertig.png" alt="Quadrat">
			</a>
			<p>TEEEExt text tetew efwegf ewfwewegwg rgwrgwerg gwgwegw ggreg</p>
		</div>
	</div>
			
	<div class="quadrat">
		<label id="eingabe1" for="userEingabe1">Seitenlänge a</label>
		<input id="userEingabe1" type="text" size="2" maxlength="6" />
		<label id="eingabe2" for="userEingabe2">Seitenlänge b</label>
		<input id="userEingabe2" type="text" size="2" maxlength="6" />
		<button type="button" id="qLoesen" class="btn btn-primary" onclick="berechneRechteck()">Lösen</button>
		<hr />
		<div id="erg1Flaeche" <label for="flaecheErg">Quadrat-Fläche:  </label> </div>
		<div id="flaecheErg"> <label> </div>
		<div id="erg2Umfang" <label>Quadrat-Umfang:  </label> </div>
		<div id="umfangErg"> <label> </div>
		<div id="erg3Diagonale" <label>Quadrat-Diagonale:  </label> </div>
		<div id="diagonaleErg"> <label> </div>
		<div id="fehlerEingabe"> <label> </div>
    </div>