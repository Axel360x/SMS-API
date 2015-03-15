<?php 
    
   // Filtracja przeslanych danych 
   $kod = clear($_GET['kod']); 
   $klucz_api = clear($_GET['key']); 
    
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