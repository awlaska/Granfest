<?php 
$host = 'localhost';
$dbname = 'granfest';
$dbusername = 'six';
$dbpassword = 'TeRMLSz58WCa';

try{
    $dsn = "mysql:host=$host; port= 3308; dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $dbusername, $dbpassword);    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die("Falha na conexão à BD:" .$e->getMessage());

}
