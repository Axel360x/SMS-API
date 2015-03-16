<?php 
    
   // Filtracja przeslanych danych 

   $idsms = clear($_GET['id_sms']); 
   $code = clear($_GET['code']); 
   $iduser = clear($_GET['id_user']); 
   $coment = urldecode($_GET['coment']); 
   $buyer = urldecode($_GET['buyer']); 
    
    
   // Tutaj sprawdzanie poprawnosci przeslanych danych 
   // np sprawdzanie czy dany kod istanieje w bazie danych lub sprawdzanie kodu w zewnetrznym serwisie 
   // Zmienna $status przechowuje status akcji 
   //        0 - Bledny kod 
   //        1 - Kod poprawny 
   //        2 - Bledny klucz api 
   
   if($status == 1){ 
       // Akcje do wykonania jesli status jest rowny 1 np dodanie wpln do portfela urzytkownika ktory ma przypisany dany klucz api 
   }elseif($status == 2){ 
       // Akcje do wykonania jesli kod api jest bledny 
   }    
   $status=1
    ;
   echo $status; //Wyswietlenie stasusu ktory umozliwa sprawdzenie poprawnosci przeslanych danych
   
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