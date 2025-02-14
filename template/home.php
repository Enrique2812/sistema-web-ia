<?php
include "../controllers/conexion.php";
session_start();
if (!isset($_SESSION['id'])) {
  header("location: ../index.php");
} else {
  // if ($_SESSION['rol'] != "1") {
  //   session_destroy();
  //   header("location: https://pr.winplh.com/views/template/proovedores/home-provedores.php");
  // }
}

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
  <title>HLC</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/datatables.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
</head>

<body>
  <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <div class="nav-right col-xxl-7 col-xl-6 col-auto box-col-6 pull-right right-header p-0 ms-auto">
          <ul class="nav-menus">
            <li class="onhover-dropdown">
              <div class="onhover-show-div message-dropdown">
                <ul>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="../assets/images/user/3.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Helen Walter</a></h5>
                        <p>Do you want to go see movie?</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="../assets/images/user/6.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                        <p>Thank you for rating us.</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="../assets/images/user/10.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                        <p>What`s the project report update?</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li><a class="f-w-700" href="email-application.html">Check all</a></li>
                </ul>
              </div>
            </li>
            <!-- <li>
              <div class="mode">
                <svg>
                  <use href="../assets/svg/icon-sprite.svg#fill-dark"></use>
                </svg>
              </div>
            </li> -->
            <li class="profile-nav onhover-dropdown p-0">
              <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40" src="../assets/images/dashboard/profile.png" alt="">
                <div class="flex-grow-1"><span><?php echo $_SESSION['nombre']?></span>
                  <!-- <p class="mb-0">Admin <i class="middle fa fa-angle-down"></i></p> -->
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <!-- <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                <li><a href="email-application.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li> -->
                <li><a href="cerrar.php"><i data-feather="log-in"> </i><span>Cerrar sesion</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper close_icon" data-layout="fill-svg" style="background-color: #D91023;">
        <div>
          <!--<div class="logo-wrapper"><a href="home.php"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a>
            <div class="toggle-sidebar close_icon">
               <svg class="sidebar-toggle">
                <use href="../assets/svg/icon-sprite.svg#toggle-icon"></use>
              </svg> 
            </div>
          </div>-->
          <div class="logo-icon-wrapper" style="background-color: #D91023;"></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <!-- <li class="back-btn"><a href="home.php"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li> -->
                <li class="sidebar-main-title">
                  <div>
                    <h6 style="color: #ffff;">Menu</h6>
                  </div>
                </li>
                <li class="sidebar-main-title">
                  <!-- <div>
                      <h6 class="lan-1">General</h6>
                    </div> -->
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="index.php">
                    <svg class="stroke-icon">
                      <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-home"></use>
                    </svg><span>Inicio</span></a></li>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="form-persona-D.php">
                    <svg class="stroke-icon">
                      <use href="../assets/svg/icon-sprite.svg#stroke-layout"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-layout"></use>
                    </svg><span>Personal</span></a>
                </li>
                <!-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                    <svg class="stroke-icon">
                      <use href="../assets/svg/icon-sprite.svg#stroke-layout"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-layout"></use>
                    </svg><span>Staff</span></a>
                </li> -->
                <!-- <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Applications</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack">    </i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-project"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-project"></use>
                      </svg><span>Project           </span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="projects.html">Project List</a></li>
                      <li><a href="projectcreate.html">Create new</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-file"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-file"></use>
                      </svg><span>File manager</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack">        </i><a class="sidebar-link sidebar-title link-nav" href="kanban.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-board"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-board"></use>
                      </svg><span>kanban Board</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                      </svg><span>Ecommerce</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="add-products.html">Add Product</a></li>
                      <li><a href="product.html">Product</a></li>
                      <li><a href="product-page.html">Product page</a></li>
                      <li><a href="list-products.html">Product list</a></li>
                      <li><a href="payment-details.html">Payment Details</a></li>
                      <li><a href="order-history.html">Order History</a></li>
                      <li><a class="submenu-title" href="#">Invoices
                          <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="invoice-1.html">Invoice-1</a></li>
                          <li><a href="invoice-2.html">Invoice-2</a></li>
                          <li><a href="invoice-3.html">Invoice-3</a></li>
                          <li><a href="invoice-4.html">Invoice-4</a></li>
                          <li><a href="invoice-5.html">Invoice-5</a></li>
                          <li><a href="invoice-template.html">Invoice-6</a></li>
                        </ul>
                      </li>
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="list-wish.html">Wishlist</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li><a href="pricing.html">Pricing          </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-email"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-email"></use>
                      </svg><span>Email</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="email-application.html">Email App</a></li>
                      <li><a href="email-compose.html">Email Compose</a></li>
                      <li><a href="letter-box.html">Letter Box</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-chat"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-chat"></use>
                      </svg><span>Chat</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="private-chat.html">Private Chat</a></li>
                      <li><a href="group-chat.html">Group Chat</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                      </svg><span>Users</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="user-profile.html">Users Profile</a></li>
                      <li><a href="edit-profile.html">Users Edit</a></li>
                      <li><a href="user-cards.html">Users Cards</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="bookmark.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-bookmark"> </use>
                      </svg><span>Bookmarks</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="contacts.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-contact"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-contact"> </use>
                      </svg><span>Contacts</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="task.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-task"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-task"> </use>
                      </svg><span>Tasks</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="calendar-basic.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-calendar"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-calender"></use>
                      </svg><span>Calendar</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="social-app.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-social"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-social"> </use>
                      </svg><span>Social App</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="to-do.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-to-do"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-to-do"> </use>
                      </svg><span>To-Do</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="search.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-search"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-search"> </use>
                      </svg><span>Search Result</span></a></li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Forms & Table</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-form"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-form"> </use>
                      </svg><span>Forms</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="#">Form Controls
                          <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="form-validation.html">Form Validation</a></li>
                          <li><a href="base-input.html">Base Inputs</a></li>
                          <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                          <li><a href="input-group.html">Input Groups</a></li>
                          <li> <a href="input-mask.html">Input Mask</a></li>
                          <li><a href="megaoptions.html">Mega Options</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Form Widgets
                          <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="datepicker.html">Datepicker</a></li>
                          <li><a href="touchspin.html">Touchspin</a></li>
                          <li><a href="select2.html">Select2</a></li>
                          <li><a href="switch.html">Switch</a></li>
                          <li><a href="typeahead.html">Typeahead</a></li>
                          <li><a href="clipboard.html">Clipboard</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Form layout
                          <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="form-wizard.html">Form Wizard 1</a></li>
                          <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                          <li><a href="two-factor.html">Two Factor</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-table"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-table"></use>
                      </svg><span>Tables</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="#">Bootstrap Tables
                          <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                          <li><a href="table-components.html">Table components</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="#">Data Tables
                          <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="datatable-basic-init.html">Basic Init</a></li>
                          <li> <a href="datatable-advance.html">Advance Init </a></li>
                          <li><a href="datatable-API.html">API</a></li>
                          <li><a href="datatable-data-source.html">Data Sources</a></li>
                        </ul>
                      </li>
                      <li><a href="datatable-ext-autofill.html">Ex. Data Tables</a></li>
                      <li><a href="jsgrid-table.html">Js Grid Table        </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Components</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-ui-kits"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-ui-kits"></use>
                      </svg><span>Ui Kits</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="avatars.html">Avatars</a></li>
                      <li><a href="helper-classes.html">helper classes</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="tag-pills.html">Tag & pills</a></li>
                      <li><a href="progress-bar.html">Progress</a></li>
                      <li><a href="modal.html">Modal</a></li>
                      <li><a href="alert.html">Alert</a></li>
                      <li><a href="popover.html">Popover</a></li>
                      <li><a href="tooltip.html">Tooltip</a></li>
                      <li><a href="dropdown.html">Dropdown</a></li>
                      <li><a href="according.html">Accordion</a></li>
                      <li><a href="tab-bootstrap.html">Tabs</a></li>
                      <li><a href="list.html">Lists</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-bonus-kit"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-bonus-kit"></use>
                      </svg><span>Bonus Ui</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="scrollable.html">Scrollable</a></li>
                      <li><a href="tree.html">Tree view</a></li>
                      <li><a href="toasts.html">Toasts</a></li>
                      <li><a href="rating.html">Rating</a></li>
                      <li><a href="dropzone.html">dropzone</a></li>
                      <li><a href="tour.html">Tour</a></li>
                      <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                      <li><a href="modal-animated.html">Animated Modal</a></li>
                      <li><a href="owl-carousel.html">Owl Carousel</a></li>
                      <li><a href="ribbons.html">Ribbons</a></li>
                      <li><a href="pagination.html">Pagination</a></li>
                      <li><a href="breadcrumb.html">Breadcrumb</a></li>
                      <li><a href="range-slider.html">Range Slider</a></li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="basic-card.html">Basic Card</a></li>
                      <li><a href="creative-card.html">Creative Card</a></li>
                      <li><a href="dragable-card.html">Draggable Card</a></li>
                      <li><a href="timeline-v-1.html">Timeline </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-animation"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-animation"></use>
                      </svg><span>Animation</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="animate.html">Animate</a></li>
                      <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                      <li><a href="AOS.html">AOS animation</a></li>
                      <li><a href="tilt.html">Tilt Animation</a></li>
                      <li><a href="wow.html">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-icons"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-icons"></use>
                      </svg><span>Icons</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="flag-icon.html">Flag icon</a></li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Themify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="whether-icon.html">Whether Icon</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-button"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-button"></use>
                      </svg><span>Buttons</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="buttons.html">Default Style</a></li>
                      <li><a href="button-group.html">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-charts"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-charts"></use>
                      </svg><span>Charts</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="chart-apex.html">Apex Chart</a></li>
                      <li><a href="chart-google.html">Google Chart</a></li>
                      <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                      <li><a href="chart-flot.html">Flot Chart</a></li>
                      <li><a href="chart-knob.html">Knob Chart</a></li>
                      <li><a href="chart-morris.html">Morris Chart</a></li>
                      <li><a href="chartjs.html">Chartjs Chart</a></li>
                      <li><a href="chartist.html">Chartist Chart</a></li>
                      <li><a href="chart-peity.html">Peity Chart</a></li>
                      <li><a href="echarts.html">Echarts</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Pages</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-landing-page"></use>
                      </svg><span>Landing page</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="sample-page.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-sample-page"></use>
                      </svg><span>Sample page</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="translate.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-internationalization"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-internationalization"></use>
                      </svg><span>Translate</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="../starter-kit/index.html" target="_blank">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-starter-kit"></use>
                      </svg><span>Starter kit</span></a></li>
                  <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-others"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-others"></use>
                      </svg><span>Others</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="error-400.html">Error 400</a></li>
                                <li><a href="error-401.html">Error 401</a></li>
                                <li><a href="error-403.html">Error 403</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="error-500.html">Error 500</a></li>
                                <li><a href="error-503.html">Error 503</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="login.html" target="_blank">Login Simple</a></li>
                                <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                                <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                <li><a href="sign-up-one.html" target="_blank">Register with Bg Image                              </a></li>
                                <li><a href="sign-up-two.html" target="_blank">Register with image two</a></li>
                                <li><a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                                <li><a href="unlock.html">Unlock User</a></li>
                                <li><a href="forget-password.html">Forget Password</a></li>
                                <li><a href="reset-password.html">Reset Password</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="comingsoon.html">Coming Simple</a></li>
                                <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="basic-template.html">Basic Email</a></li>
                                <li><a href="email-header.html">Basic With Header</a></li>
                                <li><a href="template-email.html">Ecomerce Template</a></li>
                                <li><a href="template-email-2.html">Email Template 2</a></li>
                                <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                <li><a href="email-order-success.html">Order Success</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Miscellaneous</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-gallery"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-gallery"></use>
                      </svg><span>Gallery</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="gallery.html">Gallery Grid</a></li>
                      <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                      <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                      <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                      <li><a href="gallery-hover.html">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-blog"></use>
                      </svg><span>Blog</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="blog.html">Blog Details</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="add-post.html">Add Post</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>FAQ</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                      </svg><span>Job Search</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="job-cards-view.html">Cards view</a></li>
                      <li><a href="job-list-view.html">List View</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="job-apply.html">Apply</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-learning"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-learning"></use>
                      </svg><span>Learning</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="learning-list-view.html">Learning List</a></li>
                      <li><a href="learning-detailed.html">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-maps"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-maps"></use>
                      </svg><span>Maps</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="map-js.html">Maps JS</a></li>
                      <li><a href="vector-map.html">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-editors"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-editors"></use>
                      </svg><span>Editors</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="summernote.html">Summer Note</a></li>
                      <li><a href="ckeditor.html">CK editor</a></li>
                      <li><a href="simple-MDE.html">MDE editor</a></li>
                      <li><a href="ace-code-editor.html">ACE code editor </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="knowledgebase.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                      </svg><span>Knowledgebase</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html"> -->
                <!-- <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                      </svg><span>Support Ticket</span></a></li> -->
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>

      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6 p-0">
                <h3>Panel Inicio</h3>
              </div>
              <div class="col-sm-6 p-0">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.php">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg></a></li>
                  <li class="breadcrumb-item">Inicio</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
          <div class="row">
            <!-- <div class="col-xxl-4 col-xl-100 box-col-12 ps-4 pe-4 left-background">
                <div class="row bg-light h-100 p-3 pt-4 pb-4">
                  <div class="col-12 col-xl-50 box-col-6">
                    <div class="card welcome-card">
                      <div class="card-body">
                        <div class="d-flex"> 
                          <div class="flex-grow-1"> 
                            <h1>Hello, Ramirez</h1>
                            <p>Welcome back! Let's start from where you left.</p><a class="btn" href="user-profile.html">View Profile</a>
                          </div>
                          <div class="flex-shrink-0"> <img src="../assets/images/dashboard/welcome.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-12 col-xl-50 box-col-6">
                    <div class="row"> 
                      <div class="col-12 col-lg-12 col-md-6 box-col-12">
                        <div class="card total-earning">
                          <div class="card-body">
                            <div class="row"> 
                              <div class="col-sm-7 box-col-7">
                                <div class="d-flex">
                                  <h3 class="font-primary">Total Earning</h3>
                                </div>
                                <h5>$20.790</h5><span>+ 16.06% than last week</span>
                              </div>
                              <div class="col-sm-5 box-col-5 p-0">
                                <div id="income-chart"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-12 col-md-6 box-col-12">
                        <div class="card total-earning">
                          <div class="card-body pb-0">
                            <div class="row"> 
                              <div class="col-sm-7 box-col-7">
                                <div class="d-flex">
                                  <h3 class="font-primary">Total Expense</h3>
                                </div>
                                <h5>$4,683.90</h5><span>+ 10.34% than last week</span>
                              </div>
                              <div class="col-sm-5 box-col-5 p-0">
                                <div id="expense-chart"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-xl-50 col-md-6 box-col-6">
                    <div class="card news-update">
                      <div class="card-header pb-0">
                        <div class="header-top">
                          <h4>News & Update</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex align-items-center pt-0"><img src="../assets/images/dashboard/1.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>Indonesian Navy Lauds Mental Perseverance of Teenager...</h5><span>Today's News Headlines, Breaking...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">10 Min ago </button>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/2.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>Why now may be the 'golden age' for Southeast asia start-ups...</h5><span>Check out the latest news from...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">2 Min ago </button>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/3.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>China's renewed crypto crackdown wipes nearly $400...</h5><span>Technology and indian business news...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">14 Min ago </button>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/4.jpg" alt="">
                          <div class="flex-grow-1 ms-3"><a href="social-app.html">
                              <h5>Indonesian Navy Lauds Mental Perseverance of Teenager...</h5><span>Today's News Headlines, Breaking...</span></a></div>
                          <div class="flex-shrink-0"> 
                            <button class="btn">17 Min ago </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-xl-50 col-md-6 box-col-6">
                    <div class="card product-chart mb-0">
                      <div class="card-header pb-0">
                        <div class="header-top">
                          <h4>Product Stock</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pb-0">
                        <div class="d-flex">
                          <h2 class="me-2">($1,23,456)</h2><span>Total Product Stock</span>
                        </div>
                        <div class="product-chart">
                          <div class="shap-block">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div id="product-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            <div class="col-xl-12 col-xl-100 box-col-12">
              <div class="row">

                <div class="col-xl-12 col-lg-12 box-col-5">
                  <div class="card">
                    <div class="card-header">
                      <h3>Citas medicas</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive custom-scrollbar">
                        <table class="display" id="data-source-1" style="width:100%">
                          <thead>
                            <tr>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Dni</th>
                              <th>Correo</th>
                              <th>Estado</th>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $id = $_SESSION['id'];
                            $query = "SELECT cita.fecha as fecha, cita.hora as hora,cita.estado as estado ,paciente.nombre as nombre ,paciente.apellido as apellido, paciente.dni as dni ,paciente.correo as correo FROM cita inner join paciente on cita.pacientes_id=paciente.id where medicos_id=$id;";
                            $citasM = $conn->query($query);

                            while ($cita = $citasM->fetch_assoc()) {
                              echo '<td>'.$cita['nombre'].'</td>';
                              echo '<td>'.$cita['apellido'].'</td>';
                              echo '<td>'.$cita['dni'].'</td>';
                              echo '<td>'.$cita['correo'].'</td>';
                              echo '<td>'.$cita['estado'].'</td>';
                              echo '<td>'.$cita['fecha'].'</td>';
                              echo '<td>'.$cita['hora'].'</td>';
                              // echo '';
                            }
                            ?>
                            <td>
                            <ul class="action"> 
                           
                              <li class="edit"> <button class="btn btn-primary"><a href="#"><i class="fa fa-check-circle-o fa-lg" style="color: #FFFFFF;" aria-hidden="true"></i></a></button></li>
                            </ul>
                            </td>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-xxl-12 col-xl-100 box-col-12 proorder-xl-1">
                  <div class="card">
                    <div class="card-header card-no-border pb-0">
                      <div class="header-top">
                        <h4>Orden reciente</h4>
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-0 recent">
                      <div class="table-responsive custom-scrollbar">
                        <table class="table display" id="resent-order" style="width:100%">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label"></label>
                                </div>
                              </th>
                              <th>Customers name</th>
                              <th>Order Date</th>
                              <th>items Name</th>
                              <th>Price</th>
                              <th>Status </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label"></label>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex">
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/1.png" alt=""></div>
                                  <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                      <h6>Elle Amberson</h6><span>#Gh3649K</span>
                                    </a></div>
                                </div>
                              </td>
                              <td>
                                <h6>15 Nov, 2022</h6><span>02:45 PM</span>
                              </td>
                              <td>Wood Chair</td>
                              <td>$152</td>
                              <td>
                                <button class="badge badge-light-primary rounded-pill txt-primary">Paid</button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label"></label>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex">
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/2.png" alt=""></div>
                                  <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                      <h6>Anna Catmire</h6><span>#A5647KB</span>
                                    </a></div>
                                </div>
                              </td>
                              <td>
                                <h6>25 Nov, 2022</h6><span>01:24 PM</span>
                              </td>
                              <td>Men Sneakers</td>
                              <td>$652</td>
                              <td>
                                <button class="badge badge-light-secondary rounded-pill txt-secondary">Pending</button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label"></label>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex">
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/3.png" alt=""></div>
                                  <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                      <h6>Laura Dagson</h6><span>#KO093M</span>
                                    </a></div>
                                </div>
                              </td>
                              <td>
                                <h6>26 Nov, 2022</h6><span>12:34 PM</span>
                              </td>
                              <td>Tree Stylish </td>
                              <td>$256</td>
                              <td>
                                <button class="badge badge-light-primary rounded-pill txt-primary">Paid</button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label"></label>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex">
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/4.png" alt=""></div>
                                  <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                                      <h6>Rachel Green</h6><span>#KMG403</span>
                                    </a></div>
                                </div>
                              </td>
                              <td>
                                <h6>28 Nov, 2022</h6><span>10:27 PM</span>
                              </td>
                              <td>Mi Watch</td>
                              <td>$659</td>
                              <td>
                                <button class="badge badge-light-danger rounded-pill txt-danger">Overdue</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-xl-4 col-xl-50 col-md-6 box-col-6 proorder-xl-6">
                    <div class="card sales">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Sales Statistic</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="sales-chart"></div>
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-2"><span class="bg-primary"></span></div>
                          <div class="flex-grow-1 me-2">
                            <h5>View Count <strong>340k</strong></h5>
                          </div>
                          <div class="flex-shrink-0 me-2"><span class="bg-light-primary"></span></div>
                          <div class="flex-grow-1">
                            <h5>View Count <strong>340k</strong></h5>
                          </div>
                        </div>
                        <p>Keep up info updated to increase the number of ionteractions</p>
                        <button class="btn">See more</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-2">
                    <div class="card since">
                      <div class="card-body">
                        <div class="customer-card d-flex b-l-primary border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Customers</h3>
                            <h5 class="mt-1">1.485</h5>
                          </div>
                          <div class="dashboard-user bg-light-primary"><span></span>
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#male"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#arrow-up"></use>
                            </svg></span><span class="font-success me-2">+ 4.6%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-3">
                    <div class="card since">
                      <div class="card-body money">
                        <div class="customer-card d-flex b-l-secondary border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Revenue</h3>
                            <h5 class="mt-1">$5.873</h5>
                          </div>
                          <div class="dashboard-user bg-light-secondary"><span></span>
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#money"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#arrow-up"></use>
                            </svg></span><span class="font-success me-2">+ 3.10%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-4">
                    <div class="card since"> 
                      <div class="card-body profit">
                        <div class="customer-card d-flex b-l-danger border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Profit</h3>
                            <h5 class="mt-1">70%</h5>
                          </div>
                          <div class="dashboard-user bg-light-danger"><span></span>
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#profile"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#arrow-down"></use>
                            </svg></span><span class="font-danger me-2">+ 2.3%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-sm-6 proorder-xl-5">
                    <div class="card since"> 
                      <div class="card-body invoice-profit">
                        <div class="customer-card d-flex b-l-success border-2">
                          <div class="ms-3">
                            <h3 class="mt-1">Invoices</h3>
                            <h5 class="mt-1">1.256</h5>
                          </div>
                          <div class="dashboard-user bg-light-success"><span></span>
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#invoice"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="customer mt-2"><span class="me-1">
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#arrow-up"></use>
                            </svg></span><span class="font-success me-2">+ 6.3%</span><span>Since last Week</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-50 col-md-6 box-col-6 proorder-xl-7">
                    <div class="card review-slider">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Review</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="owl-carousel owl-theme" id="owl-carousel-dashboard">
                          <div class="review">
                            <div> <img class="img-fluid" src="../assets/images/dashboard/user/14.png" alt="">
                              <div class="review-content"> 
                                <h2>John Connor</h2>
                              </div>
                              <div class="d-flex">
                                <h5>4.3</h5>
                                <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                <div class="flex-grow-1"> 
                                  <h5>136</h5>
                                </div>
                              </div>
                              <p>“Best  Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                            </div>
                          </div>
                          <div class="review">
                            <div class="review">
                              <div> <img class="img-fluid" src="../assets/images/dashboard/user/20.png" alt="">
                                <div class="review-content"> 
                                  <h2>Paul Miller</h2>
                                </div>
                                <div class="d-flex">
                                  <h5>5.6</h5>
                                  <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                  <div class="flex-grow-1"> 
                                    <h5>120</h5>
                                  </div>
                                </div>
                                <p>“Best  Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                              </div>
                            </div>
                          </div>
                          <div class="review">
                            <div class="review">
                              <div> <img class="img-fluid" src="../assets/images/dashboard/user/21.png" alt="">
                                <div class="review-content"> 
                                  <h2>Alen Lee</h2>
                                </div>
                                <div class="d-flex">
                                  <h5>6.3</h5>
                                  <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                  <div class="flex-grow-1"> 
                                    <h5>140</h5>
                                  </div>
                                </div>
                                <p>“Best  Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-9 col-xl-100 box-col-12 proorder-xl-8">
                    <div class="card sales overview">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Sales Overview</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0"> 
                        <div class="sales-chart">
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div class="shap-2">
                            <div class="rounded-shap animate-bg-secondary"><i></i><i></i></div>
                          </div>
                          <div id="sales-overview"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row proorder-xl-9 pe-0">
                    <div class="col-xl-8 col-xl-100 col-md-12">
                      <div class="row"> 
                        <div class="col-xxl-7 col-xl-50 col-md-6">
                          <div class="card">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Active Tasks</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown6" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown6"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body active-task">
                              <ul>
                                <li class="d-flex pt-0">
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Regina Cooper</h5></a>
                                    <p>Create userflow social application design</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="../assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Install Appointment</h5></a>
                                    <p>Homepage design for slimmuch product</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="../assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Regina Cooper</h5></a>
                                    <p>Interactive prototype design - web design</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="../assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                      <label class="form-check-label"></label>
                                    </div>
                                  </div>
                                  <div class="flex-grow-1"> <a href="to-do.html">
                                      <h5>Regina Cooper</h5></a>
                                    <p>Create Application design for topbuzz</p>
                                  </div><span class="delete-option"> <a href="#">
                                      <svg class="remove">
                                        <use href="../assets/svg/icon-sprite.svg#Delete"></use>
                                      </svg></a></span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-5 col-xl-50 col-md-6">
                          <div class="card">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Total Investment</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown7" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown7"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body p-0 pb-3 pt-3">
                              <div class="investment-card">
                                <div id="Investment-chart"></div>
                                <ul> 
                                  <li>
                                    <h5>Total</h5><span>$ 5,8272</span>
                                  </li>
                                  <li> 
                                    <h5>Monthly </h5><span>$ 6,2456</span>
                                  </li>
                                  <li> 
                                    <h5>Daily </h5><span>$ 5,8704</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-12">
                          <div class="card leads">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Leads Status</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown8" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown8"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="lead-status">
                                <ul> 
                                  <li>Customers</li>
                                  <li class="border-3 b-l-primary">Lena Smith</li>
                                  <li class="border-3 b-l-secondary">Nicol Green</li>
                                  <li class="border-3 b-l-danger mb-0">Tom Taylor</li>
                                </ul>
                                <ul> 
                                  <li>Last Contacted</li>
                                  <li>June 14, 2023</li>
                                  <li>June 16, 2023</li>
                                  <li class="mb-0">June 18, 2023</li>
                                </ul>
                                <ul> 
                                  <li>Sales Rep</li>
                                  <li> <img src="../assets/images/dashboard/user/2.png" alt="">Paul Miller</li>
                                  <li> <img src="../assets/images/dashboard/user/1.png" alt="">Alen Lee</li>
                                  <li class="mb-0"> <img src="../assets/images/dashboard/user/3.png" alt="">Lucy White</li>
                                </ul>
                                <ul> 
                                  <li>Status</li>
                                  <li class="bg-light-primary font-primary">Deal Won</li>
                                  <li class="bg-light-secondary font-secondary">Intro Call</li>
                                  <li class="bg-light-danger font-danger mb-0">Stuck</li>
                                </ul>
                                <ul> 
                                  <li>Deal Value</li>
                                  <li>$ 200.2k</li>
                                  <li>$210k</li>
                                  <li class="mb-0">$70k</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-xl-100 col-md-12 pe-0">
                      <div class="row"> 
                        <div class="col-xl-12 col-md-6 notification-card">
                          <div class="card custom-scrollbar">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Notifications</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="notification-box">
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/15.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Paul Svensson invite you Prototyping</h5></a>
                                    <p>05 April, 2023 | 03:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown10" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown10"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/16.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Adam Nolan mentioned you in UX Basics</h5></a>
                                    <p>04 April, 2023 | 05:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown11" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown11"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/17.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Paul Morgan Commented in UI Design</h5></a>
                                    <p>05 April, 2023 | 02:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown12" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown12"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                                <li class="d-flex"> 
                                  <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/18.png" alt=""></div>
                                  <div class="flex-grow-1"> <a href="private-chat.html">
                                      <h5>Robert Babinski Said nothing important</h5></a>
                                    <p>01 April, 2023 | 06:00 PM</p>
                                  </div>
                                  <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown13" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown13"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-12 col-md-6 pe-0">
                          <div class="card statistics">
                            <div class="card-header card-no-border pb-0">
                              <div class="header-top">
                                <h4>Statistics</h4>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" id="userdropdown14" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown14"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="d-flex"> 
                                <div class="flex-shrink-0"> 
                                  <h4>Weekly Target</h4><span>25% achieved</span>
                                  <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                                <div class="flex-grow-1"> 
                                  <h4>Montly Target</h4><span>40% achieved</span>
                                  <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 text-center p-0 footer-copyright">
              <p class="mb-0"> 2024 - HLC - Ingeniería y Construcción SAC</p>
            </div>
          </div>
        </div>
      </footer>
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
  <script src="../assets/js/scrollbar/simplebar.js"></script>
  <script src="../assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../assets/js/sidebar-menu.js"></script>
  <script src="../assets/js/sidebar-pin.js"></script>
  <script src="../assets/js/slick/slick.min.js"></script>
  <script src="../assets/js/slick/slick.js"></script>
  <script src="../assets/js/header-slick.js"></script>
  <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>

  <!-- Plugin used-->
</body>

</html>