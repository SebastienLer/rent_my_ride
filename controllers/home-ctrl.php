<?php

require_once __DIR__ . '/../models/Vehicule.php';
require_once __DIR__ . '/../models/Type.php';


try {
    $script = 'home.js';
    $currentPage = intval(filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT));
    if (!$currentPage) {
        $currentPage = 1;
    }
    $parPage = 9;
    $id_types = intval(filter_input(INPUT_GET, 'id_types', FILTER_SANITIZE_NUMBER_INT));
    $search = (string)filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
    $nb_articles = Vehicle::howMany(id_types: $id_types, search: $search);
    $pages = ceil($nb_articles / $parPage);
    $types = Type::get_all();
    $vehicles = Vehicle::get_all(id_types: $id_types, search: $search, page: $currentPage, parPage: $parPage);
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
