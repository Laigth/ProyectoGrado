<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('vendors/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/css/vendor.bundle.base.css') ?>">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('images/favicon.png') ?>" />
</head>

<body>
  <div class="container-scroller d-flex">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('pages/tables/basic-table.html') ?>">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('pages/tables/basic-table.html') ?>">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Registro Veterinario</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('usuarios/login') ?>">
            <span class="menu-title">Iniciar sesión</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('usuarios/register') ?>">
            <span class="menu-title">Registro</span>
          </a>
        </li>

        <?php if (session()->has('usuario')) : ?>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('logout') ?>">
            <span class="menu-title">Cerrar sesión</span>
            </a>
          </li>
        <?php endif; ?>
        <?php if (session()->has('usuario')) : ?>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('cambiar-contrasena') ?>" class="nav-link">Cambiar contraseña</a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="<?= base_url() ?>"><img src="<?= base_url('images/logo.png') ?>" height="200px" width="x" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>"><img src="<?= base_url('images/logo.png') ?>" height="100px" width="100px" alt="logo" /></a>
          </div>

          <ul class="navbar-nav navbar-nav-right">


          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>

      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabla Productos</h4>
                   <!-- <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Cantidad</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($productos as $producto) : ?>
                          <tr>
                            <td><?= $producto['idProducto'] ?></td>
                            <td><?= $producto['Nombre'] ?></td>
                            <td><?= $producto['Precio'] . ' Bs' ?></td>
                            <td><?= $producto['Cantidad'] ?></td>
                            <td>

                                <form action="<?= base_url('productos/delete/' . $producto['idProducto']) ?>" method="post">
                                  <button type="button" class="btn btn-primary" onclick="location.href='<?= base_url('productos/edit/' . $producto['idProducto']) ?>'">Editar</button>
                                  <?php if ($producto['Estado'] == 1) : ?>
                                    <button type="button" class="btn btn-warning" onclick="location.href='<?= base_url('productos/disable/' . $producto['idProducto']) ?>'">Deshabilitar</button>
                                  <?php else : ?>
                                    <button type="button" class="btn btn-success" onclick="location.href='<?= base_url('productos/enable/' . $producto['idProducto']) ?>'">Habilitar</button>
                                  <?php endif; ?>
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                             
                            </td>
                          </tr>
                        <?php endforeach; ?>
                        <!--  <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image" />
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr> -->

                      </tbody>
                    </table>
                    <div>
                      <button class="btn btn-success" onclick="location.href='<?= base_url('productos/create') ?>'">Agregar producto</button>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="<?= base_url('https://www.bootstrapdash.com/" target="_blank') ?>">bootstrapdash.com </a>2021</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Only the best <a href="<?= base_url('https://www.bootstrapdash.com/" target="_blank') ?>"> Bootstrap dashboard </a> templates </span>
        </div>
      </div>
    </div>
  </footer>
  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?= base_url('vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?= base_url('js/jquery.cookie.js" type="text/javascript') ?>"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url('js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('js/template.js') ?>"></script>
  <!-- endinject -->
  <!-- End custom js for this page-->
</body>

</html>