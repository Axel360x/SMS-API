<?php 
    
   // Filtracja przes³anych danych 
   $kod = clear($_GET['kod']); 
   $klucz_api = clear($_GET['key']); 
    
   // Tutaj sprawdzanie poprawnoœæi przes³anych danych 
   // np sprawdzanie czy dany kod istanieje w bazie danych lub sprawdzanie kodu w zewnetrznym serwisie 
   // Zmienna $status przechowuje status akcji 
   //        0 - B³êdny kod 
   //        1 - Kod poprawny 
   //        2 - B³êdny klucz api 
    
   if($status == 1){ 
       // Akcje do wykonania jeœli status jest równy 1 np dodanie wpln do portfela urzytkownika który ma przypisany dany klucz api 
   }elseif($status == 2){ 
       // Akcje do wykonania jeœli kod api jest bledny 
   }    
    
   echo $status; //Wyswietlenie stasusu który umo¿liwa sprawdzenie poprawnosci przes³anych danych