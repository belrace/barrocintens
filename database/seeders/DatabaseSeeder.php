<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            ['id' => 1, 'name' => 'AdminBarrocIntens', 'email' => 'AdminTeam@BarrocIntens.nl', 'password' => bcrypt('AdminBarroc'), 'current_team_id' =>'1'],
        ];
        DB::table('users')->insert($users);
        $teams = [
            ['id' => 1, 'user_id' => '1', 'name' => 'admin', 'personal_team' => '1'],
        ];
        DB::table('teams')->insert($teams);

    }
}
