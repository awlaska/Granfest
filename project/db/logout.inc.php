<?php

# Inicia a sessão
session_start();
# Limpa todas as variáveis de sessão
session_unset();
# Destroi a sessão
session_destroy();

# Redireciona para a pagina principal
header("Location: ../pages/landing/landing.php");
die();