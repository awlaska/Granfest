<?php
  require_once "../../db/atualizar_info.php";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil</title>
  <link rel="stylesheet" href="perfil.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="icon" href="../img/favicon.ico"> 
</head>

<body>
    <!-- Login 13 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <a href="../landing/landing.php">
                                    <img src="../../../img/logo.jpg" alt="Granfest Logo" width="150" height="">
                                </a>
                            </div>
                            <form action="../db/login_model.inc.php" method="post">
                                <h1 class="fs-6 fw-normal text-center text-secondary mb-4">Novo Evento</h1>
                                <!-- Event Name -->
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            Nome do Evento
                                            <?php echo $_SESSION['event_id']?>
                                            <input type="fname" class="form-control" name="name" value="<?php echo isset($_SESSION['event_id']) ? get_info('event_name', 'events', 'event_id', $_SESSION['event_id']) : 'None';?>" placeholder="Nome">
                                        </div>
                                    </div>
                                </div>
                                <!-- Event Name -->
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            Nome do Evento
                                            <?php echo $_SESSION['event_id']?>
                                            <input type="fname" class="form-control" name="name" value="<?php echo isset($_SESSION['event_id']) ? get_info('event_name', 'events', 'event_id', $_SESSION['event_id']) : 'None';?>" placeholder="Nome">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div>
    </section>
</body>
