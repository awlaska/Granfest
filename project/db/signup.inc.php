<?php
# Verifica se o request_method é do tipo "POST"
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    # Código para processar dados do formulário quando a requisição é do tipo POST
    # Obtém os dados a partir do método POST
    $nome = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try{
        # Inclui os arquivos necessários para estabelecer conexão com a BD, implementar o modelo e o controlador
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';


        // Valida erros
        $errors= [];

        if(is_input_empty($nome, $username, $email, $pwd) ){
            $errors["empty_input"]= "Fill in all fields!";
        }
        
        if(is_email_invalid($email)){
            $errors["invalid_email"]= "Invalid email used!";
        }

        if(is_username_taken($pdo, $username)){
            $errors["username_taken"]= "Username already taken!";
        }

        if(is_email_registered( $pdo, $email)){
            $errors["email_used"]= "Email already registered!";
        }

         # Inclui um arquivo para configuração
        require_once 'config_session.inc.php';

        # Redirecionamento em caso de erros
        if($errors){
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../pages/signup.php");
            die();
        }

        # Cria um utilizador
        create_user( $pdo, $nome, $pwd,  $username,  $email);

        # Redirecionamento em caso de sucesso
        header("Location: ../pages/signup.php?signup=success");
        $pdo = null;
        $stmt = null;
        die();

    # Captura de exceções
    } catch(PDOException $e){
        die("Query Failed: " .$e->getMessage());  
        }
}else {
    # Redireciona para a página signup se a requisição não for do tipo POST
    header("Location: ../pages/signup.php");
    die();
}