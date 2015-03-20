<?php
$id_user = 1;
$id_pay = 2;
$tesc = 'AG.MINE';
$numer = '72480':
$netto = 2;
$brutto=netto*1.23;

if($_POST&&$_POST['check_code'])
    {
	$buyer=$_POST['buyer'];
    $code=$_POST['code'];
    if(!preg_match("/^[A-Za-z0-9]{8}$/",$code)) echo "Zly format kodu - 8 znakow.";
    else
	{
$check = file_get_contents('http://localhost/SMS-API/API/api.php?idsms='.$id_pay.'&code='.$code.'&iduser='.$id_user.'&buyer='.$buyer); 

	if($check=="1")
	    {
	    echo "Gratulacje, kod poprawny. Kupiles cos w usludze";
	    }
	elseif($check=="0")
	    {
	    echo "Nieprawidlowy kod.";
	    }
	else
	    {
	    echo "Blad w polaczeniu z operatorem.";
	    }
    
	}
    }
    
?>
<html><body>
<br/><br/>
<?php

echo "Wyslij SMS o tresci ".$v['tekst']." na numer ".$v['numer']." za ".$v['netto']."zl + VAT ( ".$v['brutto']."zl )<br/>\n";
echo "Wyslij SMS o tresci ".$tesc." na numer ".$numer." za ".$netto." zl + VAT ( ".$brutto." zl )<br/>\n";
?>
<br/><br/>
<form method="post" action="">
<input type="hidden" name="check_code" value="1">
Podaj nick: <input type="text" size="20" name="buyer"><br/>
Podaj kod: <input type="text" size="8" name="code">
</select>
<br/>
<input type="submit" value="Sprawdz">
</form>
</body>
</html>