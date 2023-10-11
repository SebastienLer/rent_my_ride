<?php

require_once __DIR__ . '/../../../models/Type.php';

$id_types = intval(filter_input(INPUT_GET, 'id_types', FILTER_SANITIZE_NUMBER_INT));
$isDeleted =(int)Type::delete($id_types);

header('location: /controllers/dashboard/types/list-ctrl.php?delete='.$isDeleted);
die;