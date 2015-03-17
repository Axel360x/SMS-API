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
function historiakupna($id_user,$code,$coment,$buyer,$cost) {
$data = date('d-m-Y H:i:s');
$pytanko = mysql_query("INSERT INTO `sms_historia`(`id`,
 `buyer`,
 `id_user`,
 `cost`) VALUES ('',
 '$buyer',
 '$id_user',
 '$cost')") or die ("nie można dodac wpisu");
return $kupione = true;
}




function aktualizacjakasy($cost){
	$update_wallet1 = mysql_fetch_array(mysql_query("SELECT `wallet1` FROM `konta` WHERE `id` = $id_user"));
	$update_wallet1 = $update_wallet1['wallet1']/100;
	$ilosc = $update_wallet1 + $cost;
	$ilosc = $ilosc*100;
	$update_wallet1 = mysql_query("UPDATE `konta` SET `wallet1` = '$ilosc' WHERE `id` = $id_user");;
	return $aktualizacja = true;
}

function wyswietl_sms($id){
	$pytanie = mysql_fetch_array(mysql_query("SELECT `wartoscsms` FROM `sklep_sms` WHERE `id` = '".$id."'"));
return $cena = $pytanie['wartoscsms'];
}

function error($tresc){ //blad
	echo $tresc ;
	exit;
}
?>