<?php 

	if($_GET){   
   // Filtracja przesłanych danych 
    $coment = urldecode($_GET['coment']);
    $buyer = urldecode($_GET['buyer']);
	
	include ('function.php');
	$db = new mysql;
	$db->baza($bazadanych);
	
	if(isset($_GET['iduser']) && isset(urldecode($_GET['controle'])) ){
		
																	  }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_GET['idsms'])){ //done?
			$rezultat = $db->pytanie("SELECT * FROM sms_pay WHERE id_pay = {$_GET['idsms']}");
			if(mysql_num_rows($rezultat) != 1){
				error(7);
			}else{
			list(, $sufix, $numer, $cost, $id_acc, $inter) = $db->tablica($rezultat);
				// 0 - HomePay 1 - CashBill
				switch ($inter) {
    				case 0:
      				 unset($numer, $sufix);
						if(isset($_GET['code'])){
						 /*KOD MA WYKONYWAC PO DOSTARCZENIU CODE*/
												}
						
     	   			 break;
					case 1:
      				 unset($id_acc); 
						if(isset($_GET['code'])){
						 /*KOD MA WYKONYWAC PO DOSTARCZENIU CODE*/
												}
						
     			 	 break;
								}
				}			}
	
	
	//$status;
}
?>