<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE $dbname";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS konta (
    id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30),
	login VARCHAR(30) NOT NULL,
	password VARCHAR(32) NOT NULL,
    email VARCHAR(40) NOT NULL
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table konta created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	
try {
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS us (
    id INT(3) UNSIGNED PRIMARY KEY, 
    secondname VARCHAR(30) NOT NULL,
	country VARCHAR(10) NOT NULL,
	city VARCHAR(40) NOT NULL,
	street VARCHAR(20) NOT NULL,
	house INT(3) UNSIGNED NOT NULL,
	flat INT(3) UNSIGNED NOT NULL,
	pesel INT(11) UNSIGNED NOT NULL,
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table us created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	
try {
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS sms_pay (
    id INT(3) UNSIGNED PRIMARY KEY, 
    id_acc INT(11) NOT NULL,
	sufix VARCHAR(10) NOT NULL,
	numer INT(7) UNSIGNED NOT NULL,
	cost INT(3) UNSIGNED NOT NULL,
	inter INT(1) UNSIGNED NOT NULL,
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table sms_pay created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	
try {
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS sms_history (
    id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    id_user INT(3) NOT NULL,
	code VARCHAR(8) NOT NULL,
	buyer VARCHAR(20) NOT NULL,
	cost INT(2) UNSIGNED NOT NULL,
    date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table sms_history created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>