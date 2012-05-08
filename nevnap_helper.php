<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*  nevnap() - it echos out the current date and the name(s) of current namedays
*  text_month() - is a subfunction, that changes the month part of a date to text format
*
*  Copyright (c) 2012 Barna Szalai
*/

function nevnap() 
{	 
	$_datum = getdate();
	 
	$_honap = array("január","február","március","április",
		"május","június","július","augusztus",
		"szeptember","október","november","december");

	$_hetnapja = array("","hétfő","kedd","szerda","csütörtök",
		"péntek","szombat","vasárnap");
	 
	$_januar = array("","ÚJÉV","Ábel","Genovéva","Titusz","Simon",
		"Boldizsár","Attila","Gyöngyvér","Marcell",
		"Melánia","Ágota","Ernő","Veronika",
		"Bódog","Lóránt","Gusztáv","Antal","Piroska",
		"Sára","Sebestyén","Ágnes","Vince","Zelma",
		"Timót","Pál","Vanda","Angelika","Károly,",
		"Adél","Martina","Marcella");
	 
	$_februar = array("","Ignác","Karolina","Balázs","Ráhel","Ágota",
		"Dóra","Tódor","Aranka","Abigél","Elvira",
		"Bertold","Lívia","Ella, Linda","Bálint","Kolos",
		"Julianna","Donát","Bernadett","Zsuzsanna","Álmos",
		"Eleonóra","Gerzson","Alfréd","Mátyás","Géza",
		"Edina","Ákos, Bátor","Elemér");
	 
	$_marcius = array("","Albin","Lujza","Kornélia","Kázmér","Adorján",
		"Leonóra","Tamás","Zoltán","Franciska","Ildikó",
		"Szilárd","Gergely","Krisztián, Ajtony","Matild",
		"Kristóf","Henrietta","Gertrúd","Sándor","József",
		"Klaudia","Klaudia","Benedek","Beáta","Emőke","Gábor",
		"Irén","Emánuel","Hajnalka","Gedeon","Auguszta",
		"Zalán","Árpád");
	 
	$_aprilis = array("","Hugó","Áron","Buda, Richárd","Izidor","Vince",
		"Vilmos, Bíborka","Herman","Dénes","Erhard","Zsolt",
		"Zsolt, Leó","Gyula","Ida","Tibor","Tas, Anasztázia",
		"Csongor","Rudolf","Andrea","Emma","Konrád, Tivadar",
		"Konrád","Csilla","Béla","György","Márk",
		"Ervin","Zita","Valéria","Péter","Katalin, Kitti");
	 
	$_majus = array("","Fülöp","Zsigmond","Tímea","Mónika","Györgyi",
		"Ivett","Gizella","Mihály","Gergely","Ármin",
		"Ferenc","Pongrác","Szervác","Bonifác","Zsófia",
		"Botond, Mózes","Paszkál","Erik","Ivó, Milán",
		"Bernát, Felícia","Konstantin","Júlia, Rita",
		"Dezső","Eszter","Orbán","Fülöp","Hella",
		"Emil, Csanád","Magdolna","Zsanett, Janka",
		"Angéla");
	 
	$_junius = array("","Tünde","Anita, Kármen","Klotild","Bulcsú","Fatime",
		"Norbert","Róbert","Medárd","Félix","Margit",
		"Barnabás","Villő","Antal, Anett","Vazul","Jolán",
		"Jusztin","Laura","Levente","Gyárfás","Rafael",
		"Alajos","Paulina","Zoltán","Iván","Vilmos",
		"János","László","Levente, Irén","Péter, Pál",
		"Pál");
	 
	$_julius = array("","Annamária","Ottó","Kornél","Ulrik","Sarolta, Emese",
		"Csaba","Appolónia","Ellák","Lukrécia","Amália",
		"Nóra, Lili","Izabella","Jenő","&Őrs","Henrik",
		"Valter","Endre, Elek","Frigyes","Emília","Illés",
		"Dániel","Magdolna","Lenke","Kinga, Kincső",
		"Kristóf, Jakab","Anna, Anikó","Olga",
		"Szabolcs","Márta","Judit","Oszkár");
	 
	$_augusztus = array("","Boglárka","Lehel","Hermina","Domonkos","Krisztina",
		"Berta","Ibolya","László","Emőd","Lörinc",
		"Zsuzsanna","Klára","Ipoly","Marcell","Mária",
		"Ábrahám","Jácint","Ilona","Huba","István",
		"Sámuel","Menyhért","Bence","Bertalan","Lajos",
		"Izsó","Gáspár","Ágoston","Beatrix","Rózsa",
		"Erika");
	 
	$_szeptember = array("","Egon","Rebeka","Hilda","Rozália","Viktor, Lőrinc",
		"Zakariás","Regina","Mária","Ádám","Nikolett, Hunor",
		"Teodóra","Mária","Kornél","Szeréna","Enikő",
		"Edit","Zsófia","Diána","Vilhelmina","Friderika",
		"Máté","Móric","Tekla","Gellért","Eufrozina",
		"Jusztina","Adalbert","Vencel","Mihály","Jeromos");
	 
	$_oktober = array("","Malvin","Petra","Helga","Ferenc","Aurél",
		"Renáta","Amália","Koppány","Dénes","Gedeon",
		"Brigitta","Miksa","Kálmán","Helén","Teréz",
		"Gál","Hedvig","Lukács","Nándor","Vendel",
		"Orsolya","Előd","Gyöngyi","Salamon","Bianka",
		"Dömötör","Szabina","Simon","Nárcisz","Alfonz",
		"Farkas");
	 
	$_november = array("","Marianna","Achilles","Győző","Károly","Imre",
		"Lénárd","Rezső","Zsombor","Tivadar","Réka",
		"Márton","Jónás, Renátó","Szilvia","Aliz",
		"Albert, Lipót","Ödön","Hortenzia, Gergő",
		"Jenő","Erzsébet","Jolán","Olivér","Cecília",
		"Kelemen","Emma","Katalin","Virág",
	
		"Virgil","Stefánia","Taksony","András, Andor");
	 
	$_december = array("","Elza","Melinda","Ferenc","Barbara, Borbála",
		"Vilma","Miklós","Ambrus","Mária","Natália","Judit",
		"Árpád","Gabriella","Luca","Szilárda","Valér",
		"Etelka","Lázár","Auguszta","Viola","Teofil",
		"Tamás","Zéno","Viktória","Ádám, Éva","KARÁCSONY",
		"KARÁCSONY","János","Kamilla","Tamás","Dávid",
		"Szilveszter");
	 
	$_nevnap = array("", $_januar, $_februar, $_marcius, $_aprilis, $_majus, $_junius, $_julius, $_augusztus, $_szeptember, $_oktober, $_november, $_december); 
	 
	echo ("Ma ".$_datum['year'].". ".change_month($_datum['mon'], FALSE)." ".$_datum['mday'].". ".$_hetnapja[$_datum['wday']].", ".$_nevnap[$_datum['mon']][$_datum['mday']]." napja van");
}

/**
 * Change month from number to text
 *
 * @param string $string month in number format
 * @param boolean $double set if month is in single or double character format 
 * @return string returns the modified month in text format
 */
	 
function change_month($string, $double = FALSE) 
{
	if($double) 
	{
		$month_num = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');		   
	}
	else 
	{
		$month_num = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');		   
	}
	$month_word = array('január', 'február', 'március', 'április', 'május', 'június', 'július', 'augusztus', 'szeptember', 'október', 'november', 'december');
	$result = $month_word[$string-1];
	
	return $result;
} 
	
/**
* Change month part of the input date to text format
*
* @param string $date date input in YYYY-MM-DD format
* @return string returns the input date with changed month format
*/

function text_month($date) 
{	
	$datum = date('Y.m.d.', strtotime($date));
	$ev = substr($datum, 0, 4);
	$honap = change_month(substr($datum, 5, 2));
	$nap = substr($datum, 8 ,2);

	return $ev.'. '.$honap.' '.$nap.'.';
}