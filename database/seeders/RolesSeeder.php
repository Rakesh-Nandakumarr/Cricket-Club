<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $roles = [
            ['name' => 'admin', 'description' => 'Administrator'],
            ['name' => 'editor', 'description' => 'Editor'],
            ['name' => 'author', 'description' => 'Author'],
            ['name' => 'contributor', 'description' => 'Contributor'],
            ['name' => 'user
            ', 'description' => 'user
            '],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
}
