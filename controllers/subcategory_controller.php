<?php

function getSubCategories()
{
    return CycleMarket\SubCategory::getAll();
}

function getSubCategoryById(int $id)
{
    return CycleMarket\SubCategory::getById($id);
}

function createSubCategory(string $name)
{
    $name = strtolower(htmlentities($name));
    $res = CycleMarket\SubCategory::create($name);
    return $res;
}

function updateSubCategory(int $id, string $name)
{
    $name = strtolower(htmlentities($name));
    $res = CycleMarket\SubCategory::update($id, $name);
    return $res;
}

function deleteSubCategoryById(int $id)
{
    return CycleMarket\SubCategory::deleteById($id);
}