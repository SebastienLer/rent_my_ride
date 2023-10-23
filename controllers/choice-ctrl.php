<?php

require_once __DIR__ . '/../models/Vehicule.php';


try {
    $id_vehicles= intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
    $vehicle = Vehicle::get($id_vehicles);
} catch (\Throwable $th) {
    $error = $th->getMessage();
    
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/choice.php';
include __DIR__ . '/../views/templates/footer.php';