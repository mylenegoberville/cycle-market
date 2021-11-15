<?php

class Annonce{
    private int $id;
    private string $name;
    private int $user_id;
    private float|null $deposit;
    private string $description;
    private int $category_id;
    private int $sub_category_id;
    private int $status_id;
    private string $created_at;

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
    
    function getUserId()
    {
        return $this->user_id;
    }
    
    function getDeposit()
    {
        return $this->deposit;
    }
    
    function getDescription()
    {
        return $this->description;
    }
    
    function getCategoryId()
    {
        return $this->category_id;
    }
    
    function getSubCategoryId()
    {
        return $this->sub_category_id;
    }
    
    function getStatusId()
    {
        return $this->status_id;
    }
    
    function getCreatedAt()
    {
        return $this->created_at;
    }

    /*          Méthodes d'actions            */
    public static function getAll()
    {
        $db = new DataBase;
        $query = "SELECT * FROM `annonces`";
        return $db->select_class($query, 'Annonce');
    }

    public static function getAllByUserId(int $user_id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `annonces` where `user_id` = ?";
        return $db->select_class($query, 'Annonce', [$user_id]);
    }

    public static function getAllByCategoryId(int $category_id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `annonces` where `category_id` = ?";
        return $db->select_class($query, 'Annonce', [$category_id]);
    }

    public static function getAllBySubCategoryId(int $sub_category_id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `annonces` where `sub_category_id` = ?";
        return $db->select_class($query, 'Annonce', [$sub_category_id]);
    }

    public static function getById(int $id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `annonces` where id = ?";
        return $db->select_one_class($query, 'Annonce', [$id]);
    }
    
    public static function create(string $name, int $user_id, int $category_id, int $sub_category_id, int $status_id, string $description, float|null $deposit){
        $db = new DataBase;
        $req = "INSERT INTO `annonce` (`name`, `user_id`, `category_id`, `sub_category_id`, `status_id`, `description`, `deposit`) 
                VALUES ('$name', '$user_id', '$category_id', '$sub_category_id', '$status_id', '$description', " . $deposit . ")";
        $res = $db->insert($req);
        return $res;
    }

    public static function update(int $id, string $name, int $user_id, int $category_id, int $sub_category_id, int $status_id, string $description, float|null $deposit)
    {
        $db = new DataBase;
        $req = "UPDATE `animal` SET `name`='". $name . "', `user_id`='". $user_id . "', category_id='". $category_id . "', sub_category_id='". $sub_category_id . "', status_id='". $status_id . "', `description`='". $description . "', `deposit`='". $deposit . "'  WHERE id=" . $id;
        $res = $db->execute($req);
        return $res;
    }

    public static function deleteById(int $id)
    {
        $db = new DataBase;
        $query = "DELETE FROM `annonces` where id = " . $id;
        return $db->execute($query);
    }
}

