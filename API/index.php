<?php 
    
    //Przykladowe dane wyslane przez api 
    $id_pay = '1';
    $code = "asd123f4";
    $id_user = '1';
    $buyer = urlencode('MARVIN');
	$sumakontrolna = urlencode('nick');

    
   $check = file_get_contents('http://localhost/SMS-API/API/api.php?idsms='.$id_pay.'&code='.$code.'&iduser='.$id_user.'&buyer='.$buyer.'&controle='.$sumakontrolna); 
   
   echo $check; echo '&nbsp';	
?>