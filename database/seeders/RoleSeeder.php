<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'name' => 'ROLE_APPLICANT',
            'description' => 'This role is for applicant'
        ]);
        Role::create([
            'name' => 'ROLE_REVIEWER',
            'description' => 'This role is for reviewer'
        ]);
    }
}
