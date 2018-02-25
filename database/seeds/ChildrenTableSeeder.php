<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Child;

class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $i = 1;
        foreach(range(1,10) as $index)
        {
            Child::create([
                'person_id' => $i,
                'name' => $faker->name,
                'birthdate' => $faker->date('Y-m-d', '1999-01-01')
            ]);
            if($index % 2 == 0)
            {
                $i++;
            }
        }
    }
}
