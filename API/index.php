<?php 
    
    //Przykladowe dane wyslane przez api 
    $id_pay = '101';
    $code = 'srvawdsy';
    $id_user = '0001';
    $coment = urlencode('test');
    $buyer = urlencode('test');

    
   $check = file_get_contents('http://localhost/SMS-API/API/api.php?idsms='.$id_pay.'&code='.$code.'&iduser='.$id_user.'&coment='.$coment.'&buyer='.$buyer); 
   
   //http://localhost/SMS-API/API/api.php?idsms=1001&code=srvawdsy&iduser=0001&coment=test&buyer=test

   $dane = explode(" ", $check);
   
   
 if($check){ 
       if($check == '1'){ 
           echo 'Kod poprawny'; 
       }elseif($check == '2'){ 
           echo 'Błędny klucz api'; 
       }elseif($check == '0'){ 
           echo 'Błędny kod sms'; 
       }else{ 
           echo 'Nieznany błąd'; 
       }    
   }else{ 
       echo 'Błąd połączenia z operatorem'; 
   } 
    
	echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
	echo $dane[0]; echo '&nbsp;&nbsp;';
	echo $dane[1]; echo '&nbsp;&nbsp;';
    echo $dane[2]; echo '&nbsp;&nbsp;';
	echo $dane[3]; echo '&nbsp;&nbsp;';
	echo $dane[4];  echo '&nbsp;&nbsp;';
	
	
	
?>