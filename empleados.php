<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Empleados - Barbería</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" href="assets/css/custom-overrides.css" />
  <!-- Anti-FOUC: aplicar tema antes del render -->
  <script>
    (function(){var s=localStorage.getItem('barberaTheme');var mq=window.matchMedia('(prefers-color-scheme: dark)');document.documentElement.setAttribute('data-theme',s==='dark'?'dark':s==='light'?'light':mq.matches?'dark':'light');})();
  </script>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <?php require_once 'includes/navbar.php'; ?>
      <div class="body-wrapper-inner">
        <div class="container-fluid">

          <!-- Encabezado -->
          <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
              <h4 class="fw-semibold mb-1">Empleados</h4>
              <p class="text-muted mb-0">Información del equipo de trabajo</p>
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarEmpleado">
              <i class="ti ti-user-plus me-1"></i> Agregar Empleado
            </button>
          </div>

          <!-- Tabla de empleados -->
          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                  <thead class="table-light">
                    <tr>
                      <th class="ps-4">Empleado</th>
                      <th>Puesto</th>
                      <th>Horario</th>
                      <th>Días laborales</th>
                      <th>Día de descanso</th>
                      <th>Teléfono</th>
                      <th>Estado</th>
                      <th class="text-center">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- Empleado 1 -->
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="42" height="42" alt="Juan López">
                          <div>
                            <div class="fw-semibold">Juan López</div>
                            <small class="text-muted">juan@barberia.com</small>
                          </div>
                        </div>
                      </td>
                      <td>Barbero Senior</td>
                      <td><span class="badge bg-light-primary text-primary fw-semibold">9:00 – 18:00</span></td>
                      <td>Lun – Sáb</td>
                      <td><span class="text-danger fw-semibold">Domingo</span></td>
                      <td>664-111-2233</td>
                      <td><span class="badge bg-success-subtle text-success">Activo</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="ti ti-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="ti ti-trash"></i></button>
                      </td>
                    </tr>

                    <!-- Empleado 2 -->
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/profile/user-3.jpg" class="rounded-circle" width="42" height="42" alt="Pedro Ramírez">
                          <div>
                            <div class="fw-semibold">Pedro Ramírez</div>
                            <small class="text-muted">pedro@barberia.com</small>
                          </div>
                        </div>
                      </td>
                      <td>Barbero</td>
                      <td><span class="badge bg-light-primary text-primary fw-semibold">10:00 – 19:00</span></td>
                      <td>Mar – Dom</td>
                      <td><span class="text-danger fw-semibold">Lunes</span></td>
                      <td>664-222-3344</td>
                      <td><span class="badge bg-success-subtle text-success">Activo</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="ti ti-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="ti ti-trash"></i></button>
                      </td>
                    </tr>

                    <!-- Empleado 3 -->
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/profile/user-5.jpg" class="rounded-circle" width="42" height="42" alt="María Torres">
                          <div>
                            <div class="fw-semibold">María Torres</div>
                            <small class="text-muted">maria@barberia.com</small>
                          </div>
                        </div>
                      </td>
                      <td>Estilista</td>
                      <td><span class="badge bg-light-primary text-primary fw-semibold">9:00 – 17:00</span></td>
                      <td>Lun – Vie</td>
                      <td><span class="text-danger fw-semibold">Sáb y Dom</span></td>
                      <td>664-333-4455</td>
                      <td><span class="badge bg-success-subtle text-success">Activo</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="ti ti-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="ti ti-trash"></i></button>
                      </td>
                    </tr>

                    <!-- Empleado 4 -->
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/profile/user-6.jpg" class="rounded-circle" width="42" height="42" alt="Ana Mendoza">
                          <div>
                            <div class="fw-semibold">Ana Mendoza</div>
                            <small class="text-muted">ana@barberia.com</small>
                          </div>
                        </div>
                      </td>
                      <td>Recepcionista</td>
                      <td><span class="badge bg-light-primary text-primary fw-semibold">8:00 – 16:00</span></td>
                      <td>Lun – Sáb</td>
                      <td><span class="text-danger fw-semibold">Domingo</span></td>
                      <td>664-444-5566</td>
                      <td><span class="badge bg-warning-subtle text-warning">Vacaciones</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="ti ti-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="ti ti-trash"></i></button>
                      </td>
                    </tr>

                    <!-- Empleado 5 -->
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="assets/images/profile/user-7.jpg" class="rounded-circle" width="42" height="42" alt="Luis Herrera">
                          <div>
                            <div class="fw-semibold">Luis Herrera</div>
                            <small class="text-muted">luis@barberia.com</small>
                          </div>
                        </div>
                      </td>
                      <td>Barbero</td>
                      <td><span class="badge bg-light-primary text-primary fw-semibold">11:00 – 20:00</span></td>
                      <td>Mié – Dom</td>
                      <td><span class="text-danger fw-semibold">Lun y Mar</span></td>
                      <td>664-555-6677</td>
                      <td><span class="badge bg-danger-subtle text-danger">Inactivo</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i class="ti ti-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Eliminar"><i class="ti ti-trash"></i></button>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Agregar Empleado -->
  <div class="modal fade" id="modalAgregarEmpleado" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-semibold" id="modalLabel"><i class="ti ti-user-plus me-2"></i>Agregar Empleado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Nombre completo</label>
                <input type="text" class="form-control" placeholder="Ej. Carlos Pérez">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Correo electrónico</label>
                <input type="email" class="form-control" placeholder="correo@barberia.com">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Teléfono</label>
                <input type="tel" class="form-control" placeholder="664-000-0000">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Puesto</label>
                <select class="form-select">
                  <option value="">-- Seleccionar --</option>
                  <option>Barbero Senior</option>
                  <option>Barbero</option>
                  <option>Estilista</option>
                  <option>Recepcionista</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label fw-semibold">Hora entrada</label>
                <input type="time" class="form-control" value="09:00">
              </div>
              <div class="col-md-4">
                <label class="form-label fw-semibold">Hora salida</label>
                <input type="time" class="form-control" value="18:00">
              </div>
              <div class="col-md-4">
                <label class="form-label fw-semibold">Estado</label>
                <select class="form-select">
                  <option value="activo">Activo</option>
                  <option value="vacaciones">Vacaciones</option>
                  <option value="inactivo">Inactivo</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">Días de descanso</label>
                <div class="d-flex flex-wrap gap-2">
                  <?php
                  $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
                  foreach ($dias as $dia):
                      ?>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="descanso[]"
                               value="<?= strtolower($dia) ?>" id="dia_<?= strtolower($dia) ?>">
                        <label class="form-check-label" for="dia_<?= strtolower($dia) ?>"><?= $dia ?></label>
                      </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
