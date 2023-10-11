<?php
require_once __DIR__ . '/../../../models/Type.php';
require_once __DIR__ . '/../../../models/Vehicule.php';
require_once __DIR__ . '/../../../config/regex.php';


try {

    $id_vehicles = intval(filter_input(INPUT_GET, 'id_vehicles', FILTER_SANITIZE_NUMBER_INT));
    $typeObj = Type::get($id_vehicles);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($type)) {
            $errors['type'] = 'Veuillez entrer obligatoirement une catégorie';
        } else {
            $isOk = filter_var($type, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_TYPE)));
            if (!$isOk) {
                $errors['type'] = 'Veuillez entrer une catégorie valide';
            }
        }
        if (empty($errors)) {
            $newType = new Vehicle();
            
            $state = $newType->update();

        }
    }
} catch (\Throwable $th) {
    $error = $th->getMessage();

    include __DIR__ . '/../../../views/templates/header.php';
    include __DIR__ . '/../../../views/templates/error.php';
    include __DIR__ . '/../../views/templates/footer.php';
    die;
}

include __DIR__ . '/../../../views/dashboard/templates/header_dashboard.php';
include __DIR__ . '/../../../views/dashboard/vehicules/update_vehicules.php';
include __DIR__ . '/../../../views/dashboard/templates/footer_dashboard.php';