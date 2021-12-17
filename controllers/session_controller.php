<?php
function isConnectedUser (): bool {
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return isset($_SESSION["current-user-id"]);
}

function getCurrentUser()
{
    if(isConnectedUser()){
        $user = CycleMarket\User::getById($_SESSION['current-user-id']);
        return $user;
    }
    return; 
}