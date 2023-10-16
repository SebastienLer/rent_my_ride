<?php

require_once __DIR__ . '/../models/Vehicule.php';


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
} catch (\Throwable $th) {
    $error = $th->getMessage();
    
    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/home.php';
include __DIR__ . '/../views/templates/footer.php';