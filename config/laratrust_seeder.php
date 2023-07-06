<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Admin' => [
            'users' => 'c,r,u,d',
            // 'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Superviser' => [
            // 'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Stagiare' => [
            'profile' => 'r,u',
        ],
        'Companie' => [
            'profile' => 'r,u',
        ],
        'role_name' => [
            'module_1_name' => 'c,r,u,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
