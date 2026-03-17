<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reservas - Barbería</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" href="assets/css/custom-overrides.css" />
  <!-- Anti-FOUC: aplicar tema antes del render -->
  <script>
    (function () { var s = localStorage.getItem('barberaTheme'); var mq = window.matchMedia('(prefers-color-scheme: dark)'); document.documentElement.setAttribute('data-theme', s === 'dark' ? 'dark' : s === 'light' ? 'light' : mq.matches ? 'dark' : 'light'); })();
  </script>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <?php require_once 'includes/navbar.php'; ?>
    <?php require_once 'sql/conexion.php'; ?>

    <div class="body-wrapper-inner">
      <div class="container-fluid">

        <!-- Encabezado de página -->
        <div class="d-flex align-items-center mb-4">
          <div>
            <h4 class="fw-semibold mb-1">Nueva Reserva</h4>
            <p class="text-muted mb-0">Completa el formulario para registrar una cita</p>
          </div>
        </div>

        <form action="" method="POST">
          <div class="row g-4">

            <!-- ===== COLUMNA IZQUIERDA ===== -->
            <div class="col-lg-8">

              <!-- Sección: Servicio -->
              <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">
                    <i class="ti ti-scissors me-2 text-primary"></i>Servicio
                  </h5>
                  <div class="row g-3">

                    <!-- Corte de pelo -->
                    <div class="col-md-6 col-xl-4">
                      <input class="form-check-input d-none" type="radio" name="servicio" id="corte" value="corte">
                      <label class="card border rounded-2 overflow-hidden w-100 servicio-card" for="corte"
                        style="cursor:pointer;">
                        <div class="p-3 d-flex align-items-center gap-2">
                          <i class="ti ti-cut fs-4 text-primary"></i>
                          <div>
                            <div class="fw-semibold lh-1">Corte de pelo</div>
                            <small class="text-muted">45 minutos</small>
                          </div>
                        </div>
                        <img src="assets/images/servicios/corte.png" alt="Corte de pelo" class="w-100"
                          style="height:160px; object-fit:cover;">
                      </label>
                    </div>

                    <!-- Barba -->
                    <div class="col-md-6 col-xl-4">
                      <input class="form-check-input d-none" type="radio" name="servicio" id="barba" value="barba">
                      <label class="card border rounded-2 overflow-hidden w-100 servicio-card" for="barba"
                        style="cursor:pointer;">
                        <div class="p-3 d-flex align-items-center gap-2">
                          <i class="ti ti-razor fs-4 text-primary"></i>
                          <div>
                            <div class="fw-semibold lh-1">Barba</div>
                            <small class="text-muted">30 minutos</small>
                          </div>
                        </div>
                        <img src="assets/images/servicios/barba.png" alt="Barba" class="w-100"
                          style="height:160px; object-fit:cover;">
                      </label>
                    </div>

                    <!-- Corte + Barba -->
                    <div class="col-md-6 col-xl-4">
                      <input class="form-check-input d-none" type="radio" name="servicio" id="corte_barba"
                        value="corte_barba">
                      <label class="card border rounded-2 overflow-hidden w-100 servicio-card" for="corte_barba"
                        style="cursor:pointer;">
                        <div class="p-3 d-flex align-items-center gap-2">
                          <i class="ti ti-affiliate fs-4 text-primary"></i>
                          <div>
                            <div class="fw-semibold lh-1">Corte + Barba</div>
                            <small class="text-muted">1 hora 15 min</small>
                          </div>
                        </div>
                        <img src="assets/images/servicios/corte_barba.png" alt="Corte y barba" class="w-100"
                          style="height:160px; object-fit:cover;">
                      </label>
                    </div>

                    <!-- Afeitado -->
                    <div class="col-md-6 col-xl-4">
                      <input class="form-check-input d-none" type="radio" name="servicio" id="afeitado"
                        value="afeitado">
                      <label class="card border rounded-2 overflow-hidden w-100 servicio-card" for="afeitado"
                        style="cursor:pointer;">
                        <div class="p-3 d-flex align-items-center gap-2">
                          <i class="ti ti-tool fs-4 text-primary"></i>
                          <div>
                            <div class="fw-semibold lh-1">Afeitado</div>
                            <small class="text-muted">30 minutos</small>
                          </div>
                        </div>
                        <img src="assets/images/servicios/afeitado.png" alt="Afeitado" class="w-100"
                          style="height:160px; object-fit:cover;">
                      </label>
                    </div>

                    <!-- Cuidado de barba -->
                    <div class="col-md-6 col-xl-4">
                      <input class="form-check-input d-none" type="radio" name="servicio" id="cuidado_barba"
                        value="cuidado_barba">
                      <label class="card border rounded-2 overflow-hidden w-100 servicio-card" for="cuidado_barba"
                        style="cursor:pointer;">
                        <div class="p-3 d-flex align-items-center gap-2">
                          <i class="ti ti-sparkles fs-4 text-primary"></i>
                          <div>
                            <div class="fw-semibold lh-1">Cuidado de barba</div>
                            <small class="text-muted">45 minutos</small>
                          </div>
                        </div>
                        <img src="assets/images/servicios/cuidado_barba.png" alt="Cuidado de barba" class="w-100"
                          style="height:160px; object-fit:cover;">
                      </label>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Sección: Datos del cliente -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">
                    <i class="ti ti-user me-2 text-primary"></i>Datos del Cliente
                  </h5>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="nombrecliente" class="form-label fw-semibold">Nombre</label>
                      <input type="text" class="form-control" id="nombrecliente" name="nombre"
                        placeholder="Ej. Juan García" required>
                    </div>
                    <div class="col-md-6">
                      <label for="apellidocliente" class="form-label fw-semibold">Apellido</label>
                      <input type="text" class="form-control" id="apellidocliente" name="apellido"
                        placeholder="Ej. García" required>
                    </div>
                    <div class="col-md-6">
                      <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                      <input type="tel" class="form-control" id="telefono" name="telefono"
                        placeholder="Ej. 664-123-4567">
                    </div>
                    <div class="col-6">
                      <label for="emailcliente" class="form-label fw-semibold">Correo electrónico</label>
                      <input type="email" class="form-control" id="emailcliente" name="email"
                        placeholder="Ej. cliente@correo.com">
                    </div>

                    <div class="col-12">
                      <label class="form-label fw-semibold d-block">Tipo de cliente</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo_cliente" id="frecuente"
                          value="frecuente">
                        <label class="form-check-label" for="frecuente">Cliente frecuente</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo_cliente" id="nuevo" value="nuevo"
                          checked>
                        <label class="form-check-label" for="nuevo">Cliente nuevo</label>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div><!-- /col-lg-8 -->

            <!-- ===== COLUMNA DERECHA ===== -->
            <div class="col-lg-4">

              <!-- Sección: Barbero y horario -->
              <div class="card mb-4">
                <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">
                    <i class="ti ti-calendar me-2 text-primary"></i>Cita
                  </h5>


                  <div class="mb-3">
                    <label for="fecha" class="form-label fw-semibold">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" min="<?= date('Y-m-d') ?>" required>
                  </div>

                  <div class="mb-3">
                    <label for="barbero" class="form-label fw-semibold">Barbero</label>
                    <select class="form-select" id="barbero" name="id_empleado">
                      <option value="SinPreferencia">Sin preferencia</option>
                      <?php
                      $barberos = mysqli_query($conexion, "SELECT id_empleado, nombre, apellido FROM empleados where activo = 1 and puesto='Barbero'");
                      while ($b = mysqli_fetch_assoc($barberos)): ?>
                        <option value="<?= $b['id_empleado'] ?>">
                          <?= htmlspecialchars($b['nombre'] . ' ' . $b['apellido']) ?>
                        </option>
                      <?php endwhile; ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="hora" class="form-label fw-semibold">Hora</label>
                    <select class="form-select" id="hora" name="hora" required>
                      <option value="">-- Seleccionar hora --</option>
                    </select>
                  </div>

                  <script>
                    (function () {
                      var selectFecha = document.getElementById('fecha');
                      var selectHora = document.getElementById('hora');

                      function fechaLocalHoy() {
                        var hoy = new Date();
                        return hoy.getFullYear() + '-' +
                          String(hoy.getMonth() + 1).padStart(2, '0') + '-' +
                          String(hoy.getDate()).padStart(2, '0');
                      }

                      function generarOpciones() {
                        var valorAnterior = selectHora.value;
                        selectHora.innerHTML = '<option value="">-- Seleccionar hora --</option>';

                        var hoy = new Date();
                        var esHoy = selectFecha.value === fechaLocalHoy();
                        var minTotal = esHoy
                          ? Math.ceil((hoy.getHours() * 60 + hoy.getMinutes() + 1) / 15) * 15
                          : 10 * 60; // 10:00 am

                        for (var t = minTotal; t <= 22 * 60; t += 15) {
                          var h = Math.floor(t / 60);
                          var m = t % 60;
                          var hh = String(h).padStart(2, '0');
                          var mm = String(m).padStart(2, '0');
                          var val = hh + ':' + mm;
                          var opt = document.createElement('option');
                          opt.value = val;
                          opt.textContent = val;
                          if (val === valorAnterior) opt.selected = true;
                          selectHora.appendChild(opt);
                        }
                      }

                      selectFecha.addEventListener('change', generarOpciones);
                      if (selectFecha.value) generarOpciones();
                    })();
                  </script>

                  <div class="mb-3">
                    <label for="notas" class="form-label fw-semibold">Notas adicionales</label>
                    <textarea class="form-control" id="notas" name="notas" rows="3"
                      placeholder="Instrucciones especiales..."></textarea>
                  </div>

                </div>
              </div>

              <!-- Botón submit -->
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">
                  <i class="ti ti-calendar-plus me-2"></i>Confirmar Reserva
                </button>
              </div>

            </div><!-- /col-lg-4 -->

          </div><!-- /row -->
        </form>

      </div>
    </div>
  </div>
  </div>

  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>

  <script>
    // Efecto visual al seleccionar servicio
    document.querySelectorAll('input[name="servicio"]').forEach(function (radio) {
      radio.addEventListener('change', function () {
        document.querySelectorAll('.servicio-card').forEach(function (card) {
          card.classList.remove('border-primary', 'shadow');
          card.style.backgroundColor = '';
        });
        if (this.checked) {
          var label = this.nextElementSibling;
          label.classList.add('border-primary', 'shadow');
          label.style.backgroundColor = 'rgba(93,135,255,0.07)';
        }
      });
    });
  </script>
</body>

</html>