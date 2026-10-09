<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin.marc', 'full_name' => 'Marco De Leon', 'role' => 'Administrator'],
            ['username' => 'cashier.ana', 'full_name' => 'Ana Villanueva', 'role' => 'Cashier'],
            ['username' => 'cashier.joel', 'full_name' => 'Joel Garcia', 'role' => 'Cashier'],
            ['username' => 'stock.ella', 'full_name' => 'Ella Navarro', 'role' => 'Inventory Staff'],
            ['username' => 'manager.luis', 'full_name' => 'Luis Ramos', 'role' => 'Store Manager'],
            ['username' => 'support.nica', 'full_name' => 'Nica Flores', 'role' => 'Support Staff'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ]);
    }
}
