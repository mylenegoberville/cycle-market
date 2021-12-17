<?php

function getAnnonces()
{
    return CycleMarket\Annonce::getAll();
}

function getAnnoncesByUserId(int $user_id)
{
    return CycleMarket\Annonce::getAllByUserId($user_id);
}

function getAnnoncesByCategoryId(int $category_id)
{
    return CycleMarket\Annonce::getAllByCategoryId($category_id);
}

function getAnnoncesBySubCategoryId(int $sub_category_id)
{
    return CycleMarket\Annonce::getAllBySubCategoryId($sub_category_id);
}

function getAnnonceById(int $id)
{
    return CycleMarket\Annonce::getById($id);
}

function createAnnonce(string $name, int $user_id, int $category_id, int $sub_category_id, int $status_id, string $description, $deposit=null)
{
    $name = strtolower(htmlentities($name));
    $desc = htmlentities($description);
    $res = CycleMarket\Annonce::create($name, $user_id, $category_id, $sub_category_id, $status_id, $desc, $deposit);
    return $res;
}

function updateAnnonce(int $id, string $name, int $user_id, int $category_id, int $sub_category_id, int $status_id, string $description, $deposit=null)
{
    $name = strtolower(htmlentities($name));
    $desc = htmlentities($description);
    $res = CycleMarket\Annonce::update($id, $name, $user_id, $category_id, $sub_category_id, $status_id, $desc, $deposit);
    return $res;
}

function deleteAnnonceById(int $id)
{
    return CycleMarket\Annonce::deleteById($id);
}