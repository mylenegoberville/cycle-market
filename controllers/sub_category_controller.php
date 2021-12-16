<?php

function getSubCategories()
{
    return SubCategory::getAll();
}

function getSubCategoryById(int $id)
{
    return SubCategory::getById($id);
}

function createSubCategory(string $name)
{
    $name = strtolower(htmlentities($name));
    $res = SubCategory::create($name);
    return $res;
}

function updateSubCategory(int $id, string $name)
{
    $name = strtolower(htmlentities($name));
    $res = SubCategory::update($id, $name);
    return $res;
}

function deleteSubCategoryById(int $id)
{
    return SubCategory::deleteById($id);
}