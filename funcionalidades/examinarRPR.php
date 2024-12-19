<!-- CREATE TABLE `pruebas_recuento` (
  `id_prueba_recuento` int(11) NOT NULL,
  `codigo_prueba_recuento` varchar(10) DEFAULT 'PRC-',
  `metodo_usado` varchar(30) NOT NULL,
  `concepto` tinyint(1) NOT NULL DEFAULT 0,
  `especificacion` varchar(15) NOT NULL,
  `volumen_diluyente` varchar(15) NOT NULL,
  `tiempo_disolucion` varchar(5) DEFAULT NULL,
  `cantidad_muestra` varchar(15) NOT NULL,
  `tratamiento` text NOT NULL,
  `id_usuario` varchar(15) NOT NULL,
  `numero_registro_producto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pruebas Recuento</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>


<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon document" aria-hidden="true"></span>Productos</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon folder" aria-hidden="true"></span>Fabricantes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Clientes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon paper" aria-hidden="true"></span>Certificados</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Peticiones de <br> Cambio </a>
                </li>
            </ul>
                    <ul class="cat-sub-menu">
                    </ul>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="icon setting">
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__subtitle">Log out</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon document" aria-hidden="true"></span>Productos</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon folder" aria-hidden="true"></span>Fabricantes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Clientes</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon paper" aria-hidden="true"></span>Certificados</a>
                </li>
                <li>
                  <a class="disable" href="/"><span class="icon image" aria-hidden="true"></span>Peticiones de <br> Cambio </a>
                </li>
            </ul>
                    <ul class="cat-sub-menu">
                    </ul>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="icon setting">
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__subtitle">Log out</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <h2>Deteccion de Microorganisms</h2>
      <form method="POST">
          <label>ID Prueba Recuento</label>
          <input type="text" name="id_prueba_recuento"><br>
          <label>Codigo Prueba Recuento</label>
          <input type="text" name="codigo_prueba_recuento"><br>
          <label>Metodo Usado</label>
          <input type="text" name="metodo_usado"><br>
          <label>Concepto</label>
          <input type="text" name="concepto"><br>        
          <label>especificacion</label>
          <input type="text" name="especificacion"><br>
          <label>Volumen Diluyente</label>
          <input type="text" name="volumen_diluyente"><br>
          <label>Tiempo Disolucion</label>
          <input type="text" name="tiempo_disolucion"><br>
          <label>Cantidad Muestra</label>
          <input type="text" name="cantidad_muestra"><br>
          <label>Tratamiento</label>
          <input type="text" name="tratamiento"><br>
          <label>Id Usuario</label>
          <input type="text" name="id_usuario"><br>
          <label>Numero de Registro del Producto</label>
          <input type="text" name="numero_registro_producto"><br>
          <button type="submit" name="submit">Subir</button>
      </form>

      <?php
      if (isset($_POST['submit'])) {
          $idPruebaRecuento = $_POST['id_prueba_recuento'];
          $codigoPruebaRecuento = $_POST['codigo_prueba_recuento'];
          $metodoUsado = $_POST['metodo_usado'];
          $concepto = $_POST['concepto'];
          $especificacion = $_POST['especificacion'];
          $volumenDiluyente = $_POST['volumen_diluyente'];
          $tiempodisolucion = $_POST['tiempo_disolucion'];
          $cantidadMuestra = $_POST['cantidad_muestra'];
          $tratamiento = $_POST['tratamienton'];
          $idUsuario = $_POST['id_usuario'];
          $numeroRegistroProducto = $_POST['numero_registro_producto'];


          $sql = "INSERT INTO pruebas_recuento ( id_prueba_recuento, codigo_prueba_recuento, metodo_usado, concepto, especificacion, volumen_diluyente, tiempo_disolucion, cantidad_muestra, tratamienton, id_usuario, numero_registro_producto ) VALUES ('$idPruebaRecuento', '$codigoPruebaRecuento', '$metodoUsado', '$concepto', '$especificacion', '$volumenDiluyente', '$tiempodisolucion', '$cantidadMuestra', '$tratamiento', '$idUsuario', '$numeroRegistroProducto')";
          if ($conexion->query($sql) === TRUE) {
              echo "<script>
                  alert('Se ingreso el formulario de de manera exitosa.');
                  location.href = '../templates/vistaRPR.php';
                  </script>";
          } else {
              echo "Error: " . $conexion->error;
          }
      }
?>
</body>
</html>