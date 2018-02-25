<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,5) as $index)
        {
            Person::create([
                'name' => $faker->name,
                'birthdate' => $faker->date('Y-m-d', '1999-01-01'),
                'address' => $faker->address
            ]);
        }
    }
}
