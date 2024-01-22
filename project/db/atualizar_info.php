<?php   
# Ativa o modo estrito para o arquivo PHP
declare (strict_types= 1);

# Cria uma consulta SQL Preparada que retorna todas as linhas em que o username é igual ao dado
function get_info(string $info, string $tabela, string $coluna_valor, string $valor){
    require_once 'dbh.inc.php';

    $query = "SELECT $info FROM $tabela WHERE $coluna_valor = :valor;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":valor", $valor);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_COLUMN);
    return $result;
}
?>