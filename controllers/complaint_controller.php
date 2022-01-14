<?php


function getComplaint()
{
    return CycleMarket\User::getAll();
}

function getComplaintbyId(int $id)
{
    return CycleMarket\User::getById($id);
}