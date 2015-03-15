<?php 
    
   // Filtracja przeslanych danych 

   $id_sms = clear($_GET['id_sms']); 
   $code = clear($_GET['code']); 
   $id_user = clear($_GET['id_user']); 
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
    
   echo $status; //Wyswietlenie stasusu ktory umozliwa sprawdzenie poprawnosci przeslanych danych
   echo $id_sms;
   echo $code;
   echo $id_user;
   echo $coment;
   echo $buyer;