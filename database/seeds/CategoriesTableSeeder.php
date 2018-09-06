<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        $categories = ["TV", "Mobile", "Laptop", "Computer", "SmartWatch", "Tablet"];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($categories as $category) {
            \App\Category::create([
                "name" => $category,
                "slug" => str_slug($category)
            ]);
        }

    }


}
