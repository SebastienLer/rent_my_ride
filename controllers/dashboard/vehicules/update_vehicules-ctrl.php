<?php
require_once __DIR__ . '/../../../models/Type.php';
require_once __DIR__ . '/../../../models/Vehicule.php';
require_once __DIR__ . '/../../../config/regex.php';


try {
    $types = Type::get_all();
    $id_vehicles = intval(filter_input(INPUT_GET, 'id_vehicles', FILTER_SANITIZE_NUMBER_INT));
    $vehicleSlct = Vehicle::get($id_vehicles);
    $typeSlct = $vehicleSlct->id_types;
    $pictureName= $vehicleSlct->picture;
    $brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_SPECIAL_CHARS);
    $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_SPECIAL_CHARS);
    $registration = filter_input(INPUT_POST, 'registration', FILTER_SANITIZE_SPECIAL_CHARS);
    $mileage = intval(filter_input(INPUT_POST, 'mileage', FILTER_SANITIZE_NUMBER_INT));
    $id_types = intval(filter_input(INPUT_POST, 'id_type', FILTER_SANITIZE_NUMBER_INT));
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $picture = $_FILES['picture'];
        if (!empty($picture['name'])){
            if($picture['size'] >= FILES_SIZE){
                $errors['picture'] = 'Votre fichier est trop grand, il ne dois pas dépasser 1 Mo';
            }
            elseif( array_key_exists($picture['type'], VALID_EXTENSIONS)){
                $errors['picture'] = 'Veuillez mettre un fichier au format png, jpg ou jpeg';
            }else{
                unlink(__DIR__ ."/../../../public/uploads/vehicles/$pictureName");
                
                $upload = 'public/uploads/vehicles';
                $newname = pathinfo($picture['full_path']);
                $namefile = uniqid('img_').'.'.($newname['extension']);
                move_uploaded_file($picture['tmp_name'],__DIR__."/../../../$upload/$namefile");
            }
        }else{
                $namefile = $pictureName;
            }
        $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($brand)) {
            $errors['brand'] = 'Veuillez entrer obligatoirement une marque';
        } else {
            $isOk = filter_var($brand, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_BRAND)));
            if (!$isOk) {
                $errors['brand'] = 'Veuillez entrer une marque valide';
            }
        }
        if (empty($model)) {
            $errors['model'] = 'Veuillez entrer obligatoirement un modèle';
        } else {
            $isOk = filter_var($model, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_MODEL)));
            if (!$isOk) {
                $errors['model'] = 'Veuillez entrer un modèle valide';
            }
        }
        if (empty($registration)) {
            $errors['registration'] = 'Veuillez entrer obligatoirement une immatriculation';
        } else {
            $isOk = filter_var($registration, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => REGEX_REGISTRATION)));
            if (!$isOk) {
                $errors['registration'] = 'Veuillez entrer une immatriculation valide';
            }
        }
        if (empty($mileage)) {
            $errors['mileage'] = 'Veuillez entrer obligatoirement un nombre';
        } else {
            $isOk = filter_var($mileage, FILTER_VALIDATE_INT);
            if (!$isOk) {
                $errors['mileage'] = 'Veuillez entrer un nombre valide';
            }
        }
        if (empty($id_types)) {
            $errors['id_type'] = 'Veuillez entrer obligatoirement une catégorie';
        } else {
            $isOk = filter_var($id_types, FILTER_VALIDATE_INT);
            if (!$isOk) {
                $errors['id_type'] = 'Catégorie non valide';
            }
        }
        
        if (empty($errors)) {
            $newType = new Vehicle();
            $newType->set_id_vehicles($id_vehicles);
            $newType->set_id_types($id_types);
            $newType->set_brand($brand);
            $newType->set_model($model);
            $newType->set_registration($registration);
            $newType->set_mileage($mileage);
            $newType->set_picture($namefile);
            $newType->set_id_types($id_types);    
            $state = $newType->update();
            header('location: /controllers/dashboard/vehicules/list_vehicules-ctrl.php');
            die;
        }
    }
} catch (\Throwable $th) {
    $error = $th->getMessage();

    include __DIR__ . '/../../../views/templates/header.php';
    include __DIR__ . '/../../../views/templates/error.php';
    include __DIR__ . '/../../../views/templates/footer.php';
    die;
}

include __DIR__ . '/../../../views/dashboard/templates/header_dashboard.php';
include __DIR__ . '/../../../views/dashboard/vehicules/update_vehicules.php';
include __DIR__ . '/../../../views/dashboard/templates/footer_dashboard.php';