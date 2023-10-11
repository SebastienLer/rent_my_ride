<?php
require_once __DIR__ . '/../config/const.php';
function connect()
{
        try {
                $pdo = new PDO(DSN, USER, PASSWORD);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
        }

        return $pdo;
}
