<?php
  require_once '../db/signup_view.inc.php';
  require_once '../db/config_session.inc.php';
  require_once '../db/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="../../img/favicon.ico"> 
</head>

<!-- Login 13 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
              <a href="landing/landing.php">
                <img src="../../img/logo.jpg" alt="Granfest Logo" width="150" height="">
              </a>
            </div>
            <!-- Signup Form-->
            <h1 class="fs-6 fw-normal text-center text-secondary mb-4">Regista-te na nossa Plataforma!</h1>
            <form action="../db/signup.inc.php" method="post">
              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="fname" class="form-control" name="name" placeholder="Nome" required>
                    <label for="fname" class="form-label">Nome</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="lname" class="form-control" name="username" placeholder="Username" required>
                    <label for="lname" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="pwd" value="" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid my-3">
                  <button class="btn btn-primary btn-lg" type="submit">Registar </button>
                </div>
              </div>
              <div>
                <a class="nav-link" href="login.php">Tens conta? Entra aqui!</a>
              </div>
            </form>
            <?php
            check_signup_errors();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>