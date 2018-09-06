<?php

use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{

    public function run()
    {
        $conditions = ["New", "Half", "Failure"];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Condition::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($conditions as $condition) {
            \App\Condition::create([
                "name" => $condition,
                "slug" => str_slug($condition)
            ]);
        }

    }


}
