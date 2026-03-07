<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservas Próximas - Barbería</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <link rel="stylesheet" href="assets/css/custom-overrides.css" />
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

                <!-- Tabla -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">#</th>
                                        <th>Cliente</th>
                                        <th>Servicio</th>
                                        <th>Barbero</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Estado</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $reservas = [
                                        [1, 'Carlos Mendoza', 'Corte de pelo', 'Juan López', '2026-03-07', '09:00', 'confirmada'],
                                        [2, 'Luis Pérez', 'Barba', 'Pedro Ramírez', '2026-03-07', '09:30', 'confirmada'],
                                        [3, 'Mario García', 'Corte + Barba', 'Juan López', '2026-03-07', '10:30', 'pendiente'],
                                        [4, 'Roberto Soto', 'Afeitado', 'Luis Herrera', '2026-03-07', '11:00', 'confirmada'],
                                        [5, 'Héctor Ruiz', 'Corte de pelo', 'Pedro Ramírez', '2026-03-08', '09:00', 'pendiente'],
                                        [6, 'Andrés Torres', 'Cuidado de barba', 'Juan López', '2026-03-08', '10:00', 'confirmada'],
                                        [7, 'Jorge Morales', 'Barba', 'Luis Herrera', '2026-03-09', '11:30', 'pendiente'],
                                        [8, 'Sergio Ibáñez', 'Corte de pelo', 'Pedro Ramírez', '2026-03-10', '09:00', 'confirmada'],
                                        [9, 'Fernando Díaz', 'Afeitado', 'Juan López', '2026-03-11', '08:30', 'cancelada'],
                                        [10, 'Ramón Castro', 'Corte + Barba', 'Luis Herrera', '2026-03-12', '10:00', 'confirmada'],
                                    ];

                                    $badges = [
                                        'confirmada' => 'bg-success-subtle text-success',
                                        'pendiente' => 'bg-warning-subtle text-warning',
                                        'cancelada' => 'bg-danger-subtle text-danger',
                                    ];

                                    foreach ($reservas as $r): ?>
                                        <tr>
                                            <td class="ps-4 text-muted">#
                                                <?= $r[0] ?>
                                            </td>
                                            <td class="fw-semibold">
                                                <?= $r[1] ?>
                                            </td>
                                            <td>
                                                <?= $r[2] ?>
                                            </td>
                                            <td>
                                                <?= $r[3] ?>
                                            </td>
                                            <td>
                                                <?= date('d/m/Y', strtotime($r[4])) ?>
                                            </td>
                                            <td><span class="badge bg-light-primary text-primary fw-semibold">
                                                    <?= $r[5] ?>
                                                </span></td>
                                            <td><span class="badge <?= $badges[$r[6]] ?>">
                                                    <?= ucfirst($r[6]) ?>
                                                </span></td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-outline-primary me-1" title="Editar"><i
                                                        class="ti ti-pencil"></i></button>
                                                <button class="btn btn-sm btn-outline-danger" title="Cancelar"><i
                                                        class="ti ti-x"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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
</body>

</html>