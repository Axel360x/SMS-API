<?php 
    
   // Filtracja przesłanych danych 
    $id_pay = clear($_GET['idsms']);
    $code = clear($_GET['code']);
    $id_user = clear($_GET['iduser']);
    $coment = urlencode($_GET['coment']);
    $buyer = urlencode($_GET['buyer']);
	
	
   // Tutaj sprawdzanie poprawnośći przesłanych danych 
   // np sprawdzanie czy dany kod istanieje w bazie danych lub sprawdzanie kodu w zewnetrznym serwisie 
   // Zmienna $status przechowuje status akcji 
   //        0 - Błędny kod 
   //        1 - Kod poprawny 
   //        2 - Błędny klucz api 
    
    
    echo $id_pay; //Wyswietlenie stasusu który umożliwa sprawdzenie poprawnosci przesłanych danych 
	echo $code;
    echo $id_user;
    echo $coment;
    echo $buyer;
   
   
   
   
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