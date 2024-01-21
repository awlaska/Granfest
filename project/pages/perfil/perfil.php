<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="../img/favicon.ico"> 
</head>

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

              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    Nome
                    <input type="fname" class="form-control" name="name" placeholder=". $_SESSION['name'] .">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    Username
                    <input type="lname" class="form-control" name="username" placeholder="$_SESSION['username']">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    Email
                    <input type="email" class="form-control" name="email" placeholder="$_SESSION['email']">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    Password
                    <input type="password" class="form-control" name="pwd" value="" placeholder="$_SESSION['pwd']">
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" type="submit">Atualizar</button>
                  </div>
                </div>
              </div>
           </div>
         </div>
       </div>
    </div>
 </section>