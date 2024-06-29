<?php
include "controllers/conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dni = $_POST['dni'];

  // Preparar la consulta SQL para buscar al paciente por DNI
  $sql = "SELECT * FROM paciente WHERE dni = $dni";

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
  <link rel="icon" href="assets/" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>Centro de Salud Año Nuevo Collique - Demo</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
  <link rel="icon" href="assets/svg/landing-icons.svg">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/owlcarousel.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="landing-page">
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="landing-page">
    <div class="lines">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <!-- Page Body Start            -->
    <header style="background-color: #D91023;" class="landing-header">
      <div class="custom-container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-light p-0" id="navbar-example2"><a class="navbar-brand" href="javascript:void(0)"> <img class="img-fluid" src="../assets/images/logo/logo-salud-1.png" alt=""></a>
              <ul class="landing-menu nav nav-pills">
                <li class="nav-item menu-back">back<i class="fa fa-angle-right"></i></li>
                <li class="nav-item"><a class="nav-link" href="#home">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#Applications">Especialidades</a></li>
                <li class="nav-item"><a class="nav-link" href="#faq-section">Preguntas </a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#faq-section">Preguntas </a></li> -->
              </ul>
              <div class="buy-block">
                <a style="background-color: #26292E;" class="btn-landing btn-white" href="template/login.php">Ingresar</a>
                <div class="toggle-menu"><i class="fa fa-bars"></i></div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- header end-->
    <div class="container">

      <!-- landing home start-->
      <section class="landing-home" id="home">
        <div class="row">
          <div class="col-12">
            <div class="landing-home-contain">
              <div>
                <h1 class="text-dark">Bienvenido al Centro de Salud Año Nuevo Collique</h1>
                <h4>
                  <p class="text-dark"> Comprometidos con tu bienestar en cada etapa de la vida</p>
                </h4>
                <ul class="btn-home-list">
                  <li><button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap">Cita Medica</button>

                  </li>
                </ul>
              </div>
            </div>
            <div class="modal fade bd-example-modal-lg" id="exampleModalgetbootstrap" tabindex="-1" role="dialog" aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                    <h3 class="modal-header justify-content-center border-0">Cita Medica</h3>

                    <?php

                    if (isset($_POST['registrar'])) {
                      echo "<pre>";
                      var_dump($_POST);
                      echo "</pre>";
                    }
                    ?>
                    <div class="modal-body">
                      <?php
                      if (!isset($_POST['dni'])) {
                      ?>
                        <form id="citaForm" method="post" class="row g-3 needs-validation" novalidate="">
                          <!-- Sección de búsqueda por DNI -->
                          <div class="row d-flex justify-content-evenly">
                            <div class="col-md-6 pb-4">
                              <label class="form-label" for="dni">DNI<span class="txt-danger">*</span></label>
                              <div class="input-group">
                                <input class="form-control" id="dni" type="number" placeholder="76780412" required name="dni">
                                <button id="buscarBtn" class="btn btn-primary" type="submit">
                                  <i class="fa fa-search" aria-hidden="true"></i> Buscar
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      <?php
                      }
                      if (isset($_POST['dni'])) {
                      ?>
                        <form id="citaForm" method="post" class="row g-3 needs-validation" novalidate="">
                          <!-- Sección de datos del paciente -->
                          <div class="row d-flex justify-content-evenly">
                            <div class="col-md-6 pb-4">
                              <label class="form-label" for="dni">DNI<span class="txt-danger">*</span></label>
                              <div class="input-group">
                                <input class="form-control" id="dni" type="number" placeholder="76780412" required name="dni">
                                <button id="buscarBtn" class="btn btn-primary" type="submit">
                                  <i class="fa fa-search" aria-hidden="true"></i> Buscar
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <label class="form-label" for="nombre">Nombres</label>
                              <input name="nombre" class="form-control" id="nombre" type="text" required="" readonly>
                              <div class="valid-feedback">¡Se ve bien!</div>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label" for="apellido">Apellidos</label>
                              <input name="apellido" class="form-control" id="apellido" type="text" required="" readonly>
                              <div class="valid-feedback">¡Se ve bien!</div>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label" for="celular">Celular</label>
                              <input name="celular" class="form-control" id="celular" type="number" min="111111111" max="999999999" required="" readonly>
                              <div class="valid-feedback">¡Se ve bien!</div>
                            </div>
                          </div>

                          <!-- Más campos... -->

                          <div class="row">
                            <div class="col-md-12">
                              <label class="form-label" for="direccion">Dirección</label>
                              <input name="direccion" class="form-control" id="direccion" type="text" required="" readonly>
                              <div class="valid-feedback">¡Se ve bien!</div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4 position-relative">
                              <label class="form-label" for="genero">Género</label>
                              <select name="genero" class="form-select" id="genero" required="" disabled>
                                <option selected="" disabled="" value="">Seleccione...</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                              </select>
                              <div class="invalid-tooltip">Seleccione un estado válido.</div>
                            </div>
                            <div class="col-md-4">
                              <label class="form-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                              <input name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" type="date" readonly>
                              <div class="invalid-tooltip">Ingrese una fecha.</div>
                            </div>
                            <div class="col-md-4 position-relative">
                              <label class="form-label" for="Especialidad">Servicio</label>
                              <select name="especialidad" class="form-select" id="Especialidad" required="" disabled>
                                <option selected="" disabled="" value="">Seleccione...</option>
                                <option>PSICOLOGIA</option>
                                <option>MEDICINA GENERAL</option>
                                <option>OBSTETRICIA</option>
                                <option>NUTRICION</option>
                                <option>ODONTOLOGIA</option>
                                <option>CRECIMIENTO Y DESARROLLO</option>
                                <option>INMUNIZACIONES</option>
                              </select>
                              <div class="invalid-tooltip">Seleccione un estado válido.</div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Correo electrónico</label>
                                <input name="correo" class="form-control" id="exampleFormControlInput1" type="email" placeholder="Dunzotheme@gmail.com" readonly>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-check mb-3">
                              <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" required>
                              <label class="form-check-label d-block mb-0" for="flexCheckDefault">Acepta nuestros Términos y Política de Privacidad haciendo clic en Enviar a continuación.</label>
                            </div>
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                            <button name="registrar" class="btn btn-primary" type="submit" disabled>Registrar</button>
                          </div>
                        </form>
                      <?php
                      }
                      ?>
                    </div>

                    <script>
                      document.addEventListener('DOMContentLoaded', function() {
                        // Obtener el modal de Bootstrap por su ID
                        var modal = document.getElementById('exampleModalgetbootstrap');

                        // Mostrar el modal usando el método modal de Bootstrap
                        var myModal = new bootstrap.Modal(modal);
                        myModal.show();

                        // Opcional: cerrar modal al hacer clic en el botón de cierre (si lo deseas)
                        var closeBtn = modal.querySelector('.modal-header .close');
                        closeBtn.addEventListener('click', function() {
                          myModal.hide();
                        });

                        // Opcional: cerrar modal al hacer clic fuera de él
                        modal.addEventListener('click', function(event) {
                          if (event.target === modal) {
                            myModal.hide();
                          }
                        });
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-2 landing-progress">
                <div class="row ps-3">
                  <div class="col-12">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-3.png" alt=""></div>
                  </div>
                  <div class="col-12">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-2.png" alt=""></div>
                  </div>
                  <div class="col-12">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-1.png" alt=""></div>
                  </div>
                </div>
              </div>
              <div class="col-4 landing-table">
                <div class="row">
                  <div class="col-6">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-5.gif" alt=""></div>
                  </div>
                  <div class="col-6">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-6.png" alt=""></div>
                  </div>
                  <div class="col-12">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-4.png" alt=""></div>
                  </div>
                </div>
              </div>
              <div class="col-4 landing-chart">
                <div class="row">
                  <div class="col-12">
                    <div class="card animation-card extra-shadow"><img class="img-fluid" src="../assets/images/landing/landing-home/card-8.png" alt=""></div>
                  </div>
                  <div class="col-12">
                    <div class="card animation-card"><img class="img-fluid" src="../assets/images/landing/landing-home/card-7.png" alt=""></div>
                  </div>
                </div>
              </div>
              <div class="col-2 landing-card">
                <div class="row pe-3">
                  <div class="col-12">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-10.png" alt=""></div>
                  </div>
                  <div class="col-12">
                    <div class="card animation-card"> <img class="img-fluid" src="../assets/images/landing/landing-home/card-9.png" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- landing home end-->
      <!--Core Feature start-->
      <section class="core-feature section-py-space" id="core-feature">
        <div class="title">
          <h2 class="gradient-10">Características</h2>
        </div>
        <div class="custom-container">
          <div class="row feature-block">
            <div class="owl-carousel owl-theme" id="feature-js">
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="heart"></i></div>
                    <h4>Atención Integral</h4>
                    <p>Ofrecemos una gama completa de servicios de salud para todas las edades.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="clock"></i></div>
                    <h4>Reserva 24/7</h4>
                    <p>Puedes reservar tus citas médicas en cualquier momento y desde cualquier lugar.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="users"></i></div>
                    <h4>Profesionales Calificados</h4>
                    <p>Contamos con un equipo de médicos y especialistas altamente calificados.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="calendar"></i></div>
                    <h4>Fácil de Usar</h4>
                    <p>Nuestra plataforma es intuitiva y fácil de usar para todos los pacientes.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="shield"></i></div>
                    <h4>Seguridad y Privacidad</h4>
                    <p>Garantizamos la seguridad y privacidad de todos tus datos personales y médicos.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="file-text"></i></div>
                    <h4>Historial Médico</h4>
                    <p>Accede a tu historial médico en línea de manera rápida y segura.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="activity"></i></div>
                    <h4>Evaluaciones Continuas</h4>
                    <p>Realizamos evaluaciones continuas para mejorar la calidad del servicio.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box">
                  <div>
                    <div class="icon-wrraper"><i data-feather="map-pin"></i></div>
                    <h4>Ubicación Conveniente</h4>
                    <p>Nos encontramos en una ubicación accesible para todos nuestros pacientes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!--Core Feature end-->
      <!--Applications start-->
      <section class="demo-section section-py-space" id="Applications">
        <div class="action-app">
          <div class="shap-block">
            <div class="rounded-shap animate-bg-secondary"><i></i><i></i><i></i></div>
          </div>
        </div>
        <div class="title">
          <h2 class="gradient-10">Servicios Médicos</h2>
        </div>
        <div class="custom-container">
          <div class="row demo-block" id="aniimated-thumbnials" itemscope="">
            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
              <div class="demo-box">
                <h5>PSICOLOGIA</h5>
                <div class="img-wrraper"><img class="img-fluid" src="../assets/images/landing/application/especialidad1.jpg" alt=""></div>
              </div>
            </figure>
            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
              <div class="demo-box">
                <h5>MEDICINA GENERAL</h5>
                <div class="img-wrraper"><img class="img-fluid" src="../assets/images/landing/application/especialidad2.jpg" alt=""></div>
              </div>
            </figure>
            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
              <div class="demo-box">
                <h5>OBSTETRICIA</h5>
                <div class="img-wrraper"><img class="img-fluid" src="../assets/images/landing/application/especialidad3.jpg" alt=""></div>
              </div>
            </figure>
            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
              <div class="demo-box">
                <h5>NUTRICION</h5>
                <div class="img-wrraper"><img class="img-fluid" src="../assets/images/landing/application/especialidad4.jpg" alt=""></div>
              </div>
            </figure>
            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
              <div class="demo-box">
                <h5>ODONTOLOGIA</h5>
                <div class="img-wrraper"><img class="img-fluid" src="../assets/images/landing/application/especialidad5.jpg" alt=""></div>
              </div>
            </figure>
            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
              <div class="demo-box">
                <h5>CRECIMIENTO Y DESARROLLO</h5>
                <div class="img-wrraper"><img class="img-fluid" src="../assets/images/landing/application/especialidad6.jpg" alt=""></div>
              </div>
            </figure>
            <figure class="reveal col-xl-3 col-sm-6" itemprop="associatedMedia" itemscope="">
              <div class="demo-box">
                <h5>INMUNIZACIONES</h5>
                <div class="img-wrraper"><img class="img-fluid" src="../assets/images/landing/application/especialidad7.jpg" alt=""></div>
              </div>
            </figure>
          </div>
        </div>
      </section>
      <!-- unic-cards start-->
      <section class="faq-section section-py-space" id="faq-section">
        <div class="title">
          <h2 class="gradient-10">Preguntas frecuentes</h2>
        </div>
        <div class="custom-container">
          <div class="row faq-block">
            <div class="col-xl-6 col-lg-6 col-sm-6">
              <div class="faq-box">
                <div>
                  <h4>¿Cómo puedo registrarme para crear una cita médica?</h4>
                  <p>Para registrarte y crear una cita médica, primero debes ingresar tu número de DNI en el formulario de la página principal.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
              <div class="faq-box">
                <div>
                  <h4>¿Qué información necesito para registrar una cita médica?</h4>
                  <p>Para registrar una cita médica, necesitarás tu número de DNI, nombre completo, apellido, número de teléfono , dirección de correo electrónico , especialidad médica .</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
              <div class="faq-box">
                <div>
                  <h4>¿Qué debo hacer si no recibo la confirmación de mi cita?</h4>
                  <p>Si todo está en orden, por favor contacta al soporte técnico del Centro de Salud Año Nuevo Collique a través de la sección de Contacto en la página web.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
              <div class="faq-box">
                <div>
                  <h4>¿Cómo puedo cancelar o reprogramar una cita médica?</h4>
                  <p>Puedes cancelar o reprogramar tu cita médica cuando el area de admicion se contacte contigo para confirmar la fecha</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- unic-cards end-->
      <section class="counter-sec section-py-space">
        <div class="action-count">
          <div class="shap-block">
            <div class="rounded-shap animate-bg-secondary"><i></i><i></i><i></i></div>
          </div>
        </div>
        <div class="custom-container">
          <div class="row counter-block">
            <div class="col-lg-3 col-sm-6">
              <div class="counter-box">
                <div>
                  <div class="count-number">
                    <h3>7</h3>
                  </div>
                  <div class="count-detail">
                    <h4>Servicios Médicos</h4>
                    <p>Ofrecemos siete especialidades distintas para atender tus necesidades de salud.</p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="counter-box">
                <div>
                  <div class="count-number">
                    <h3>24/7</h3>
                  </div>
                  <div class="count-detail">
                    <h4>Acceso a Citas</h4>
                    <p>Reserva tus citas médicas en cualquier momento y desde cualquier lugar.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="counter-box">
                <div>
                  <div class="count-number">
                    <h3>100%</h3>
                  </div>
                  <div class="count-detail">
                    <h4>Satisfacción</h4>
                    <p>Nuestros pacientes reportan altos niveles de satisfacción con el sistema de citas.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="counter-box">
                <div>
                  <div class="count-number">
                    <h3>30+</h3>
                  </div>
                  <div class="count-detail">
                    <h4>Profesionales Médicos</h4>
                    <p>Contamos con más de 50 médicos altamente calificados para brindarte la mejor atención.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--footer start-->
      <section class="color-theme landing-footer section-py-space" id="footer">
        <div class="custom-container">
          <div class="row">
            <div class="col-12">
              <div class="footer-contain">
                <h2>Centro de Salud Año Nuevo Collique</h2>
                <p>Este sistema web es parte de una investigación para mejorar la gestión de citas médicas y la satisfacción del usuario. Todos los datos recopilados serán manejados con estricta confidencialidad y conforme a las normativas de privacidad vigentes.</p>
                <p>&copy; 2024 Centro de Salud Año Nuevo Collique. Todos los derechos reservados.</p>

              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>
  <!-- latest jquery-->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Plugins JS start-->
  <script src="assets/js/tooltip-init.js"></script>
  <script src="assets/js/animation/wow/wow.min.js"></script>
  <script src="assets/js/landing_sticky.js"></script>
  <script src="assets/js/landing.js"></script>
  <script src="assets/js/jarallax_libs/libs.min.js"></script>
  <script src="assets/js/slick/slick.min.js"></script>
  <script src="assets/js/slick/slick.js"></script>
  <script src="assets/js/landing-slick.js"></script>
  <!-- Plugins JS Ends-->
  <script src="assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="assets/js/owlcarousel/owl-custom.js"></script>



  <!-- latest jquery-->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="assets/js/bootstrap/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="assets/js/scrollbar/simplebar.js"></script>
  <script src="assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="assets/js/sidebar-menu.js"></script>
  <script src="assets/js/sidebar-pin.js"></script>
  <script src="assets/js/slick/slick.min.js"></script>
  <script src="assets/js/slick/slick.js"></script>
  <script src="assets/js/header-slick.js"></script>
  <script src="assets/js/height-equal.js"></script>
  <script src="assets/js/tooltip-init.js"></script>
  <script src="assets/js/modalpage/validation-modal.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
</body>

</html>