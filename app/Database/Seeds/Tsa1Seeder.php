<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tsa1Seeder extends Seeder
{
    public function run(): void
    {
        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review the morning support queue', 'status' => 'done', 'task_date' => '2026-10-09', 'created_at' => '2026-10-08 08:00:00'], ['title' => 'Prepare the team stand-up notes', 'status' => 'in_progress', 'task_date' => '2026-10-09', 'created_at' => '2026-10-08 08:15:00'], ['title' => 'Send the daily progress update', 'status' => 'pending', 'task_date' => '2026-10-09', 'created_at' => '2026-10-08 08:30:00'], ['title' => 'Archive last week’s completed requests', 'status' => 'pending', 'task_date' => '2026-10-08', 'created_at' => '2026-10-07 09:00:00'], ['title' => 'Check the shared equipment log', 'status' => 'done', 'task_date' => '2026-10-08', 'created_at' => '2026-10-07 09:30:00'], ['title' => 'Plan next week’s maintenance window', 'status' => 'pending', 'task_date' => '2026-10-10', 'created_at' => '2026-10-08 10:00:00'], ['title' => 'Confirm the Monday briefing room', 'status' => 'pending', 'task_date' => '2026-10-10', 'created_at' => '2026-10-08 10:15:00'], ['title' => 'Update the internal contact sheet', 'status' => 'done', 'task_date' => '2026-10-07', 'created_at' => '2026-10-06 14:00:00'],
        ]);
        $this->db->table('users')->insert(['username' => 'marco.deleon', 'full_name' => 'Marco Arsenio B. De Leon', 'email' => 'marco.deleon@example.com', 'created_at' => '2026-10-01 08:00:00']);
    }
}
