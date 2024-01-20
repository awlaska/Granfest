<?php
# Ativa o modo estrito para o arquivo PHP
declare(strict_types= 1);  

# Verifica se a variável se sessão "user_id" está definida, o que significa que o utilizador está logado
function output_username(){
    if(isset($_SESSION['user_username'])){
        echo$_SESSION["user_username"];
    }else{
        echo"Não estás logado!";
    }
}

# Verifica se a variável "errors_login" está definida. Se estiver, assume que ocorreram erros no processo de login
function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];
        echo "<br>";
        foreach($errors as $error){
            echo '<p class="form_error">' . $error. "</p>";
        }
        unset($_SESSION["errors_login"]);
    }
    else if(isset($_GET['login']) && $_GET['login'] === "success"){}
}
?>