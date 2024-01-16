<?php 
$host = 'localhost'; # O host onde a BD está localizada
$dbname = 'granfest'; # O nome da BD
$dbusername = 'root'; # O username que será usado para entrar na BD
$dbpassword = ''; # A password que será usada para entrar na BD

try{
    # String de conexão PDO que contém as informações sobre o acesso à BD
    $dsn = "mysql:host=$host; port= 3308; dbname=$dbname;charset=utf8";
    # Cria uma nova instância da classe PDO
    $pdo = new PDO($dsn, $dbusername, $dbpassword);    
    # Configura o modo de tratamento de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die("Falha na conexão à BD:" .$e->getMessage());

}
