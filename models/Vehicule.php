<?php
// requis pour la connection a la base de données
require_once __DIR__ . '/../config/database.php';


class Vehicle
{
    private int $id_vehicles;
    private string $brand;
    private string $model;
    private string $registration;
    private int $mileage;
    private string $picture;
    private datetime $created_at;
    private datetime $updated_at;
    private datetime $deleted_at;
    //  récupèrer id
    public function get_id_vehicles(): int
    {
        return $this->id_vehicles;
    }
    // set id
    public function set_id_vehicles(int $id_vehicles)
    {
        $this->id_vehicles = $id_vehicles;
    }
    //  récupérer brand
    public function get_brand(): string
    {
        return $this->brand;
    }
    //  set brand
    public function set_brand(string $brand)
    {
        $this->brand = $brand;
    }
    //  récupérer model
    public function get_model(): string
    {
        return $this->model;
    }
    //  set model
    public function set_model(string $model)
    {
        $this->model = $model;
    }

    //  récupérer registration
    public function get_registrations(): string
    {
        return $this->registration;
    }
    //  set registration
    public function set_registration(string $registration)
    {
        $this->registration = $registration;
    }
    //  récupèrer mileage
    public function get_mileage(): int
    {
        return $this->mileage;
    }
    // set mileage
    public function set_mileage(int $mileage_vehicles)
    {
        $this->mileage = $mileage_vehicles;
    }
    //  récupérer picture
    public function get_picture(): string
    {
        return $this->picture;
    }
    //  set picture
    public function set_picture(string $picture)
    {
        $this->picture = $picture;
    }
    //  récupérer created_at
    public function get_created_at(): datetime
    {
        return $this->created_at;
    }
    //  set created_at
    public function set_created_at(datetime $created_at)
    {
        $this->created_at = $created_at;
    }
    //  récupérer created_at
    public function get_updated_at(): datetime
    {
        return $this->updated_at;
    }
    //  set updated_at
    public function set_updated_at(datetime $updated_at)
    {
        $this->updated_at = $updated_at;
    }
    //  récupérer deleted_at
    public function get_deleted_at(): datetime
    {
        return $this->deleted_at;
    }
    //  set deleted_at
    public function set_deleted_at(datetime $deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }

    //  insèrer valeur dans la banque de donnée
    public function insert(): bool
    {
        $pdo = connect();
        // Récuperation des données et envoie dans la base de données
        $sql = 'INSERT INTO `vehicles`(`brand`, `model`, `registration`, `mileage`, `picture`) VALUE (:brand, :model, :registration, :mileage, :picture) ;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':brand', $this->get_brand());
        $sth->bindValue(':model', $this->get_model());
        $sth->bindValue(':registration', $this->get_registrations());
        $sth->bindValue(':mileage', $this->get_mileage());
        $sth->bindValue(':picture', $this->get_picture());
        $result = $sth->execute();
        return $result;
    }

    // methode pour récupérer tout les véhicules
    public static function get_all(): array
    {
        $pdo = connect();
        // Récuperation des données et affichage
        $sql = 'SELECT * FROM `vehicles`';
        $sth = $pdo->query($sql);
        $vehicleList = $sth->fetchAll();
        return $vehicleList;
    }
}
