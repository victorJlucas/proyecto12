<?php
/*
 * class AdminProduct modelo de administradicon de productos
 */

class AdminProduct
{
    private $db;

    function __construct()
    {
        $this->db = MySQLdb::getInstance()->getDatabase();
    }


    public function getProducts()
    {
        $sql = 'SELECT * FROM products WHERE deleted=0';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCatalogue{
        $sql = 'SELECT id, name, type FROM products WHERE deleted = 0 AND status !=0 ORDER BY type, name ';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}