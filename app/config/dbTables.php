<?php

return [
    'Accounts' => [
        'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
        'email' => 'VARCHAR(50) UNIQUE NOT NULL',
        'login' => 'VARCHAR(20) NOT NULL',
        'password' => 'VARCHAR(255) UNIQUE NOT NULL',
        'token' => 'VARCHAR(30) NOT NULL',
        'status' => 'INT NOT NULL',
    ],
    'Products' => [
        'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
        'name' => 'VARCHAR(50) NOT NULL',
        'price' => 'DECIMAL(6,0) NOT NULL',
        'description' => 'VARCHAR(500) NOT NULL',
    ]
];