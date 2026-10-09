<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Pages extends BaseController
{
    public function home(): string
    {
        $today = date('Y-m-d');
        return view('pages/home', ['title' => 'Welcome', 'activePage' => 'home', 'tasks' => (new TaskModel())->forDate($today), 'today' => $today]);
    }

    public function about(): string
    {
        return view('pages/about', ['title' => 'About', 'activePage' => 'about']);
    }
}
