<?php
# Ativa o modo estrito de tipos para o arquivo PHP
declare(strict_types=1);

# Consulta na BD, usando um Prepared Statement para buscar o username introduzido
function get_username(object $pdo, string $username){
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

# Consulta na BD, usando um Prepared Statement para buscar o email introduzido
function get_email(object $pdo, string $email){
    $query = "SELECT username FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

# Insere um novo utilizador na BD, usando um Prepared Statement
function set_user(object $pdo, string $pwd, string $username, string $email){
    $query = "INSERT into users(username, pwd, email) VALUES (:username, :pwd, :email); ";
    $stmt = $pdo->prepare($query);

    $options = [ 
        'cost' => 12 ];
    
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

}