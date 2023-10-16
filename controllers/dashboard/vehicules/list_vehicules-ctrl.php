<?php

require_once __DIR__ . '/../../../models/Vehicule.php';
require_once __DIR__ . '/../../../models/Type.php';

try {
    $order = filter_input(INPUT_GET, 'order', FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty ($order) || ($order != 'ASC'&& $order!='DESC')){
        $order='ASC';
    }
    $columns = ['type', 'brand', 'model', 'registration', 'mileage'];
    $column = filter_input(INPUT_GET, 'column');
    if (!in_array($column, $columns)) {
        $column = 'type';
    }
    $vehicles = Vehicle::get_all($order, $column);
    $vehiclesArchive = Vehicle::get_archive($order, $column);
    $archived = filter_input(INPUT_GET, 'archive', FILTER_SANITIZE_NUMBER_INT);
    $restore = filter_input(INPUT_GET, 'restore', FILTER_SANITIZE_NUMBER_INT);
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
