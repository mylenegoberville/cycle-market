<?php

class Category{
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
        $query = "SELECT * FROM `category`";
        return $db->select_class($query, 'Category');
    }

    public static function getById(int $id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `category` where id = ?";
        return $db->select_one_class($query, 'Category', [$id]);
    }
    
    public static function create(string $name){
        $db = new DataBase;
        $req = "INSERT INTO `category` (`name`) 
                VALUES ('$name')";
        $res = $db->insert($req);
        return $res;
    }

    public static function update(int $id, string $name)
    {
        $db = new DataBase;
        $req = "UPDATE `category` SET `name`='". $name . "' WHERE id=" . $id;
        $res = $db->execute($req);
        return $res;
    }

    public static function deleteById(int $id)
    {
        $db = new DataBase;
        $query = "DELETE FROM `category` where id = " . $id;
        return $db->execute($query);
    }
}

