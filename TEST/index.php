<?php 
    
   //Przykladowe dane wyslane przez api 
   $id_pay = '123';
   $code = 'afwasdcwas';
   $id_user = 'test';
   $coment = urlencode('test');
   $buyer = urlencode('test');

    
   $hendle = file_get_contents("http://api.soruby.pl/sms_cecker.php?id_sms=".$id_pay."&code=".$code."&id_user=".$id_user."&coment=".$coment."&buyer=".$buyer); 
   
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