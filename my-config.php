<?php

// Création d'un tableau contenant les informations des users 
// la clef permettra de retrouver facilement les renseignements relatifs aux users.
$usersArray = [
    'riri' => [
        // hachage du mdp via le site : https://phppasswordhash.com/
        'password' => '$2y$10$HF.QvLKgqNlz7bCiMPIfl.oWY1ULH7103gEzTNvTRFa53ruVbnRTC',
        'formule' => 'crevette',
        'quota' => '50'
    ],
    'fifi' => [
        'password' => '$2y$10$HF.QvLKgqNlz7bCiMPIfl.oWY1ULH7103gEzTNvTRFa53ruVbnRTC',
        'formule' => 'homard',
        'quota' => '200'
    ],
    'loulou' => [
        'password' => '$2y$10$HF.QvLKgqNlz7bCiMPIfl.oWY1ULH7103gEzTNvTRFa53ruVbnRTC',
        'formule' => 'Langouste',
        'quota' => '500'
    ],
];
