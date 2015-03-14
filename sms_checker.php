<?
session_start();

// dane do uzupełnienia
$id_pay = '123';
$code = 'afwasdcwas';
$id_user = 'test';
$coment = urlencode('test');
$buyer = urlencode('test');


if($_POST)
{
    $check = $_POST['check'];
    
    $handle = fopen("http://api.soruby.pl/sms_cecker.php?id_sms=".$id_pay."&code=".$code."&id_user=".$id_user."&coment=".$coment."&buyer=".$buyer."", 'r');
    $status = fgets($handle, 8);
    fclose($handle);

    if($status == '1')
    {
	//kod prawidłowu	
	die();
    }
    else
    {  
	// kod nie prawidłowy
	
	Header("Location: $strona_ok");
	die();
    }
}

Header("Location: $strona_bad");
die();

?>
