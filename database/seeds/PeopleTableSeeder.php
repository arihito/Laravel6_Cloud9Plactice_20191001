<?php

use Illuminate\Database\Seeder;

use Faker\Factory;
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
        $faker = Factory::create('ja_JP');
        for ($i = 1; $i < 20; $i++) {
            Person::create([
                'id'    => $i,
                'name'  => $faker->name,
                'mail' => $faker->email,
                'created_at' => $faker->dateTime('now'),
                'updated_at' => $faker->dateTime('now'),
            ]);
        }
    }
}
