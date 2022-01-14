<?php

namespace CycleMarket;

class Complaint{
    private int $id;
    private int $annonce_id;
    private int $complaint_status_id;
    private string $description;


    function __construct()
    {
        return $this;
    }

    /* Methodes des attributs */

    function getId()
    {
        return $this->id;
    }

    function getAnnonceId()
    {
        return $this->annonce_id;
    }

    function getComplaintStatusId()
    {
        return $this->complaint_status_id;
    }

    function getDescription()
    {
        return $this->description;
    }


    /* Methodes d'action */

    public static function getAll()
    {
        $db = new DataBase;
        $query = "SELECT * FROM `complaint`";
        return $db->select_class($query, 'Complaint');
    }

    public static function getAllByAnnonceId(int $annonce_id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `complaint` where `annonce_id` = ?";
        return $db->select_class($query, 'Complaint', [$annonce_id]);
    }

    public static function getAllByComplaintStatusId(int $complaint_status_id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `complaint` where `complaint_status_id` = ?";
        return $db->select_class($query, 'Complaint', [$complaint_status_id]);
    }

    public static function getById(int $id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `complaint` where `id` = ?";
        return $db->select_class($query, 'Complaint', [$id]);
    }

    public static function create (int $annonce_id, int $complaint_status_id, string $description)
    {
        $db = new DataBase;
        $req = "INSERT INTO `complaint` (`annonce_id`, `complaint_status_id`, `description`)
                VALUES ($annonce_id, $complaint_status_id, $description)";
        $res = $db->insert($req);
        return $res;   
    }

    public static function update (int $id, int $annonce_id, int $complaint_status_id, string $description)
    {
        $db = new DataBase;
        $req = "UPDATE `complaint` SET `annonce_id`='".$annonce_id."', `complaint_status_id`='".$complaint_status_id."', `description`='".$description."' where `id` = $id";
        $res = $db->execute($req);
        return $res;
    }

    public static function delete(int $id)
    {
        $db = new DataBase;
        $query = "DELETE FROM `complaint` where id = $id";
        $res = $db->execute($query);
    }
}