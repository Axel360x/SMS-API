<?php 

	if($_GET){   
   // Filtracja przesłanych danych 
    $coment = urldecode($_GET['coment']);
    $buyer = urldecode($_GET['buyer']);
	
	include ('function.php');
	$db = new mysql;
	$db->baza($bazadanych);
	
	if(isset($_GET['iduser']) && isset(urldecode($_GET['controle'])) ){
				$controle = urldecode($_GET['controle']);
				$rezultat = $db->pytanie("SELECT wallet1 FROM konta WHERE id_user = {$_GET['iduser']} and nick = .$controle");
				unset($controle);
			if(mysql_num_rows($rezultat) != 1){
				error(8); //podales zle id niezgodne z kod autoryzacji
			}else{
			list($wallet1) = $db->tablica($rezultat); // tworze smienna $wallet1
			unset($rezultat); // czyszczenie tablicy
				}
	if(isset($_GET['code'])){
		if(!preg_match("/^[A-Za-z0-9]{8}$/",$_GET['code'])) error(10); // bledny kod z sms			
	if(isset($_GET['idsms'])){ //done?
			$rezultat = $db->pytanie("SELECT * FROM sms_pay WHERE id_pay = {$_GET['idsms']}");
			if(mysql_num_rows($rezultat) != 1){
				error(7); //brak takiego id_pay
			}else{
			list(, $sufix, $numer, $cost, $acc_id, $inter) = $db->tablica($rezultat);
			unset($rezultat); // czyszczenie tablicy
				// 0 - HomePay 1 - CashBill
				switch ($inter) {
    				case 0:
      				 unset($numer, $sufix);
						 /*KOD MA WYKONYWAC PO DOSTARCZENIU CODE*/
						 	$handle=fopen("http://homepay.pl/API/check_code.php?usr_id=".$config_homepay_usr_id."&acc_id=".$acc_id."&code=".$code,'r');
							$check=fgets($handle,8);
							fclose($handle);
												
						
     	   			 break;
					case 1:
      				 unset($id_acc); 
						 /*KOD MA WYKONYWAC PO DOSTARCZENIU CODE*/						
     			 	 break;
								}
				}			}
							 }else{error(9);} //brak code
					//$check //echo
														   }
	
	
	//$status;
}
?>