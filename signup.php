<?php

require 'database.php';

$message = '';

if (!empty($_POST['usuario']) && !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
  $sql = "INSERT INTO usuarios (usuario, nombre, email, password) VALUES (:usuario, :nombre, :email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':usuario', $_POST['usuario']);
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Nuevo usuario creado con éxito';
  } else {
    $message = 'Lo sentimos, debe haber un problema al crear su cuenta.';
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Registrarse</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="assets/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/style_signup_util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style_signup_main.css">
  <!--===============================================================================================-->
</head>

<body style="background-color: #999999;">

  <div class="limiter">
    <div class="container-login100">
      <div class="login100-more" style="background-image: url('assets/img/Manos-ordenador-cafe.jpg');"></div>

      <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
        <form class="login100-form validate-form" action="signup.php" method="POST">
          <span class="login100-form-title p-b-59">
            Registrarse
          </span>

          <?php if (!empty($message)) : ?>
            <p> <?= $message ?></p>
          <?php endif; ?>

          <div class="wrap-input100 validate-input">
            <span class="label-input100">Nombre Completo</span>
            <input class="input100" type="text" name="nombre" placeholder="Ingrese su nombre completo">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Ingrese su correo">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <span class="label-input100">ID Usuario</span>
            <input class="input100" type="text" name="usuario" placeholder="Nombre de id usuario">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <span class="label-input100">Contraseña</span>
            <input class="input100" type="password" name="password" placeholder="Ingrese su contraseña">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <span class=" label-input100">Repite la contraseña</span>
            <input class="input100" type="password" name="confirm_password" placeholder="Confirmar contraseña">
            <span class="focus-input100"></span>
          </div>



          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Registrarse
              </button>
            </div>

            <a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
              Iniciar
              <i class="fa fa-long-arrow-right m-l-5"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>