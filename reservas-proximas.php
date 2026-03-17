<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservas Próximas - Barbería</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <link rel="stylesheet" href="assets/css/custom-overrides.css" />
    <!-- Anti-FOUC: aplicar tema antes del render -->
    <script>
        (function () { var s = localStorage.getItem('barberaTheme'); var mq = window.matchMedia('(prefers-color-scheme: dark)'); document.documentElement.setAttribute('data-theme', s === 'dark' ? 'dark' : s === 'light' ? 'light' : mq.matches ? 'dark' : 'light'); })();
    </script>

</head>

<?php
require_once 'includes/navbar.php';
require_once 'sql/conexion.php';
?>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper-inner">
            <div class="container-fluid">

                <!-- Encabezado -->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="fw-semibold mb-1">Reservas Próximas</h4>
                        <p class="text-muted mb-0">Citas agendadas a partir de hoy</p>
                    </div>
                    <a href="./reservas.php" class="btn btn-primary">
                        <i class="ti ti-calendar-plus me-1"></i> Nueva Reserva
                    </a>
                </div>

                <!-- Tarjetas resumen -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light-primary p-3 d-flex align-items-center justify-content-center"
                                    style="width:52px;height:52px;">
                                    <i class="ti ti-calendar fs-4 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-3">Hoy</p>
                                    <h4 class="fw-semibold mb-0">4</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light-success p-3 d-flex align-items-center justify-content-center"
                                    style="width:52px;height:52px;">
                                    <i class="ti ti-calendar-week fs-4 text-success"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-3">Esta semana</p>
                                    <h4 class="fw-semibold mb-0">18</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light-warning p-3 d-flex align-items-center justify-content-center"
                                    style="width:52px;height:52px;">
                                    <i class="ti ti-clock fs-4 text-warning"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-3">Pendientes</p>
                                    <h4 class="fw-semibold mb-0">7</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light-danger p-3 d-flex align-items-center justify-content-center"
                                    style="width:52px;height:52px;">
                                    <i class="ti ti-x fs-4 text-danger"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-3">Canceladas</p>
                                    <h4 class="fw-semibold mb-0">2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Barra de búsqueda y filtros -->
                <div class="card mb-3">
                    <div class="card-body py-2">
                        <div class="row g-2 align-items-center">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ti ti-search"></i></span>
                                    <input type="text" id="buscarReserva" class="form-control" placeholder="Buscar por cliente, barbero, teléfono...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select id="filtroEstado" class="form-select">
                                    <option value="">Todos los estados</option>
                                    <option>pendiente</option>
                                    <option>confirmada</option>
                                    <option>cancelada</option>
                                    <option>completada</option>
                                </select>
                            </div>
                            <div class="col-md-3 text-end">
                                <span id="contadorReservas" class="text-muted small"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabla -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0" id="tablaReservas">
                                <thead class="table-light">
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Barbero</th>
                                        <th>Fecha y Hora</th>
                                        <th>Telefono cliente</th>
                                        <th>Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $badges = [
                                        'pendiente' => 'bg-warning-subtle text-warning',
                                        'confirmada' => 'bg-success-subtle text-success',
                                        'cancelada' => 'bg-danger-subtle text-danger',
                                        'completada' => 'bg-primary-subtle text-primary',
                                    ];

                                    $fechaHoy = date('Y-m-d');
                                    $resultado = mysqli_query($conexion, "SELECT c.id_cita, c.fecha_hora, c.estado,
                                                                                   c2.nombre AS nombre_cliente, c2.apellido AS apellido_cliente, c2.telefono,
                                                                                   b.nombre AS nombre_barbero
                                                                            FROM citas c
                                                                            INNER JOIN clientes c2 ON c.id_cliente = c2.id_cliente
                                                                            INNER JOIN empleados b ON c.id_barbero = b.id_empleado
                                                                            WHERE c.fecha_hora >= '$fechaHoy 00:00:00'
                                                                            AND c.fecha_hora <= '$fechaHoy 23:59:59'
                                                                            ORDER BY c.fecha_hora ASC");

                                    if (mysqli_num_rows($resultado) === 0): ?>
                                        <tr>
                                            <td colspan="6" class="text-center py-5 text-muted">
                                                <i class="ti ti-calendar-off fs-1 d-block mb-2"></i>
                                                No hay citas agendadas para el día de hoy.
                                            </td>
                                        </tr>
                                    <?php else:
                                        while ($r = mysqli_fetch_assoc($resultado)) { ?>
                                            <tr>
                                                <td class="fw-semibold"><?= htmlspecialchars($r['nombre_cliente'] . ' ' . $r['apellido_cliente']) ?></td>
                                                <td><?= htmlspecialchars($r['nombre_barbero']) ?></td>
                                                <td><?= date('d/m/Y H:i', strtotime($r['fecha_hora'])) ?></td>
                                                <td>
                                                    <span class="badge <?= $badges[$r['estado']] ?? 'bg-secondary' ?>">
                                                        <?= ucfirst($r['estado']) ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?= htmlspecialchars($r['telefono']) ?>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i
                                                            class="ti ti-pencil"></i></button>
                                                    <button class="btn btn-sm btn-outline-danger" title="Cancelar"><i
                                                            class="ti ti-x"></i></button>
                                                </td>
                                            </tr>
                                        <?php }endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
      (function () {
        var buscar   = document.getElementById('buscarReserva');
        var filtro   = document.getElementById('filtroEstado');
        var contador = document.getElementById('contadorReservas');
        var tabla    = document.querySelector('#tablaReservas tbody');

        function filtrar() {
          var q      = buscar.value.toLowerCase();
          var estado = filtro.value.toLowerCase();
          var filas  = tabla.querySelectorAll('tr');
          var visibles = 0;
          filas.forEach(function (fila) {
            var texto       = fila.textContent.toLowerCase();
            var celdaEstado = fila.cells[4] ? fila.cells[4].textContent.toLowerCase() : '';
            var ok = texto.includes(q) && (estado === '' || celdaEstado.includes(estado));
            fila.style.display = ok ? '' : 'none';
            if (ok) visibles++;
          });
          contador.textContent = visibles + ' cita(s)';
        }

        buscar.addEventListener('input', filtrar);
        filtro.addEventListener('change', filtrar);
        filtrar();
      })();
    </script>
</body>

</html>