<?php 
    
   // Filtracja przesłanych danych 
    $id_pay = clear($_GET['idsms']);
    $code = clear($_GET['code']);
    $id_user = clear($_GET['iduser']);
    $coment = urlencode($_GET['coment']);
    $buyer = urlencode($_GET['buyer']);
	
	
	include ('function.php');
	$db = new mysql;
	$db->baza($bazadanych);
	
	if($id_pay){
		$id_pay = $db->pobierz('id_pay');
			$rezultat = $db->pytanie("select * FROM `sms_pay` WHERE `id_pay` = '".$id_pay."'");
			if(mysql_num_rows($rezultat) == 0){ list(,$sufix, $numer, $cost, $id_acc, $cost, $inter) = $rezultat;}
		
		
		
		
		}else{
			
		}
	
	
	
	
	if($id_user){
		$id_user = $db->pobierz('id_user');
			$rezultat = $db->pytanie("select * FROM `konta` WHERE `id_user` = '".$id_user."'");
			if(mysql_num_rows($rezultat) == 0) { $status=16; } // bledne UserID
	}else{
		$id_user = $db->pobierz('id_user');
			$rezultat = $db->pytanie("select * FROM `konta` WHERE `id_user` = '".$id_user."'");
			if(mysql_num_rows($rezultat) == 0) { $status=16; } // bledne UserID
   





















    
    
	//echo $status; echo ' ';
    echo $id_pay; echo ' ';
    echo $code; echo ' ';
    echo $id_user; echo ' ';
    echo $buyer;  echo ' ';
   
   
   
   
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