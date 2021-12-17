<?php

function getUsers()
{
    return CycleMarket\User::getAll();
}

function getUserById(int $id)
{
    return CycleMarket\User::getById($id);
}

function getUserByMail(string $mail)
{
    return CycleMarket\User::getByMail($mail);
}

function createUser(string $first_name, string $last_name, string $mail, string $password, bool $subscriber, int $credit, string $address, string|null $additional_address=null, string $post_code, string $town)
{
    $first_name = strtolower(htmlentities($first_name));
    $last_name = strtolower(htmlentities($last_name));
    $mail = strtolower(htmlentities($mail));
    $password = password_hash($password, PASSWORD_DEFAULT, ['cost'=>16]);
    $address = strtolower(htmlentities($address));
    $additional_address = strtolower(htmlentities($additional_address));
    $town = strtolower(htmlentities($town));
    $res = CycleMarket\User::create($first_name, $last_name, $mail, $password, $subscriber, $credit, $address, $additional_address, $post_code, $town);
    return $res;
}

function updateUser(int $id, string $first_name, string $last_name, string $mail, string $password, bool $subscriber, int $credit, string $address, string|null $additional_address=null, string $post_code, string $town)
{
    $first_name = strtolower(htmlentities($first_name));
    $last_name = strtolower(htmlentities($last_name));
    $mail = strtolower(htmlentities($mail));
    $password = password_hash($password, PASSWORD_DEFAULT, ['cost'=>16]);
    $address = strtolower(htmlentities($address));
    $additional_address = strtolower(htmlentities($additional_address));
    $town = strtolower(htmlentities($town));
    $res = CycleMarket\User::update($id, $first_name, $last_name, $mail, $password, $subscriber, $credit, $address, $additional_address, $post_code, $town);
    return $res;
}

function deleteUserById(int $id)
{
    return CycleMarket\User::deleteById($id);
}