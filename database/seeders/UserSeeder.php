<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->updateOrInsert([
            'email' => 'mark@test.com'
        ], [
            'name' => 'Mark Admin',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        User::factory()->count(10)->create([
            'password' => bcrypt('password'),
        ]);
    }
}
