<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Alyssa Santos', 'email' => 'alyssa.santos@example.com', 'phone' => '0917 248 3106'],
            ['full_name' => 'Daniel Reyes', 'email' => 'daniel.reyes@example.com', 'phone' => '0928 517 4420'],
            ['full_name' => 'Mikaela Cruz', 'email' => 'mikaela.cruz@example.com', 'phone' => '0995 630 1184'],
            ['full_name' => 'Paolo Mendoza', 'email' => 'paolo.mendoza@example.com', 'phone' => '0918 761 9052'],
            ['full_name' => 'Trisha Lim', 'email' => 'trisha.lim@example.com', 'phone' => '0906 482 7731'],
            ['full_name' => 'Gabriel Torres', 'email' => 'gabriel.torres@example.com', 'phone' => '0927 194 6685'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customers,
        ]);
    }
}
