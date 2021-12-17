<?php

namespace CycleMarket;

class SubCategory{
    private int $id;
    private string $name;

    function __construct()
    {
        return $this;
    }

    /*          Méthodes des attributs           */
    function getId()
    {
        return $this->id;
    }
    
    function getName()
    {
        return $this->name;
    }

    /*          Méthodes d'actions            */
    public static function getAll()
    {
        $db = new DataBase;
        $query = "SELECT * FROM `sub_category`";
        return $db->select_class($query, 'SubCategory');
    }

    public static function getById(int $id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `sub_category` where id = ?";
        return $db->select_one_class($query, 'SubCategory', [$id]);
    }
    
    public static function create(string $name){
        $db = new DataBase;
        $req = "INSERT INTO `sub_category` (`name`) 
                VALUES ('$name')";
        $res = $db->insert($req);
        return $res;
    }

    public static function update(int $id, string $name)
    {
        $db = new DataBase;
        $req = "UPDATE `sub_category` SET `name`='". $name . "' WHERE id=" . $id;
        $res = $db->execute($req);
        return $res;
    }

    public static function deleteById(int $id)
    {
        $db = new DataBase;
        $query = "DELETE FROM `sub_category` where id = " . $id;
        return $db->execute($query);
    }
}

