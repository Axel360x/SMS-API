<?php 
    
   //Przykladowe dane wyslane przez api 
   $kod = 'costam'; 
   $key = 'costam'; 
    
   $zmienna = file_get_contents('http://127.0.0.1:8020/SMS-API/TEST/api.php?kod='.$kod.'&key='.$key); 
    
   if($zmienna){ 
       if($zmienna == '1'){ 
           echo 'Kod poprawny'; 
       }elseif($zmienna == '2'){ 
           echo 'Bledny klucz api'; 
       }elseif($zmienna == '0'){ 
           echo 'Bledny kod sms'; 
       }else{ 
           echo 'Nieznany b��d'; 
       }    
   }else{ 
       echo 'Blad polaczenia z peratorem'; 
   } 
    
?>