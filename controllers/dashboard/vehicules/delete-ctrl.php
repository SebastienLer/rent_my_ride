<?php
require_once __DIR__ . '/../../../models/Vehicule.php';

$id_vehicles = intval(filter_input(INPUT_GET, 'id_vehicles', FILTER_SANITIZE_NUMBER_INT));
$vehicles = Vehicle::get($id_vehicles);
$fileName = $vehicles->picture;
$isDeleted = (int)Vehicle::delete($id_vehicles);
if ($isDeleted == 1) {
    unlink(__DIR__ . "/../../../public/uploads/vehicles/$fileName");
}
header('location: /controllers/dashboard/vehicules/list_vehicules-ctrl.php?delete=' . $isDeleted);
die;
