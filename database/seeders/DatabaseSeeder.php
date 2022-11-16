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
            ['id' => 1, 'item' => 'Rubber(10 mm)', 'unit' => 'stuk(s)', 'prijs' => 0.39],
            ['id' => 2, 'item' => 'Rubber(14 mm)', 'unit' => 'stuk(s)', 'prijs' => 0.45],
            ['id' => 3, 'item' => 'Slang', 'unit' => 'stuk(s)', 'prijs' => 4.45],
            ['id' => 4, 'item' => 'Voeding(elektra)', 'unit' => 'stuk(s)', 'prijs' => 68.69],
            ['id' => 5, 'item' => 'Ontkalker', 'unit' => 'stuk(s)', 'prijs' => 4.00],
            ['id' => 6, 'item' => 'Waterfilter', 'unit' => 'stuk(s)', 'prijs' => 299.45],
            ['id' => 7, 'item' => 'Reservoir sensor', 'unit' => 'stuk(s)', 'prijs' => 89.99],
            ['id' => 8, 'item' => 'Druppelstop', 'unit' => 'stuk(s)', 'prijs' => 122.43],
            ['id' => 9, 'item' => 'Electrische pomp', 'unit' => 'stuk(s)', 'prijs' => 478.59],
            ['id' => 10, 'item' => 'Tandwiel(110 mm)', 'unit' => 'stuk(s)', 'prijs' => 5.45],
            ['id' => 11, 'item' => 'Tandwiel(70 mm)', 'unit' => 'stuk(s)', 'prijs' => 5.25],
            ['id' => 12, 'item' => 'Maalmotor', 'unit' => 'stuk(s)', 'prijs' => 119.20],
            ['id' => 13, 'item' => 'Zeef', 'unit' => 'stuk(s)', 'prijs' => 28.80],
            ['id' => 14, 'item' => 'Reinigingstabletten', 'unit' => 'stuk(s)', 'prijs' => 3.45],
            ['id' => 15, 'item' => 'Reiningsborsteltjes', 'unit' => 'stuk(s)', 'prijs' => 8.45],
            ['id' => 16, 'item' => 'Ontkalkingspijp', 'unit' => 'stuk(s)', 'prijs' => 21.70],
        ];
        DB::table('materials')->insert($material);

        $categories = [
            ['id' => 1, 'name' => 'Machine\'s', 'is_employee_only' => 0],
            ['id' => 2, 'name' => 'Bonen', 'is_employee_only' => 0],
        ];
        DB::table('product_categories')->insert($categories);

        $products = [
            ['id' => 1, 'name' => 'Bit-Deluxe', 'description' => 'The better version of the Bit collection!', 'image_path' => 'machinebitdeluxe2.png', 'brand' => 'Bit', 'price' => 499, 'stock' => 9, 'product_category_id' => 1],
            ['id' => 2, 'name' => 'Bit-Light', 'description' => 'The lesser version of the Bit collection!', 'image_path' => 'machinebitlight1.png', 'brand' => 'Bit', 'price' => 799, 'stock' => 100, 'product_category_id' => 1],
            ['id' => 3, 'name' => 'Espresso Beneficio', 'description' => 'Een toegankelijke en zachte koffie. Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.', 'image_path' => 'bonenzak1.png', 'brand' => 'Espresso Beneficio', 'price' => 21.60, 'stock' => 0, 'product_category_id' => '2'],
            ['id' => 4, 'name' => 'Yellow Bourbon Brasi', 'description' => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.', 'image_path' => 'bonenzak2.png', 'brand' => 'Yellow Bourbon Brasil', 'price' => 23.20, 'stock' => 100, 'product_category_id' => '2'],
            ['id' => 5, 'name' => 'Espresso Roma', 'description' => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.', 'image_path' => 'bonenzak3.png', 'brand' => 'Espresso Roma', 'price' => 20.80, 'stock' => 6, 'product_category_id' => '2'],
            ['id' => 6, 'name' => 'Red Honey Honduras', 'description' => 'De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.', 'image_path' => 'bonenzak4.png', 'brand' => 'Red Honey Honduras', 'price' => 27.80, 'stock' => 100, 'product_category_id' => '2'],
        ];
        DB::table('products')->insert($products);
    }
}
