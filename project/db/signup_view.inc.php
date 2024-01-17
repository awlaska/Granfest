<?php
# Ativa o modo estrito para o arquivo PHP
declare(strict_types=1);

# Verifica se a variável "errors_signup" está definida. Se estiver, assume que ocorreram erros no processo de signup
function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";
        foreach($errors as $error){
            echo '<p class= "form-error">' .$error . '</p>';
            
        }
        
        unset($_SESSION['errors_signup']);
        }else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
            echo '<br>';
            echo '<p class="form-success"> Signup bem sucedido!</p>';

        }
}
?>