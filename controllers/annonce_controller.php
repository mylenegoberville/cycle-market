<?php

function getAnnonces()
{
    return Annonce::getAll();
}

function getAnnoncesByUserId(int $user_id)
{
    return Annonce::getAllByUserId($user_id);
}

function getAnnoncesByCategoryId(int $category_id)
{
    return Annonce::getAllByCategoryId($category_id);
}

function getAnnoncesBySubCategoryId(int $sub_category_id)
{
    return Annonce::getAllBySubCategoryId($sub_category_id);
}

function getAnnonceById(int $id)
{
    return Annonce::getById($id);
}

function createAnnonce(string $name, int $user_id, int $category_id, int $sub_category_id, int $status_id, string $description, $deposit=null)
{
    $name = strtolower(htmlentities($name));
    $desc = htmlentities($description);
    $res = Annonce::create($name, $user_id, $category_id, $sub_category_id, $status_id, $desc, $deposit);
    return $res;
}

function updateAnnonce(int $id, string $name, int $user_id, int $category_id, int $sub_category_id, int $status_id, string $description, $deposit=null)
{
    $name = strtolower(htmlentities($name));
    $desc = htmlentities($description);
    $res = Annonce::update($id, $name, $user_id, $category_id, $sub_category_id, $status_id, $desc, $deposit);
    return $res;
}

function deleteAnnonceById(int $id)
{
    return Annonce::deleteById($id);
}