<?php
session_start();
include "../controllers/conexion.php";
$mensaje = '';
$error = false;
if (isset($_POST['submit'])) {

  if (empty($_POST["email"]) || empty($_POST["contra"])) {
    $error = true;
    $mensaje = '<div class="pb-3 alert alert-dismissible fade show p-0 mb-0" role="alert">
                  <div class="alert-arrow bg-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                  <p><strong class="txt-dark">¡Error! Al digitar contraseña o correo </strong></p>
                  <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-danger text-white px-3 py-1" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span></button>
              </div>';
  } else {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $contra = $_POST['contra'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = true;
      $mensaje = '<div class="pb-3 alert alert-dismissible fade show p-0 mb-0" role="alert">
                      <div class="alert-arrow bg-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                      <p><strong class="txt-dark">¡Error! El formato del correo no es válido </strong></p>
                      <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-danger text-white px-3 py-1" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span></button>
                  </div>';
    } else {
      // Supongamos que $conn es tu conexión a la base de datos
      $sql = "SELECT * FROM usuario WHERE correo = '$email'";
      // echo $sql;
      $stmt = $conn->query($sql);
      $usuario = $stmt->fetch_assoc();
      // echo $usuario['contraseña'];
      if ($usuario) {
        if ($contra==$usuario['contraseña']) {
          $_SESSION['id'] = $usuario['usuario_id'];
          $_SESSION['nombre'] = $usuario['nombre'];
          $_SESSION['apellido'] = $usuario['apellido'];
          $_SESSION['correo'] = $usuario['correo'];
          header("Location: home.php");
          exit();
        } else {
          $error = true;
          $mensaje = '<div class="pb-3 alert alert-dismissible fade show p-0 mb-0" role="alert">
                              <div class="alert-arrow bg-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                              <p><strong class="txt-dark">¡Error! Contraseña incorrecta</strong></p>
                              <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-danger text-white px-3 py-1" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span></button>
                          </div>';
        }
      } else {
        $error = true;
        $mensaje = '<div class="pb-3 alert alert-dismissible fade show p-0 mb-0" role="alert">
                          <div class="alert-arrow bg-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                          <p><strong class="txt-dark">¡Error! Correo no encontrado</strong></p>
                          <button class="p-0 border-0 me-2 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-danger text-white px-3 py-1" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span></button>
                      </div>';
      }
    }
  }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dunzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Dunzo admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
  <title>Centro de Salud Año Nuevo Collique - Demo</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
  <!-- login page start-->
  <div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">
        <div class="login-card login-dark">
          <div>
            <div class="login-main">
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo-salud.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="looginpage"></a></div>

              <?php
              if ($error) {
                echo $mensaje;
              }
              ?>
              <form class="theme-form" method="post">
                <h3>Iniciar sesión en la cuenta</h3>
                <div class="form-group">
                  <label class="col-form-label">Dirección de correo electrónico</label>
                  <input name="email" class="form-control" type="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">Contraseña</label>
                  <div class="form-input position-relative">
                    <input name="contra" class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    <div class="show-hide"><span class="mostrar"> </span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                  </div><a class="link" href="forget-password.html">¿Has olvidado tu contraseña?</a>
                  <div class="text-end mt-3">
                    <a href="home.php">
                      <button name="submit" class="btn btn-primary btn-block w-100" type="submit">
                        Ingresa
                      </button>
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- Plugin used-->
  </div>
</body>

</html>