<?php   
# Ativa o modo estrito para o arquivo PHP
declare (strict_types= 1);

# Cria uma consulta SQL Preparada que retorna todas as linhas em que o username é igual ao dado
function get_user(object $pdo, string $username){
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>