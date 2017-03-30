<?php
include('master.php');
function fuelleArray(&$ersteGleichung, &$zweiteGleichung, &$dritteGleichung)
{
	$aktuellerWert;
    	//lege Array für Benutzereingaben an
	$linearesGleichungsSystem = array();
	for($i=0; $i < 12; $i++)
	{
		$aktuellerWert = str_replace(",",".",$_POST[$i]);
        	//Prüfe ob Formularpunkt i gesetzt wurde und ob es sich um eine Zahl handelt, wenn ja, lese Zahl in array ein
		if(isset($_POST[$i])&&is_numeric($aktuellerWert))
		{
			$linearesGleichungsSystem[$i] = floatval($aktuellerWert);
		}
		//wenn nicht gesetzt: Fehlertext, beende Skript
		else
		{
			exit("Fehlerhafte Eingabe. Bitte nur Zahlen eingeben. Wenn die Koeffizienten fehlen, geben Sie bitte 0 ein!\n");
		}
		//lese Werte in einzelne Gleichungen ein
		if($i<4)
		{
			$ersteGleichung[] = $linearesGleichungsSystem[$i];
		}
		else if($i<8)
		{
			$zweiteGleichung[] = $linearesGleichungsSystem[$i];
		}
		else
		{
			$dritteGleichung[] = $linearesGleichungsSystem[$i];
		}
	}
}

function sortiereGleichungenX1(&$ersteGleichung, &$zweiteGleichung, &$dritteGleichung)
{
	//temporäres feld zum tauschen
	$temp=array();

	//tausche 1 mit 2, wenn x1 Koeffizient von 2 ungleich 0 und x2 Koeffizient in 1 ungleich 0
	if($zweiteGleichung[0]!=0&&$ersteGleichung[1]!=0)
	{
		for($i=0;$i<4;$i++)
			$temp[]=$ersteGleichung[$i];
		for($i=0;$i<4;$i++)
			$ersteGleichung[$i]=$zweiteGleichung[$i];
		for($i=0;$i<4;$i++)
			$zweiteGleichung[$i]=$temp[$i];
	}
	//tausche 1 mit 3, wenn x1 Koeffizient von 3 ungleich 0
	else if($dritteGleichung[0]!=0)
	{
		for($i=0;$i<4;$i++)
			$temp[]=$ersteGleichung[$i];
		for($i=0;$i<4;$i++)
			$ersteGleichung[$i]=$dritteGleichung[$i];
		for($i=0;$i<4;$i++)
			$dritteGleichung[$i]=$temp[$i];
	}

}

function sortiereGleichungenX2(&$ersteGleichung, &$zweiteGleichung, &$dritteGleichung)
{
	$temp=array();
	if($dritteGleichung[1]!=0)
	{
		for($i=0;$i<4;$i++)
			$temp[]=$zweiteGleichung[$i];
		for($i=0;$i<4;$i++)
			$zweiteGleichung[$i]=$dritteGleichung[$i];
		for($i=0;$i<4;$i++)
			$dritteGleichung[$i]=$temp[$i];
	}
	else if($ersteGleichung[1]!=0&&$zweiteGleichung[0]!=0)
	{
		for($i=0;$i<4;$i++)
			$temp[]=$zweiteGleichung[$i];
		for($i=0;$i<4;$i++)
			$zweiteGleichung[$i]=$ersteGleichung[$i];
		for($i=0;$i<4;$i++)
			$ersteGleichung[$i]=$temp[$i];
	}
}

function gaussAlgorithmus (&$ersteGleichung,&$zweiteGleichung,&$dritteGleichung)
{

    	//Wenn x1 Koeffizient nicht 0 ist in 1, fuehre Eliminierung durch
	if($ersteGleichung[0]!=0)
	{
		$teiler = $zweiteGleichung[0]/$ersteGleichung[0];
		//eliminiere x1 koeffizient aus Gleichung 2

		for($i=1;$i<4;$i++)
		{
			$zweiteGleichung[$i] = $zweiteGleichung[$i]-$teiler*$ersteGleichung[$i];
		}
		$zweiteGleichung[0] = 0;

		$teiler = $dritteGleichung[0]/$ersteGleichung[0];
		//eliminiere x1 koeffizient aus Gleichung 3
		for($i=1;$i<4;$i++)
		{
			$dritteGleichung[$i] = $dritteGleichung[$i]-$teiler*$ersteGleichung[$i];
		}
		$dritteGleichung[0] = 0;
	}
	//wenn x2 Koeffizient nicht 0 ist in 2, fuehre Eliminierung durch in 3
	if($zweiteGleichung[1]!=0)
	{
		$teiler = $dritteGleichung[1]/$zweiteGleichung[1];
		//eliminiere x2 koeffizient aus Gleichung 3
		for($i=2;$i<4;$i++)
		{
			$dritteGleichung[$i] = $dritteGleichung[$i]-$teiler*$zweiteGleichung[$i];
		}
		$dritteGleichung[1] = 0;
	}
	//wenn x3 Koeffizient nicht 0 ist in 3, fuehre Eliminierung durch
	if($dritteGleichung[2]!=0)
	{
		$teiler = $zweiteGleichung[2]/$dritteGleichung[2];
		//eliminiere x3 koeffizient aus Gleichung 2
		$zweiteGleichung[3] = $zweiteGleichung[3]-$teiler*$dritteGleichung[3];
		$zweiteGleichung[2] = 0;

		$teiler = $ersteGleichung[2]/$dritteGleichung[2];
		//eliminiere x3 koeffizient aus Gleichung 1
		$ersteGleichung[3] = $ersteGleichung[3]-$teiler*$dritteGleichung[3];
		$ersteGleichung[2] = 0;
	}
	//wenn x2 Koeffizient nicht 0 ist in 2, fuehre Eliminierung durch in 1
	if($zweiteGleichung[1]!=0)
	{
		$teiler = $ersteGleichung[1]/$zweiteGleichung[1];
		//eliminiere x2 koeffizient aus Gleichung 1
		$ersteGleichung[3] = $ersteGleichung[3]-$teiler*$zweiteGleichung[3];
		$ersteGleichung[1] = 0;
	}
}

//Arrays für die einzelnen Gleichungen
function main()
{
	$ersteGleichung = array();
	$zweiteGleichung = array();
	$dritteGleichung = array();
	fuelleArray($ersteGleichung, $zweiteGleichung, $dritteGleichung);
	if($ersteGleichung[0]==0)
		sortiereGleichungenX1($ersteGleichung, $zweiteGleichung, $dritteGleichung);
	if($zweiteGleichung[1]==0)
		sortiereGleichungenX2($ersteGleichung, $zweiteGleichung, $dritteGleichung);
	gaussAlgorithmus($ersteGleichung,$zweiteGleichung,$dritteGleichung);
	//Ausgabe des Ergebnisses
	$GLEICHUNG1 = $ersteGleichung[0]."x1 + ".$ersteGleichung[1]."x2 + ".$ersteGleichung[2]."x3 = ".$ersteGleichung[3];
	$GLEICHUNG2 = $zweiteGleichung[0]."x1 + ".$zweiteGleichung[1]."x2 + ".$zweiteGleichung[2]."x3 = ".$zweiteGleichung[3];
	$GLEICHUNG3 = $dritteGleichung[0]."x1 + ".$dritteGleichung[1]."x2 + ".$dritteGleichung[2]."x3 = ".$dritteGleichung[3];

	echo '<textarea type="text" cols="59" rows="1" name="Gleichung I.">'
	.$GLEICHUNG1.
	'</textarea>';
	echo '<textarea type="text" cols="59" rows="1" name="Gleichung II.">'
	.$GLEICHUNG2.
	'</textarea>';
	echo '<textarea type="text" cols="59" rows="1" name="Gleichung III.">'
	.$GLEICHUNG3.
	'</textarea>';
}
main();
?>
