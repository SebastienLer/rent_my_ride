<?php

require_once __DIR__ . '/../../../models/Vehicule.php';

try {
    $vehicles = Vehicle::get_all();
    $type = Type::get($vehicle->id_types);
    $delete = filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_NUMBER_INT);
} catch (\Throwable $th) {
    $error = $th->getMessage();

    include __DIR__ . '/../../../views/templates/header.php';
    include __DIR__ . '/../../../views/templates/error.php';
    include __DIR__ . '/../../../views/templates/footer.php';
    die;
}


include __DIR__ . '/../../../views/dashboard/templates/header_dashboard.php';
include __DIR__ . '/../../../views/dashboard/vehicules/list_vehicules.php';
include __DIR__ . '/../../../views/dashboard/templates/footer_dashboard.php';
