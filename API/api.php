<?php 
    
   // Filtracja przesłanych danych 
    $id_pay = $_GET['idsms'];
    $code = $_GET['code'];
    $id_user = $_GET['iduser'];
    $coment = urldecode($_GET['coment']);
    $buyer = urldecode($_GET['buyer']);
	
	include ('function.php');
	$db = new mysql;
	$db->baza($bazadanych);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if($id_pay) //done?
			$rezultat = $db->pytanie("SELECT * FROM `sms_pay` WHERE `id_pay` = '".$id_pay."'");
			if(mysql_num_rows($rezultat) == 1){
			error(1);
		}else{
		list($id_pay, $sufix, $numer, $cost, $id_acc, $inter) = $db->tablica($rezultat);
			// 0 - HomePay 1 - CashBill
			switch ($inter) {
    			case 0:
      			  unset($id_pay, $numer, $sufix);
     			  break;
				 case 1:
      			  unset($id_pay, $id_acc); 
     			  break;
				}
		}
	
	
	//$status;
?>