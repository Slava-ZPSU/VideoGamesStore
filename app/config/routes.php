<?php

return [
    // MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],
    'contact' => [
        'controller' => 'main',
        'action' => 'contact',
    ],

    // AdminController
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],

    // ProductsController
    'products/show' => [
        'controller' => 'products',
        'action' => 'show',
    ],
    'products/add' => [
        'controller' => 'products',
        'action' => 'add',
    ],

    // AccountController
    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],
    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],
    'account/recovery' => [
        'controller' => 'account',
        'action' => 'recovery',
    ],
    'account/confirm/{token:\w+}' => [
        'controller' => 'account',
        'action' => 'confirm',
    ],
    'account/reset/{token:\w+}' => [
        'controller' => 'account',
        'action' => 'reset',
    ],
    'account/profile' => [
        'controller' => 'account',
        'action' => 'profile',
    ],
    'account/logout' => [
        'controller' => 'account',
        'action' => 'logout',
    ],
];