<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservas Pasadas - Barbería</title>
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
                        <h4 class="fw-semibold mb-1">Reservas Pasadas</h4>
                        <p class="text-muted mb-0">Historial de citas anteriores</p>
                    </div>
                    <!-- Filtro de mes -->
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width:auto;">
                            <option>Marzo 2026</option>
                            <option>Febrero 2026</option>
                            <option>Enero 2026</option>
                        </select>
                    </div>
                </div>

                <!-- Tarjetas resumen -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light-primary p-3 d-flex align-items-center justify-content-center"
                                    style="width:52px;height:52px;">
                                    <i class="ti ti-checks fs-4 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-3">Completadas</p>
                                    <h4 class="fw-semibold mb-0">142</h4>
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
                                    <h4 class="fw-semibold mb-0">8</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light-success p-3 d-flex align-items-center justify-content-center"
                                    style="width:52px;height:52px;">
                                    <i class="ti ti-currency-dollar fs-4 text-success"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-3">Ingresos del mes</p>
                                    <h4 class="fw-semibold mb-0">$18,450</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-light-warning p-3 d-flex align-items-center justify-content-center"
                                    style="width:52px;height:52px;">
                                    <i class="ti ti-star fs-4 text-warning"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0 fs-3">clientes</p>
                                    <h4 class="fw-semibold mb-0">513</h4>
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
                                        <th>Precio</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $pasadas = [
                                        [101, 'Miguel Ángel', 'Corte de pelo', 'Juan López', '2026-03-01', '09:00', '$120', 'completada'],
                                        [102, 'Omar Salinas', 'Barba', 'Pedro Ramírez', '2026-03-01', '10:00', '$80', 'completada'],
                                        [103, 'Daniel Flores', 'Corte + Barba', 'Luis Herrera', '2026-03-02', '11:00', '$200', 'completada'],
                                        [104, 'Iván Guerrero', 'Afeitado', 'Juan López', '2026-03-02', '12:00', '$80', 'cancelada'],
                                        [105, 'Pablo Reyes', 'Cuidado de barba', 'Pedro Ramírez', '2026-03-03', '09:30', '$150', 'completada'],
                                        [106, 'Eduardo Vega', 'Corte de pelo', 'Luis Herrera', '2026-03-03', '11:00', '$120', 'completada'],
                                        [107, 'Ricardo Lara', 'Barba', 'Juan López', '2026-03-04', '10:00', '$80', 'completada'],
                                        [108, 'Alfredo Núñez', 'Corte + Barba', 'Pedro Ramírez', '2026-03-04', '14:00', '$200', 'cancelada'],
                                        [109, 'Gustavo Mora', 'Afeitado', 'Luis Herrera', '2026-03-05', '09:00', '$80', 'completada'],
                                        [110, 'Ernesto Campos', 'Corte de pelo', 'Juan López', '2026-03-05', '10:30', '$120', 'completada'],
                                        [111, 'Víctor Ríos', 'Cuidado de barba', 'Pedro Ramírez', '2026-03-06', '08:30', '$150', 'completada'],
                                        [112, 'Jesús Aguilar', 'Corte + Barba', 'Luis Herrera', '2026-03-06', '13:00', '$200', 'completada'],
                                    ];

                                    $badges = [
                                        'completada' => 'bg-success-subtle text-success',
                                        'cancelada' => 'bg-danger-subtle text-danger',
                                    ];

                                    foreach ($pasadas as $r): ?>
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
                                            <td class="fw-semibold text-success">
                                                <?= $r[6] ?>
                                            </td>
                                            <td><span class="badge <?= $badges[$r[7]] ?>">
                                                    <?= ucfirst($r[7]) ?>
                                                </span></td>
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