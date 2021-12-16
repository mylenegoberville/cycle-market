<?php

class User{
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $mail;
    private string $password;
    private bool $subscriber;
    private int $credit;
    private string $address;
    private string|null $additional_address;
    private string $post_code;
    private string $town;
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
    
    function getFirstName()
    {
        return $this->first_name;
    }
    
    function getLastName()
    {
        return $this->last_name;
    }
    
    function getMail()
    {
        return $this->mail;
    }
    
    function getPassword()
    {
        return $this->password;
    }
    
    function isSubscriber()
    {
        return $this->subscriber;
    }
    
    function getCredit()
    {
        return $this->credit;
    }
    
    function getAddress()
    {
        return $this->address;
    }
    
    function getAdditionalAddress()
    {
        return $this->additional_address;
    }
    
    function getPostCode()
    {
        return $this->post_code;
    }
    
    function getTown()
    {
        return $this->town;
    }
    
    function getCreatedAt()
    {
        return $this->created_at;
    }

    /*          Méthodes d'actions            */
    public static function getAll()
    {
        $db = new DataBase;
        $query = "SELECT * FROM `user`";
        return $db->select_class($query, 'User');
    }

    public static function getById(int $id)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `user` where id = ?";
        return $db->select_one_class($query, 'User', [$id]);
    }

    public static function getByMail(string $mail)
    {
        $db = new DataBase;
        $query = "SELECT * FROM `user` where `mail` = ?";
        return $db->select_one_class($query, 'User', [$mail]);
    }
    
    public static function create(string $first_name, string $last_name, string $mail, string $password, bool $subscriber, int $credit, string $address, string|null $additional_address, string $post_code, string $town){
        $db = new DataBase;
        $req = "INSERT INTO `user` (`first_name`, `last_name`, `mail`, `password`, `subscriber`, `credit`, `address`, `additional_address`, `post_code`, `town`) 
                VALUES ('$first_name', '$last_name', '$mail', '$password', $subscriber, $credit, '$address', '$additional_address', '$post_code', '$town')";
        $res = $db->insert($req);
        return $res;
    }

    public static function update(int $id, string $first_name, string $last_name, string $mail, string $password, bool $subscriber, int $credit, string $address, string|null $additional_address, string $post_code, string $town)
    {
        $db = new DataBase;
        $req = "UPDATE `user` SET `first_name`='". $first_name . "', `last_name`='". $last_name . "', `mail`='". $mail . "', `password`='". $password . "', `subscriber`=". $subscriber . ", `credit`=". $credit . ", `address`='". $address . "', `additional_address`='". $additional_address . "', `post_code`='". $post_code . "', `town`='". $town . "'  WHERE id=" . $id;
        $res = $db->execute($req);
        return $res;
    }

    public static function deleteById(int $id)
    {
        $db = new DataBase;
        $query = "DELETE FROM `user` where id = " . $id;
        return $db->execute($query);
    }
}

