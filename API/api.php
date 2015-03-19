<?php 
//fuck her right in the pussy
	if($_GET){   
   // Filtracja przesłanych danych 
	include ('function.php');
	$db = new mysql;
	$db->baza($bazadanych);
	
	if(isset($_GET['controle'])==md5(isset($_GET['iduser']))){
	if(isset($_GET['iduser'])){
				$rezultat = $db->pytanie("SELECT wallet1 FROM konta WHERE id_user = {$_GET['iduser']}");
			if(mysql_num_rows($rezultat) != 1){
				error(8); //podales zle id
			}else{	
			list($wallet1) = $db->tablica($rezultat); // tworze smienna $wallet1 //autoryzacja zmiennej			
			unset($rezultat); // czyszczenie tablicy
				}
	if(isset($_GET['code'])){
		if(!preg_match("/^[A-Za-z0-9]{8}$/",$_GET['code'])) {error(10);} // bledny kod z sms			
	if(isset($_GET['idsms'])){ //done?
			$rezultat = $db->pytanie("SELECT * FROM sms_pay WHERE id_pay = {$_GET['idsms']}");
			if(mysql_num_rows($rezultat) != 1){
				error(7); //brak takiego id_pay
			}else{
			list(, $acc_id, $sufix, $numer, $cost, $inter) = $db->tablica($rezultat);
			unset($rezultat); // czyszczenie tablicy
				// 0 - HomePay 1 - CashBill
				switch ($inter) {
    				case 0:
      				 unset($numer, $sufix);
						 /*KOD MA WYKONYWAC PO DOSTARCZENIU CODE*/
						 	$code=$_GET['code'];
						 	$handle=fopen("http://homepay.pl/API/check_code.php?usr_id=".$config_homepay_usr_id."&acc_id=".$acc_id."&code=".$code,'r');
							$check=fgets($handle,8);
							fclose($handle);
										//$check=1; //debug
										switch($check){
											case 0:
												error(6); //Nieprawidlowy kod
												break;
											case 1:
												//TO DO //Prawidlowy kod
												historiasms($_GET['iduser'],$code,$cost,$_GET['buyer']);
												aktualizacjawallet1($_GET['iduser'],$cost);
												error(1); //powodzenie platnosci
												break;
											default:
												error(9); //niepowodzenie platnosci
												break;
										}												
						
     	   			 break;
					case 1:
      				 unset($id_acc); 
						 /*KOD MA WYKONYWAC PO DOSTARCZENIU CODE*/						
     			 	 break;
								}
				}			}
							 }else{error(9);} //brak code
														   }
													  }
}
?>
