<?php 
    
   // Filtracja przesłanych danych 
    $id_pay = clear($_GET['idsms']);
    $code = clear($_GET['code']);
    $id_user = clear($_GET['iduser']);
    $coment = urlencode($_GET['coment']);
    $buyer = urlencode($_GET['buyer']);
	
	$status=1;
	
   





















    
    
    echo $status; echo ' ';
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