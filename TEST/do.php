<?php 
    
   //Przyk³adowe dane wys³ane przez api 
   $kod = 'costam'; 
   $key = 'costam'; 
    
   $zmienna = file_get_contents('http://twojastrona.pl/api.php?kod='.$kod.'&key='.$key); 
    
   if($zmienna){ 
       if($zmienna == '1'){ 
           echo 'Kod poprawny'; 
       }elseif($zmienna == '2'){ 
           echo 'B³êdny klucz api'; 
       }elseif($zmienna == '0'){ 
           echo 'B³êdny kod sms'; 
       }else{ 
           echo 'Nieznany b³¹d'; 
       }    
   }else{ 
       echo 'B³¹d po³¹czenia z operatorem'; 
   } 
    
?>