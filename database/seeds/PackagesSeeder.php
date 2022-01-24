<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Package;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        Package::truncate();

        for($i = 0; $i < 30; $i++){
            $new_package = new Package();

            $new_package->price = $faker->randomNumber(3, true);
            $new_package->days = $faker->randomNumber(2, true);
            $new_package->state = 'lorem state - ' . $i;
            $new_package->airline_company = "{$faker->word()}_airline";

            $new_package->save();
        }
    }
}