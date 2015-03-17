<?php 
    
   // Filtracja przesłanych danych 
    $id_pay = clear($_GET['idsms']);
    $code = clear($_GET['code']);
    $id_user = clear($_GET['iduser']);
    $coment = urldecode($_GET['coment']);
    $buyer = urldecode($_GET['buyer']);
	
	session_start ();
	include ('function.php');
	$db = new mysql;
	$db->baza($bazadanych);
	
	if($id_pay){
		$id_pay = $db->pytanie('id_pay');
			$rezultat = $db->pytanie("select * FROM `sms_pay` WHERE `id_pay` = '".$id_pay."'");
			if(mysql_num_rows($rezultat) == 1){list($temp, $sufix, $numer, $cost, $id_acc, $inter) = $rezultat;}else {error(6);}
		
			if ($insert == "HP") unset($numer, $sufix);
			if ($insert == "CB") unset($id_acc);
		
		}else {error(6);}




//	 if($id_user){
//		$id_user = $db->pobierz('id_user');
//			$rezultat = $db->pytanie("select `wallet1` FROM `konta` WHERE `id_user` = '".$id_user."'");
//			if(mysql_num_rows($rezultat) == 1) { list($wallet1) = $rezultat;} // bledne UserID
//	}else {error(7);} //blad UserID
   




















    
	
	
	
	
	rozlacz();
	//$status;
   
   
   
   
   function clear($text){ // Funkcja "czyszcząca" wprowadzane dane 
       if(get_magic_quotes_gpc()){ 
           $text = stripslashes($text); 
       } 
       $text = trim($text); 
       $text = mysql_real_escape_string($text); 
       $text = htmlspecialchars($text); 
       return $text; 
   } 
?>