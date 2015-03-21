<?php
class SQL{
	private $dbHandle = null;
	
	function __construct()
	{
		include ("config.php");
		$this->dbHandle = mysql_connect($db_host, $db_user, $db_password);
		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //wywala inny blad xD //tak tak wiem ze to obiektowa a nie PDO
	}
	
	function SetDatabase($database){
		mysql_select_db($database, $this->dbHandle);
		return true;
	}
	
	function Query($sql){
		return mysql_query($sql, $this->dbHandle);
	}
	//Depracted?
	function GetNumberOfRows($result){
		return mysql_num_rows($result);
	}
	
	function GetTable($result){
		return mysql_fetch_array($result);
	}
	
	function Wallet1Update($id_user,$cost){
		$wallet1 = $this->Query("SELECT wallet1 FROM `konta` WHERE id=$id_user");
		$wallet1 += $cost;
		$this->Query("UPDATE konta SET `wallet1`=$wallet1 WHERE id=$id_user");
	}
	
	function SmsHistory($id_user,$code,$cost,$buyer) {
		$this->Query("INSERT INTO 'sms_historia' ('id_user', code, buyer, cost) VALUES ($id_user, '$code', '$buyer', $cost)");
	}
	
	function __destruct() {
		mysql_close();
	}
}
?>
