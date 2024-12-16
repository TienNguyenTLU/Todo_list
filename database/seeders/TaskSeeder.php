<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Task;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0;$i < 50;$i ++)
        {
            Task::create([
                'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'long_description' => fake()->text(),
            'completed' => fake()->boolean(),

            ]);
        }
    }
}
