<?php 
require_once __DIR__ . '/../../../models/Vehicule.php';

$id_vehicles = intval(filter_input(INPUT_GET, 'id_vehicles', FILTER_SANITIZE_NUMBER_INT));
$isRestored =(int)Vehicle::restore($id_vehicles);

header('location: /controllers/dashboard/vehicules/list_vehicules-ctrl.php?restore='.$isRestored);
die;