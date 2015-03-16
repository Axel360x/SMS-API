<?php 
    
   //Przykladowe dane wyslane przez api 
   $id_pay = '123';
   $code = 'afwasdcwas';
   $id_user = 'afwasdcwas';
   $coment = urlencode('test');
   $buyer = urlencode('test');

    
   $hendle = file_get_contents("http://s2.soruby.pl/api/api.php?idsms=".$id_pay."&code=".$code."&iduser=".$id_user."&coment=".$coment."&buyer=".$buyer); 
   
   ///api.php?idsms=123&code=afwasdcwas&iduser=afwasdcwas&coment=test&buyer=test
   
   echo $hendle;
    
   if($handle){ 
       if($zhandle == '1'){ 
           echo 'Kod poprawny'; 
       }elseif($handle == '2'){ 
           echo 'Bledny klucz api'; 
       }elseif($handle== '0'){ 
           echo 'Bledny kod sms'; 
       }else{ 
           echo 'Nieznany blad'; 
       }    
   }else{ 
       echo 'Blad polaczenia z peratorem'; 
   } 
    
?>