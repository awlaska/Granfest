<?php
# Ativa o modo estrito de tipos para o arquivo PHP
declare(strict_types=1);

# Verifica se o que o utilizador introduziu no login está preenchido
function is_input_empty( string $uname, string $username, string $email, string $pwd){
    if(empty($uname) || empty($username) || empty($email) || empty($pwd)){
        return true;
    }
    else{
        return false;
    }
}

# Verifica se existe algum problema com o email
function is_email_invalid( string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}

# Verifica se existe algum username já existente igual ao que o utilizador introduziu
function is_username_taken(object $pdo, string $username){
    if(get_username( $pdo, $username)){
        return true;
    }
    else{
        return false;
    }
}

# Cria um novo utilizador na BD
function create_user(object $pdo, string $uname, string $pwd, string $username, string $email){
    set_user( $pdo, $uname, $pwd,  $username,  $email, 0);
}

# Verifica se existe algum email já existente igual ao que o utilizador introduziu
function is_email_registered(object $pdo, string $email){
    if(get_email( $pdo, $email)){
        return true;
    }
    else{
        return false;
    }
}
?>