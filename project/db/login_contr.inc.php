<?php   
# Ativa o modo estrito de tipos para o arquivo PHP
declare (strict_types= 1);

# Verifica se o que o utilizador introduziu no login está preenchido
function is_input_empty(string $username, string $pwd){
    if(empty($username) || empty($pwd)){
        return true;
    }else {
    return false;
    }
}

# Verifica se existe algum problema com o username
function is_username_wrong(bool|array $result){
    if(!$result){
    return true;
    } else {
    return false;
    }

}

# Verifica se a password está correta
function is_password_wrong(string $pwd, string $hashedPwd){
    if(!password_verify($pwd, $hashedPwd)){
    return true;
    } else {
    return false;
    }

}



