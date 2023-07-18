<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Reviewer ',
            'email' => 'reviewer@test.com',
            'password' => bcrypt('password'),
        ]);
         $role = DB::insert('insert into role_user (role_id, user_id) values (?, ?)', [2, $user->id]);
    }
}
