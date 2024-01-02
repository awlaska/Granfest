<?php
require_once __DIR__ . '/infra/middlewares/middleware-not-authenticated.php';
require_once __DIR__ . './setupdatabase.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Granfest</title>
</head>

<body>
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none"><img
                        src="img/logo.jpg" alt="Granfest" class="mw-100"></a>
            </header>
            <div class="p-5 mb-4 bg-body-tertiary rounded">
                <div class="container-fluid py-5 ">
                    <h1 class="display-5 fw-bold">Bem vindo ao Login da Granfest!👋</h1>
                    <div class="d-flex justify-content">
                        <a href="/pages/public/signin.php"><button class="btn btn-success btn-lg px-5 me-2">Criar Conta</button></a>
                        <a href="/pages/public/signup.php"><button class="btn btn-info btn-lg px-4">Entrar</button></a>
                    </div>
                </div>
            </div>

            <footer class="p-3 bg-dark text-white mt-4">
                <article>Ruben e Sofia - SIR 2023-2024</article>
            </footer>
        </div>
    </main>
</body>

</html>