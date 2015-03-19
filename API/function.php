<?php
include ('config.php');
class mysql{
	function sprawdz_polaczenie(){
		include("config.php");
		$lol= @mysql_connect($host,$uzytkownik,$haslo);
		return $mysql_sprawdz = true;
	}
	function polacz(){
		include("config.php");
		@mysql_connect($host,$uzytkownik,$haslo);
		return $mysql_sprawdz = true;
	}
	function baza($bazadanych){
		$this->polacz();
		mysql_select_db($bazadanych);
		return $baza_sprawdz = true;
	}
	function pytanie($pytanie){
		return $pytanie_wynik = mysql_query($pytanie);
	}
	function num_rows($pytanie){ //urzywane //liczy ile rekordow wystapilo
		$wynik = mysql_num_rows($pytanie);
		return $wynik;
	}
	function tablica($pytanie){
		$wynik = mysql_fetch_array($pytanie);
		return $wynik;
	}
	function rozlacz() {
		mysql_close();
	}
}
function historiasms($id_user,$code,$cost,$buyer) {
$pytanko = mysql_query("INSERT INTO sms_historia (
 id_user, code, buyer, cost) VALUES (
 '$id_user', '$code', '$buyer',
 '$cost')") or die ("nie można dodac wpisu");
 //INSERT INTO `sms_historia`(`id_user`, `code`, `buyer`, `cost`) VALUES (1,fwafwsge,MARVIN_PL,1)
 return $historiasms = true;
}




function aktualizacjawallet1($id_user,$cost){
	$wallet1 = mysql_query("SELECT wallet1 FROM konta WHERE 'id_user' = '$id_user'");
	$wallet1 += $cost;
	mysql_query("UPDATE konta SET `wallet1` = '$wallet1' WHERE `id_user` = '$id_user'");
	return $aktualizacja = true;
}

function wyswietl_sms($id){
	$pytanie = mysql_fetch_array(mysql_query("SELECT `wartoscsms` FROM `sklep_sms` WHERE `id` = '".$id."'"));
return $cena = $pytanie['wartoscsms'];
}

function error($tresc){ //blad lub wyswietlanie
	echo $tresc ;
	exit;
}
?>