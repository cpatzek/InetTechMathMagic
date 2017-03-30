<?php
include('master.php');
?>

<div class="column">
    <div class="col-sm-4">
        <h2> Kreis </h2>
        <a class="thumbnail">
            <img src="img/KreisFertig.png" alt="Kreis">
        </a>
        <p>TEEEExt text tetew efwegf ewfwewegwg rgwrgwerg gwgwegw ggreg</p>
    </div>
</div>

<div class="quadrat">
    <label id="eingabe1" for="userEingabe1">Radius</label>
    <input id="userEingabe1" type="text" size="2" maxlength="6" />
    <button type="button" id="qLoesen" class="btn btn-primary" onclick="berechneKreis()">Lösen</button>
    <hr />
    <div id="erg1Flaeche" <label for="flaecheErg">Kreis-Fläche:  </label> </div>
    <div id="flaecheErg"> <label> </div>
    <div id="erg2Umfang" <label>Kreis-Umfang:  </label> </div>
    <div id="umfangErg"> <label> </div>
    <div id="erg3Diagonale" <label>Kreis-Durchmesser:  </label> </div>
    <div id="diagonaleErg"> <label> </div>
    <div id="fehlerEingabe"> <label> </div>
</div>