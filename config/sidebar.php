<?php

return [
    [
        'title' => 'Dashboard',
        'icon' => 'ti ti-dashboard',
        'route_name' => 'admin.dashboard',
        'has_sub' => false,
    ],
    [
        'title' => 'Master',
        'icon' => 'ti ti-database',
        'route_name' => null,
        'active' => 'master',
        'has_sub' => true,
        'sub' => [
            [
                'title' => 'List Admin',
                'route_name' => 'users.admin',
            ],
            [
                'title' => 'List Guru',
                'route_name' => 'users.teacher',
            ],
            [
                'title' => 'List Siswa',
                'route_name' => 'users.student',
            ],
        ]
    ]
];
