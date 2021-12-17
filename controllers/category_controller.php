<?php

function getCategories()
{
    return CycleMarket\Category::getAll();
}

function getCategoryById(int $id)
{
    return CycleMarket\Category::getById($id);
}

function createCategory(string $name)
{
    $name = strtolower(htmlentities($name));
    $res = CycleMarket\Category::create($name);
    return $res;
}

function updateCategory(int $id, string $name)
{
    $name = strtolower(htmlentities($name));
    $res = CycleMarket\Category::update($id, $name);
    return $res;
}

function deleteCategoryById(int $id)
{
    return CycleMarket\Category::deleteById($id);
}