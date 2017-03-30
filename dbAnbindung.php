<?php
function openDatabase()
{
	//Öffne Verbindung zu lokaler DB. Wenn DB auf anderer Machine ausgeführt wird,
	//muss statt localhost die IP angegeben werden
	$db = mysqli_connect("localhost", "master", "masterOfDisaster123?", "nachrichten");
	//ist Fehler bei Verbindungsaufbau zu DB aufgetreten?
	if(!$db)
	{
		 die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
	}
	saveMessage($db);
}

function saveMessage(&$db)
{
	//Schreibe Anfrage des Clients in Variablen
	$nachricht = $_GET["nachricht"];
	$name = $_GET["name"];
	$email = $_GET["email"];
	//Schreibe alle Variablen in ein SQL statement
	$sqlcommand = "INSERT INTO nachrichten (name, nachricht, email) VALUES ('$name', '$nachricht', '$email')";
	//erstelle String mit maskierten Daten, damit DB auch richtig damit arbeiten kann
	$sqlcomand = mysqli_real_escape_string($db, $sqlcommand);
	//führe Statement aus, prüfe ob Fehler aufgetreten ist
	$ausfuehren = mysqli_query($db, $sqlcommand);
	if(!$ausfuehren)
	{
		exit("Verbindungsfehler: Anfrage konnte nicht ausgeführt werden!\n";
	}
}
openDatabase();
?>