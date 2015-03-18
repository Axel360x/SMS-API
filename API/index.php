<?php 
    
    //Przykladowe dane wyslane przez api 
    $id_pay = '1';
    $code = 'srv5wsy';
    $id_user = '1';
    $coment = urlencode('test');
    $buyer = urlencode('test');
	$sumakontrolna = urlencode('nick');

    
   $check = file_get_contents('http://localhost/SMS-API/API/api.php?idsms='.$id_pay.'&code='.$code.'&iduser='.$id_user.'&coment='.$coment.'&buyer='.$buyer.'&controle='.$sumakontrolna); 
   
   echo $check; 
   
   //http://localhost/SMS-API/API/api.php?idsms=1&code=srvawdsy&iduser=1&coment=test&buyer=test&controle=test

  
   
 if($check){ 
       if($check == '1'){ 
           echo 'Kod poprawny'; 
       }elseif($check == '2'){ 
           echo 'Błędny klucz api';
	   }elseif($check == '3'){ 
           echo '3'; 
	   }elseif($check == '4'){ 
           echo '4';  
	   }elseif($check == '5'){ 
           echo '5'; 
	   }elseif($check == '6'){ 
           echo '6';  
	   }elseif($check == '7'){ 
           echo '7';  
	   }elseif($check == '8'){ 
           echo '8'; 
	   }elseif($check == '9'){ 
           echo '9';  
       }elseif($check == '0'){ 
           echo 'Błędny kod sms'; 
       }else{ 
           echo 'Nieznany błąd'; 
       }    
   }else{ 
       echo 'Błąd połączenia z operatorem'; 
   } 
	
	
?>