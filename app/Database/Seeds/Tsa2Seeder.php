<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class Tsa2Seeder extends Seeder
{
    public function run(){ $this->db->table('tasks')->update(['is_archived'=>0]); $this->db->table('users')->where('username','marco.deleon')->update(['password'=>password_hash('Northstar123!',PASSWORD_DEFAULT)]); }
}
