<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'full_name' => 'Ana Cruz',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Ben Santos',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Carla Reyes',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'David Garcia',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Ella Flores',
                'role' => 'Staff',
            ],
        ];

        return view('users', $data);
    }
}