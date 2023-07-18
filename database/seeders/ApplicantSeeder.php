<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicantSeeder extends Seeder
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
            'name' => 'Applicant ',
            'email' => 'applicant@test.com',
            'password' => bcrypt('password'),
        ]);
         $role = DB::insert('insert into role_user (role_id, user_id) values (?, ?)', [1, $user->id]);
    }
}
