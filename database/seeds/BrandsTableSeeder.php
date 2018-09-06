<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    public function run()
    {
        $brands = ["Sony", "Samsung", "Huawei"];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Brand::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($brands as $brand) {
            \App\Brand::create([
                "name" => $brand,
                "slug" => str_slug($brand)
            ]);
        }

    }


}
