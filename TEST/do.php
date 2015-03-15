<?php 
    
   //Przyk�adowe dane wys�ane przez api 
   $kod = 'costam'; 
   $key = 'costam'; 
    
   $zmienna = file_get_contents('http://127.0.0.1:8020/SMS-API/TEST/api.php?kod='.$kod.'&key='.$key); 
    
   if($zmienna){ 
       if($zmienna == '1'){ 
           echo 'Kod poprawny'; 
       }elseif($zmienna == '2'){ 
           echo 'B��dny klucz api'; 
       }elseif($zmienna == '0'){ 
           echo 'B��dny kod sms'; 
       }else{ 
           echo 'Nieznany b��d'; 
       }    
   }else{ 
       echo 'B��d po��czenia z operatorem'; 
   } 
    
?>