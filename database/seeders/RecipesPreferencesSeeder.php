<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesPreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes_preferences')->insert($this->getData());
    }

    private function getData()
    {
        $data = [
            [
                "recipe_id" => 1,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 1,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 1,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 2,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 2,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 2,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 3,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 3,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 3,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 4,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 4,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 4,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 5,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 5,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 6,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 7,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 7,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 8,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 9,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 9,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 10,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 10,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 11,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 12,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 13,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 15,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 15,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 16,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 17,
                "preference_id" => 6
            ],
            [
                "recipe_id" => 17,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 18,
                "preference_id" => 3
            ],
            [
                "recipe_id" => 19,
                "preference_id" => 2
            ],
            [
                "recipe_id" => 19,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 20,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 20,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 20,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 21,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 21,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 21,
                "preference_id" => 5
            ],
            [
                "recipe_id" => 22,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 22,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 23,
                "preference_id" => 7
            ],
            [
                "recipe_id" => 23,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 23,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 24,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 24,
                "preference_id" => 4
            ],
            [
                "recipe_id" => 25,
                "preference_id" => 1
            ],
            [
                "recipe_id" => 25,
                "preference_id" => 4
            ]
        ];
        $count_recipe = 200;
        $count_preference = 7;

        for ($i = 26; $i <= $count_recipe; $i++) {
            $data[] = [
                "recipe_id" => rand(1, $count_recipe),
                "preference_id" => rand(1, $count_preference),
            ];
        }

        return $data;
    }
}
