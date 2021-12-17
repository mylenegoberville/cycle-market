<?php

require '../vendor/autoload.php';
require '../controllers/imports.php';
session_start();

$path = __DIR__ . DIRECTORY_SEPARATOR . 'views';
$router = new CycleMarket\Router($path);

$router->get('/', 'home', 'home')
		// ->getPost('/connexion', 'login', 'login')
		// ->getPost('/admin', 'admin', 'admin')
		// ->getPost('/inscription', 'register', 'register')
		// ->getPost('/notre-ami/[i:slug]/', 'animal', 'animal')
		// ->getPost('/edition-compagnon/[i:slug]/', 'editanimal', 'editanimal')
		// ->getPost('/suppression-compagnon/[i:slug]/', 'removeanimal', 'removeanimal')
		// ->get('/tous-nos-amis', 'animals', 'animals')
		// ->get('/nos-amis-disponibles', 'availableanimals', 'availableanimals')
		// ->get('/mon-compte', 'account', 'account')
		// ->getPost('/edition-profil', 'editprofile', 'editprofile')
		// ->getPost('/edition-mot-de-passe', 'editpassword', 'editpassword')
		// ->get('/logout', 'logout', 'logout')
		->run();

$match=$router->match();
