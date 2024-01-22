<?php
  require_once '../../db/atualizar_info.php';
  require_once '../../db/signup_view.inc.php';
  require_once '../../db/config_session.inc.php';
  require_once '../../db/login_view.inc.php';
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
                <h1 class="fs-6 fw-normal text-center text-secondary mb-4">Perfil</h1>
                <h1 class="fs-6 fw-normal text-center text-secondary mb-4">Introduz novos dados para atualizares o teu perfil: </h1>
                  <div class="row gy-2 overflow-hidden">
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        Nome
                        <input type="fname" class="form-control" name="name" value="<?php echo isset($_SESSION['user_username']) ? get_info('uname', 'users', 'username', $_SESSION['user_username']) : 'None';?>" placeholder="Nome">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        Username
                        <input type="uname" class="form-control" name="username" value="<?php echo isset($_SESSION['user_username']) ? $_SESSION['user_username'] : 'None'; ?>" placeholder="Username">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        Email
                        <input type="email" class="form-control" name="email" value="<?php echo isset($_SESSION['user_username']) ? get_info('email', 'users', 'username', $_SESSION['user_username']) : 'None'; ?>" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        Password
                        <input type="password" class="form-control" name="pwd" value="<?php echo isset($_SESSION['user_username']) ? get_info('pwd', 'users', 'username', $_SESSION['user_username']) : 'None'; ?>" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-grid my-3">
                        <button class="btn btn-primary btn-lg" type="submit">Atualizar</button>
                      </div>
                    </div>
                  <!--Logout Form-->
                  <form action="../db/logout.inc.php" method="post">
                    <div class="row gy-2 overflow-hidden">
                      <div class="d-grid my-3">
                        <button class="btn btn-primary btn-lg" type="submit">Logout</button>
                      </div>
                      </div>
                    </div>
                  </form>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
  </section>
</body>