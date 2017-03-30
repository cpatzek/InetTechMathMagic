<?php
include('master.php');
$dom->validateOnParse = true;
?>

<!DOCTYPE html>
<html lang="en">

<body onload= "berechneDreieck()">

<div class="column">
    <div class="col-sm-4">
        <h2> Dreieck </h2>
        <a class="thumbnail">
            <img src="img/DreieckFertig.png" alt="Quadrat">
        </a>
        <p>TEEEExt text tetew efwegf ewfwewegwg rgwrgwerg gwgwegw ggreg</p>
    </div>
</div>

<div class="quadrat">
    <label id="eingabe1" for="userEingabe1">Seitenlänge a</label>
    <input id="userEingabe1" type="text" size="2" maxlength="6" />
    <label id="eingabe2" for="userEingabe2">Seitenlänge b</label>
    <input id="userEingabe2" type="text" size="2" maxlength="6" />
    <label id="eingabe3" for="userEingabe3">Seitenlänge c</label>
    <input id="userEingabe3" type="text" size="2" maxlength="6" />
    <button type="button" id="dLoesen" class="btn btn-primary" onclick="berechneDreieck()">Lösen</button>
    <hr />
    <div id="erg1Flaeche" <label for="flaecheErg">Quadrat-Fläche:  </label> </div>
    <div id="flaecheErg"> <label> </div>
    <div id="erg2Umfang" <label>Quadrat-Umfang:  </label> </div>
    <div id="umfangErg"> <label> </div>
    <div id="fehlerEingabe"> <label> </div>
</div>

</body>
</html>