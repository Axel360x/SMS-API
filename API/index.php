<?php 
    
    //Przykladowe dane wyslane przez api 
    $id_pay = '1001';
    $code = 'srvawdsy';
    $id_user = '0001';
    $coment = urlencode('test');
    $buyer = urlencode('test');

    
   $zmienna = file_get_contents('http://localhost/SMS-API/API/api.php?idsms='.$id_pay.'&code='.$code.'&iduser='.$id_user.'&coment='.$coment.'&buyer='.$buyer); 
   
   //http://localhost/SMS-API/API/api.php?idsms=1001&code=srvawdsy&iduser=0001&coment=test&buyer=test
    
   if($zmienna){ 
       if($zmienna == '1'){ 
           echo 'Kod poprawny'; 
       }elseif($zmienna == '2'){ 
           echo 'Błędny klucz api'; 
       }elseif($zmienna == '0'){ 
           echo 'Błędny kod sms'; 
       }else{ 
           echo 'Nieznany błąd'; 
       }    
   }else{ 
       echo 'Błąd połączenia z operatorem'; 
   } 
    
?>