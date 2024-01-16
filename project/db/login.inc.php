<?php 
# Verifica se o request_method é do tipo "POST"
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    # Código para processar dados do formulário quando a requisição é do tipo POST
    # Obtém os dados a partir do método POST
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    
    try{
        # Inclui os arquivos necessários para estabelecer conexão com a BD, implementar o modelo e o controlador
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        # Valida erros
        $errors= [];

        if(is_input_empty( $username, $pwd)){
            $errors["empty_input"]= "Fill in all fields!";
        }

        $result = get_user($pdo, $username);

        if(is_username_wrong($result)){
           $errors["login_incorrect"]= "Incorrect Login Info!";
        }

        if(!is_username_wrong($result) && !is_password_wrong($pwd, $result["pwd"])){
           $errors["login_incorrect"]= "Incorrect Login Info!";
        }
         
        # Inclui um arquivo para configuração
        require_once 'config_session.inc.php';
         
        # Redirecionamento em caso de erros
        if($errors){
            $_SESSION["errors_login"] = $errors;
           
            header("Location: ../pages/signup.php");
            die(); 
        }
         
        # Estabelece uma ligação em caso de sucesso
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION["last_regeneration"] = time();

        # Redirecionamento em caso de sucesso
        header("Location:  ../pages/signup.php?login=success");
        $pdo=null;
        $stmt=null;
        die();

    # Captura de exceções
    }catch(PDOException $e){
        die("Query Failed: " . $e->getMessage());
    }   
}
else{
    # Redireciona para a página signup se a requisição não for do tipo POST
    header("Location: ../pages/signup.php");
    die();
}