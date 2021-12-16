<?php

function getCategories()
{
    return Category::getAll();
}

function getCategoryById(int $id)
{
    return Category::getById($id);
}

function createCategory(string $name)
{
    $name = strtolower(htmlentities($name));
    $res = Category::create($name);
    return $res;
}

function updateCategory(int $id, string $name)
{
    $name = strtolower(htmlentities($name));
    $res = Category::update($id, $name);
    return $res;
}

function deleteCategoryById(int $id)
{
    return Category::deleteById($id);
}