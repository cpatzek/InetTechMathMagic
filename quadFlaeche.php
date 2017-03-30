<?php
include('master.php');
?>


<!DOCTYPE html>
<html lang="en">
<body>
   
    <div class="column">
        <div class="col-sm-4">
            <h2> Quadrat </h2>
            <a class="thumbnail">
                <img src="img/QuadratFertig.png" alt="Quadrat">
            </a>
            <h3> Definition </h3>
            <p>
                Eine ebene, von vier Strecken eingeschlossene Figur, heißt Viereck. Das Quadrat gehört zur Klasse der Vierecke und hat die folgenden Eigenschaften:
                <ul>
                    <li> die vier Seiten sind gleich lang </li>
                    <li> die vier Innenwinkel sind gleich groß </li>
                    <li> es hat vier Symmetrieachsen </li>
                    <li> es ist 4-zählig drehsymmetrisch </li>
                    <li> es ist punktsymmetrisch </li>
                    <li> die beiden Diagonalen sind gleich lang </li>
                </ul>
            </p>
            <h4> Formelsammlung Quadrat </h4>
            <p>
                Flächeninhalt								A = a * a
                Umfang										U=

            </p>
        </div>
    </div>



    <div class="quadrat">
        <label id="eingabe1" for="userEingabe1">Seitenlänge</label>
        <input id="userEingabe1" type="text" size="2" maxlength="6" />
        <button type="button" id="qLoesen" class="btn btn-primary" onclick="onButtonClick()">Lösen</button>
        <hr />
        <div <id="erg1Flaeche" <label for="flaecheErg">Quadrat-Fläche:  </label>
		<div id="flaecheErg"> <label> </div>
		<div id="erg2Umfang" <label>Quadrat-Umfang:  </label> </div>
		<div id="umfangErg"> <label> </div>
		<div id="erg3Diagonale" <label>Quadrat-Diagonale:  </label> </div>
		<div id="diagonaleErg"> <label> </div>
		<div id="fehlerEingabe"> <label> </div>
    </div>


</body>
</html>

