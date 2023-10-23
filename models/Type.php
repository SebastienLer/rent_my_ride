<?php
// requis pour la connection a la base de données
require_once __DIR__ . '/../config/database.php';


/**
 * [Description Type]
 */
class Type
{
    private int $id_types;
    private string $type;
    //  récupèrer id
    /**
     * @return int
     */
    public function get_id_types(): int
    {
        return $this->id_types;
    }
    // set id
    /**
     * @param int $id_types
     * 
     * @return [type]
     */
    public function set_id_types(int $id_types)
    {
        $this->id_types = $id_types;
    }
    //  récupérer types
    /**
     * @return string
     */
    public function get_types(): string
    {
        return $this->type;
    }
    //  set type
    /**
     * @param string $type
     * 
     * @return [type]
     */
    public function set_types(string $type)
    {
        $this->type = $type;
    }
    //  insèrer valeur dans la banque de donnée
    /**
     * @return bool
     */
    public function insert(): bool
    {
        $pdo = connect();
        // Récuperation des données et envoie dans la base de données
        $sql = 'INSERT INTO `types`(`type`) VALUE (:type) ;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':type', $this->get_types(), PDO::PARAM_STR);
        $result = $sth->execute();
        return $result;
    }

    /**
     * @return array
     */
    public static function get_all(): array
    {
        $pdo = connect();
        // Récuperation des données et affichage
        $sql = 'SELECT * FROM `types` ORDER BY `type`';
        $sth = $pdo->query($sql);
        $typelist = $sth->fetchAll();
        return $typelist;
    }

    /**
     * @param int $id_types
     * 
     * @return object
     */
    public static function get(int $id_types): object
    {
        $pdo = connect();
        $sql = 'SELECT * FROM `types` WHERE `id_types`=:id_type;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_type', $id_types, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch();
        return $result;
    }

    /**
     * @return [type]
     */
    public function update()
    {
        $pdo = connect();
        $sql = 'UPDATE `types` SET `type`=:type WHERE `id_types`=:id_types;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_types', $this->get_id_types(), PDO::PARAM_INT);
        $sth->bindValue(':type', $this->get_types(), PDO::PARAM_STR);
        $sth->execute();
        
    }

    /**
     * @param mixed $id_types
     * 
     * @return bool
     */
    public static function delete($id_types): bool
    {
        $pdo = connect();
        $sql = 'DELETE FROM `types` WHERE `id_types`=?;';
        $sth = $pdo->prepare($sql);
        $sth->execute([$id_types]);

        // if ($nbRows>0){
        //     return true;
        // }else{
        //     return false;
        // }
        // return $nbRows>0 ? true : false ;
        return (bool) $sth->rowCount();
    }

    public static function delete2($id_types): bool
    {
        $pdo = connect();
        $sql = 'DELETE FROM `types` WHERE `id_types`=:id_types;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id_types', $id_types, PDO::PARAM_INT);
        $sth->execute();
        return (bool) $sth->rowCount();
    }

    /**
     * @param string $type
     * 
     * @return bool
     */
    public static function isExist(string $type): bool
    {
        $pdo = connect();
        $sql = 'SELECT `type` FROM `types` WHERE `type`= :type ;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':type', $type);
        $sth->execute();
        return (bool) $sth->fetch();
    }
}
