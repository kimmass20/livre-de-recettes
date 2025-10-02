<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
        // mot de passe d'exemple : password1
        'password' => '$2y$10$Qe0m1cZcWn8c2b9WZ1KJFOJ8hV1p7h8k6b1C/0oZyF1q2s3t4u5v6'
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
        // mot de passe d'exemple : password2
        'password' => '$2y$10$7g0n2Qe8rVf1kJm9Lz3pQO4tY6uE9wR1sD2fG3hJ4kL5mN6o7p8q'
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
        // mot de passe d'exemple : password3
        'password' => '$2y$10$z9y8x7w6v5u4t3s2r1q0pOnMlKjIhGfEdCbAqWeRtYuIoP1o2i3u'
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : prenez une belle salade',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];
