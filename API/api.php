<?php 
    
   // Filtracja przeslanych danych 

   $idsms = clear($_GET['id_sms']); 
   $code = clear($_GET['code']); 
   $iduser = clear($_GET['id_user']); 
   $coment = urldecode($_GET['coment']); 
   $buyer = urldecode($_GET['buyer']); 
    
    // Tutaj sprawdzanie poprawnosci przeslanych danych 
    if (!empty($idsms) && $idsms <= 999)
    // sprawdze to w pod // homepay i cashbill
    
    if (!$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')) {
    $status = 6;
    exit;
    }
    
    
    if ($inter == homepay)$zapytanie = "SELECT `id`,`cost` FROM `sms_`$inter WHERE `idsms`=$idsms";
    if ($inter == cashbill)$zapytanie = "SELECT `txt`,`numer`,`cost` FROM `sms_`$inter WHERE `idsms`=$idsms";
    
    $idzapytania = mysql_query($zapytanie);
    while ($wiersz = mysql_fetch_row($idzapytania)) {
    echo $wiersz[0];}
    
  
   //        0 - Bledny kod 
   //        1 - Kod poprawny 
   //        2 - Bledny klucz api
   
   //       5 - Bledna id sms
   //       6 - Blad polaczenia z SQL
   
   if($status == 1){ 
        $zapytanie = "INSERT INTO `nba` (`id`, `nazwisko`, `lata`, `punkty` , `mistrzostwa`) VALUES ('', 'Jordan', '13', '32', '6')";
        $idzapytania = mysql_query($zapytanie);
   }elseif($status == 2){ 
       // Akcje do wykonania jesli kod api jest bledny 
   }    

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
