<?php
require_once 'validator.php';
require_once 'repository.php';
require_once 'services.php';
require_once 'controller.php';


$wallets = [
    ['client' => 'Baila Wane',      'telephone' => '771001010', 'code' => '1234', 'solde' => 0],
    ['client' => 'Hawa Baila Wane', 'telephone' => '782345678', 'code' => '5678', 'solde' => 100000],
];
$transactions = [];


do {
    afficherMenu();
    $choix = readline("Votre choix : ");
    traiterChoix($choix, $wallets, $transactions);
} while($choix != '0');
