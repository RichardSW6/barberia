<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro de Usuarios</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" href="assets/css/custom-overrides.css" />
</head>

<body class="bg-body text-body">
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-9 col-lg-8 col-xxl-6">
            <div class="card mb-0">
              <div class="card-body">
                <a class="text-nowrap logo-img text-center d-block fw-bold py-3 w-100">
                  <img src="assets/images/logos/favicon.png" width="35">
                </a>
                <p class="text-center fw-bold mb-4"><strong>Registrar Personal de Barbería</strong></p>

                <form action="sql/validar_registro.php" method="POST">

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label class="form-label">Nombre</label>
                      <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label class="form-label">Apellido Paterno</label>
                      <input type="text" name="apellido_p" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label class="form-label">Apellido Materno</label>
                      <input type="text" name="apellido_m" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="telefono" class="form-label">Teléfono</label>
                      <input type="text" name="telefono" class="form-control" id="celular" required>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
                      <input type="date" name="fecha_nac" class="form-control" id="fecha_nac">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="rol" class="form-label">Puesto / Rol</label>
                      <select type="text" name="rol" class="form-select" id="rol">
                        <option value="barbero">Barbero</option>
                        <option value="recepcionista">Recepcionista</option>
                        <option value="admin">Administrador</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="usuario" class="form-label">Usuario</label>
                      <input type="text" name="usuario" class="form-control" id="usuario" required>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="clave" class="form-label">Contraseña</label>
                      <input type="text" name="clave" class="form-control" id="clave" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="rol" class="form-label">Estatus</label>
                      <select type="text" name="estatus" class="form-select" id="rol">
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                        <option value="bloqueado">Bloqueado</option>
                      </select>
                    </div>
                  </div>




                  <button type="submit" class="btn btn-primary w-50 d-block mx-auto mt-4 py-2 fs-4 mb-4 rounded-2">
                    Guardar
                  </button>


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>