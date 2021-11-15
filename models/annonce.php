<?php

class Annonce{
    private int $id;
    private string $name;
    private int $user_id;
    private float $deposit;
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
    public static function getAnnonces()
    {
        $db = new DataBase;
        $query = "SELECT * FROM `annonces`";
        return $db->select_class($query, 'Annonce');
    }
}

