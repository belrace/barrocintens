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
            ['id' => 1, 'name' => 'AdminBarrocIntens', 'email' => 'AdminTeam@BarrocIntens.nl', 'password' => bcrypt('AdminBarroc'), 'current_team_id' => '1'],
        ];
        DB::table('users')->insert($users);

        $teams = [
            ['id' => 1, 'user_id' => '1', 'name' => 'admin', 'personal_team' => '1'],
            ['id' => 2, 'user_id' => '1', 'name' => 'finance', 'personal_team' => '0'],
            ['id' => 3, 'user_id' => '1', 'name' => 'inkoop', 'personal_team' => '0'],
            ['id' => 4, 'user_id' => '1', 'name' => 'maintenance', 'personal_team' => '0'],
            ['id' => 5, 'user_id' => '1', 'name' => 'sales', 'personal_team' => '0'],
        ];
        DB::table('teams')->insert($teams);

        $companies = [
            ['id' => 1, 'name' => 'Curio RSD', 'phone' => 123456789, 'street' => 'Knipplein', 'house_number' => 11, 'zipcode' => '4551 GE', 'city' => 'Roosendaal', 'country_code' => '+31', 'contact_id' => 1],
            ['id' => 2, 'name' => 'Dream works', 'phone' => 123456789, 'street' => 'Ergens', 'house_number' => 44, 'zipcode' => '4551 GE', 'city' => 'Roosendaal', 'country_code' => '+31', 'contact_id' => 1],
            ['id' => 3, 'name' => 'Kruidvat', 'phone' => 123456789, 'street' => 'Ergens', 'house_number' => 44, 'zipcode' => '4551 GE', 'city' => 'Roosendaal', 'country_code' => '+31', 'contact_id' => 1],
            ['id' => 4, 'name' => 'Ikea', 'phone' => 123456789, 'street' => 'Ergens', 'house_number' => 44, 'zipcode' => '4551 GE', 'city' => 'Roosendaal', 'country_code' => '+31', 'contact_id' => 1],
            ['id' => 5, 'name' => 'Mediamarkt', 'phone' => 123456789, 'street' => 'Ergens', 'house_number' => 44, 'zipcode' => '4551 GE', 'city' => 'Roosendaal', 'country_code' => '+31', 'contact_id' => 1],
            ['id' => 6, 'name' => 'Starbucks', 'phone' => 123456789, 'street' => 'Ergens', 'house_number' => 44, 'zipcode' => '4551 GE', 'city' => 'Roosendaal', 'country_code' => '+31', 'contact_id' => 1],
        ];
        DB::table('companies')->insert($companies);

        $werkbon = [
            ['id' => 1, 'title' => 'Missende onderdeel', 'company_id' => 6, 'user_id' => 1],
            ['id' => 2, 'title' => 'kapotte pomp', 'company_id' => 2, 'user_id' => 1],
            ['id' => 3, 'title' => 'slechte filter', 'company_id' => 2, 'user_id' => 1],
            ['id' => 4, 'title' => 'beschimmelde filter', 'company_id' => 1, 'user_id' => 1],
            ['id' => 5, 'title' => 'Defect', 'company_id' => 1, 'user_id' => 4],
            ['id' => 6, 'title' => 'Missende onderdelen', 'company_id' => 3, 'user_id' => 1],
            ['id' => 7, 'title' => 'Schroefje kwijt', 'company_id' => 5, 'user_id' => 1],
            ['id' => 8, 'title' => 'Moertjes kwijt', 'company_id' => 6, 'user_id' => 1],
        ];
        DB::table('werkbons')->insert($werkbon);

        $material = [
            ['id' => 1, 'item' => 'Moer', 'unit' => 'stuk(s)', 'prijs' => 1.99],
            ['id' => 2, 'item' => 'Snoer', 'unit' => 'M', 'prijs' => 3.49],
            ['id' => 3, 'item' => 'Rooster', 'unit' => 'stuk(s)', 'prijs' => 11.99],
        ];
        DB::table('materials')->insert($material);
    }
}
