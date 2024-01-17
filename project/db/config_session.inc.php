<?php 

# Garante que as sessões serão mantidas só com cookies e em modo restrito
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

# Define os parâmetros das cookies
session_set_cookie_params([
    # Duração da sessão em segundos
    'lifetime'=> 1800,
    # Domínio em que as cookies de sessão são válidas
    'domain' => 'localhost',
    # Caminho no servidor em que o cookie de sessão é válido
    'path' => '/',
    # Indica se o cookie é só enviado por conexões seguras
    'secure' => true,
    # Restringe o acesso ao cookie para que seja só pelo protocolo HTTP
    'httponly' => true
]);

# Inicia sessão
session_start();
# Determina se a sessão está ativa ou não
if(isset($_SESSION['user_id'])) {
    if(!isset($_SESSION['last_regeneration'])) {
        regenerate_session_id_logged_in();
    
    } else {
        $interval = 60* 30; # Tempo em segundos ate atualizarmos novamente a id
        if(time() - $_SESSION["last_regeneration"] >= $interval){
            regenerate_session_id_logged_in();
        }
    }
    
}else{
    if(!isset($_SESSION['last_regeneration'])) {
        regenerate_session_id();
    
    } else {
        $interval = 60* 30; # Tempo em segundos ate atualizarmos novamente a id
        if(time() - $_SESSION["last_regeneration"] >= $interval){
            regenerate_session_id();
        }
    }

}

if(!isset($_SESSION['last_regeneration'])) {
    regenerate_session_id();

} else {
    $interval = 60* 30; # Tempo em segundos ate atualizarmos novamente a id
    if(time() - $_SESSION["last_regeneration"] >= $interval){
        regenerate_session_id();
    }
}

# Usada quando o user está logado
function regenerate_session_id(){
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time(); #Quando foi a ultima vez que atualizamos o session_id
}

function regenerate_session_id_logged_in(){
    session_regenerate_id(true);
    $newSessionId = session_create_id();
    $user_id = $_SESSION["user_id"];
    $sessionId = $newSessionId . "_" . $user_id;
    session_id($sessionId);
    $_SESSION["last_regeneration"] = time(); #Quando foi a ultima vez que atualizamos o session_id
}