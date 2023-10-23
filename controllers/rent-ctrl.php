<?php

require_once __DIR__ . '/../models/Vehicule.php';

try {
    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
        $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
        $birthDate = filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_NUMBER_INT);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
        $zipCode = filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_SPECIAL_CHARS);
    }
} catch (\Throwable $th) {
    $error = $th->getMessage();

    include __DIR__ . '/../views/templates/header.php';
    include __DIR__ . '/../views/templates/error.php';
    include __DIR__ . '/../views/templates/footer.php';
    die;
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/rent.php';
include __DIR__ . '/../views/templates/footer.php';