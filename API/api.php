<?php 
    
   // Filtracja przeslanych danych 

   $idsms = clear($_GET['id_sms']); 
   $code = clear($_GET['code']); 
   $iduser = clear($_GET['id_user']); 
   $coment = urldecode($_GET['coment']); 
   $buyer = urldecode($_GET['buyer']); 
    
    // Tutaj sprawdzanie poprawnosci przeslanych danych 
    if (!empty($idsms) && $idsms <= 9999)
    switch($idsms)
        case (1000 < $idsms <= 3333):
        $inter = homepay;
        mysql_select_db('sms_homepay');
    break;
        case (3333 < $idsms <= 6666):
        $inter = cashbill;
        mysql_select_db('sms_cashbill');
    break;
        case (6666 < $idsms <= 9999):
        $inter = platnosci-online;
        mysql_select_db('sms_cashbill');
    break;
    default:
        $status = 5; //bledne id sms
     break;
    endswitch;

    if ($status != 5 && !mysql_connect('localhost', 'mysql_user', 'mysql_password')) {
    $status = 6;
    exit;
    }
  
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
