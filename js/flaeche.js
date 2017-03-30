var feldFehler = "#FFC4C8"; //Feld wird Rot falls Eingabe falsch
var feldNormal = "#ffffff"; //Feld wird Weiß falls kein Fehler

var clear = function()
{
	document.getElementById("diagonaleErg").innerHTML = '';
	document.getElementById("umfangErg").innerHTML = '';
	document.getElementById("flaecheErg").innerHTML = '';
};

var clearFehler = function()
{
	document.getElementById("fehlerEingabe").innerHTML = '';
};
		
var eingabeTest = function (benutzerEingabe)			//Prüft ob Benutzer Eingabe korrekt ist
{
	var zulaessigeZeichen = /[0-9,.]/;					//Lässt bei Eingabe Zahlen (0-9) Punkt oder Komma zu.
	if ((benutzerEingabe.indexOf("..") != -1) || (benutzerEingabe.indexOf(",,") != -1) || (benutzerEingabe.indexOf(".,") != -1) || (benutzerEingabe.indexOf(",.") != -1))
	{
		document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine Buchstaben oder Sonderzeichen erlaubt";
		clear();
		return false;	
	}
	else
	{
		var zeichenOk = zulaessigeZeichen.test(benutzerEingabe);
		if (zeichenOk == false)
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine Buchstaben oder Sonderzeichen erlaubt";
			clear();
			return false;
		}
		else
		{
			return true;
		}
	}
};
		
function onButtonClick()
{
	userEingabe1.style.backgroundColor = feldNormal;
	clearFehler();
	eingabeText = document.getElementById("userEingabe1").value;
	eingabeRichtig = (eingabeTest(eingabeText));
	if (eingabeRichtig == true)
	{
		eingabeText = eingabeText.replace(/,/,".");								//ersetzt Komma (,) durch Punkt (.)
		var seitenLaenge = parseFloat(eingabeText);
		if (seitenLaenge < 0)
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine negativen Zahlen erlaubt";
			userEingabe1.style.backgroundColor = feldFehler;
			clear();
		}
		else
		{
			userEingabe1.style.backgroundColor = feldNormal;
			var flaeche = seitenLaenge * seitenLaenge;
			var umfang = 4 * seitenLaenge;
			var diagonale = Math.sqrt((seitenLaenge*seitenLaenge)+(seitenLaenge*seitenLaenge));
			document.getElementById("flaecheErg").innerHTML = flaeche;	
			document.getElementById("umfangErg").innerHTML = umfang;	
			document.getElementById("diagonaleErg").innerHTML = diagonale;	
		}
	}
	else
	{
		userEingabe1.style.backgroundColor = feldFehler;
	}
}           

function berechneRechteck()
{
	userEingabe1.style.backgroundColor = feldNormal;
	userEingabe2.style.backgroundColor = feldNormal;
	clearFehler();
	eingabeText1 = document.getElementById("userEingabe1").value;
	eingabeText2 = document.getElementById("userEingabe2").value;
	eingabeRichtig1 = (eingabeTest(eingabeText1));
	eingabeRichtig2 = (eingabeTest(eingabeText2));
	if ((eingabeRichtig1 == true) && (eingabeRichtig2 == true))
	{
		eingabeText1 = eingabeText1.replace(/,/,".");								//ersetzt Komma (,) durch Punkt (.)
		eingabeText2 = eingabeText2.replace(/,/,".");
		var seitenLaenge1 = parseFloat(eingabeText1);
		var seitenLaenge2 = parseFloat(eingabeText2);
		if (seitenLaenge1 < 0)
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine negativen Zahlen erlaubt";
			userEingabe1.style.backgroundColor = feldFehler;
			clear();
		}
		else if ((seitenLaenge2 < 0) && (seitenLaenge1 > 0))
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine negativen Zahlen erlaubt";
			userEingabe2.style.backgroundColor = feldFehler;
			clear();
		}
		else
		{
			userEingabe1.style.backgroundColor = feldNormal;
			userEingabe2.style.backgroundColor = feldNormal;
			var flaeche = seitenLaenge1 * seitenLaenge2;
			var umfang = 2 * seitenLaenge1 + 2 * seitenLaenge2;
			var diagonale = Math.sqrt((seitenLaenge1*seitenLaenge1)+(seitenLaenge2*seitenLaenge2));
			document.getElementById("flaecheErg").innerHTML = flaeche;	
			document.getElementById("umfangErg").innerHTML = umfang;	
			document.getElementById("diagonaleErg").innerHTML = diagonale;	
		}
	}
	else if (eingabeRichtig1 != true)
	{
		userEingabe1.style.backgroundColor = feldFehler;
	}
	else if (eingabeRichtig2 != true)
	{
		userEingabe2.style.backgroundColor = feldFehler;
	}
} 

function berechneDreieck()
{
	userEingabe1.style.backgroundColor = feldNormal;
	userEingabe2.style.backgroundColor = feldNormal;
	userEingabe3.style.backgroundColor = feldNormal;
	clearFehler();
	eingabeText1 = document.getElementById("eingabe1").value;
	eingabeText2 = document.getElementById("userEingabe2").value;
	eingabeText3 = document.getElementById("userEingabe3").value;
	eingabeRichtig1 = (eingabeTest(eingabeText1));
	eingabeRichtig2 = (eingabeTest(eingabeText2));
	eingabeRichtig3 = (eingabeTest(eingabeText3));
	alert("drreieck");
	if ((eingabeRichtig1 == true) && (eingabeRichtig2 == true) && (eingabeRichtig3 == true))
	{
		eingabeText1 = eingabeText1.replace(/,/,".");								//ersetzt Komma (,) durch Punkt (.)
		eingabeText2 = eingabeText2.replace(/,/,".");
		eingabeText3 = eingabeText3.replace(/,/,".");
		var seitenLaenge1 = parseFloat(eingabeText1);
		var seitenLaenge2 = parseFloat(eingabeText2);
		var seitenLaenge3 = parseFloat(eingabeText3);
		if (seitenLaenge1 < 0)
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine negativen Zahlen erlaubt";
			userEingabe1.style.backgroundColor = feldFehler;
			clear();
		}
		else if ((seitenLaenge2 < 0) && (seitenLaenge1 > 0))
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine negativen Zahlen erlaubt";
			userEingabe2.style.backgroundColor = feldFehler;
			clear();
		}
		else if ((seitenLaenge3 < 0) && (seitenLaenge2 > 0) && (seitenLaenge1 > 0))
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine negativen Zahlen erlaubt";
			userEingabe3.style.backgroundColor = feldFehler;
			clear();
		}
		else
		{
			userEingabe1.style.backgroundColor = feldNormal;
			userEingabe2.style.backgroundColor = feldNormal;
			userEingabe3.style.backgroundColor = feldNormal;
			var umfang = seitenLaenge1 + seitenLaenge2 + seitenLaenge3;
			var flaeche = (Math.sqrt((seitenLaenge1+seitenLaenge2+seitenLaenge3)*(seitenLaenge1+seitenLaenge2-seitenLaenge3)*(seitenLaenge2+seitenLaenge3-seitenLaenge1)*(seitenLaenge3+seitenLaenge1-seitenLaenge2))/4);
			document.getElementById("flaecheErg").innerHTML = flaeche;	
			document.getElementById("umfangErg").innerHTML = umfang;	
		}
	}
	else if (eingabeRichtig1 != true)
	{
		userEingabe1.style.backgroundColor = feldFehler;
	}
	else if (eingabeRichtig2 != true)
	{
		userEingabe2.style.backgroundColor = feldFehler;
	}
	else if (eingabeRichtig3 != true)
	{
		userEingabe3.style.backgroundColor = feldFehler;
	}
}	

function berechneKreis()
{
	userEingabe1.style.backgroundColor = feldNormal;
	clearFehler();
	eingabeText = document.getElementById("userEingabe1").value;
	eingabeRichtig = (eingabeTest(eingabeText));
	if (eingabeRichtig == true)
	{
		eingabeText = eingabeText.replace(/,/,".");								//ersetzt Komma (,) durch Punkt (.)
		var radius = parseFloat(eingabeText);
		if (radius < 0)
		{
			document.getElementById("fehlerEingabe").innerHTML = "Fehlerhafte Eingabe: keine negativen Zahlen erlaubt";
			userEingabe1.style.backgroundColor = feldFehler;
			clear();
		}
		else
		{
			userEingabe1.style.backgroundColor = feldNormal;
			var flaeche = Math.PI * radius * radius;
			var umfang = 2 * Math.PI * radius;
			var durchmesser = 2 * radius;
			document.getElementById("flaecheErg").innerHTML = flaeche;	
			document.getElementById("umfangErg").innerHTML = umfang;	
			document.getElementById("diagonaleErg").innerHTML = durchmesser;	
		}
	}
	else
	{
		userEingabe1.style.backgroundColor = feldFehler;
	}
}         
