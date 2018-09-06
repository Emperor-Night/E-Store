<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{

    public function run()
    {
        $photos = [
            "product1.jpg", "product2.jpg", "product3.jpg", "product4.jpg", "product5.jpg", "product6.jpg",
            "product7.jpg", "product8.jpg", "product9.jpg", "product10.jpg", "product11.jpg", "product12.jpg",
            "product13.jpg", "product14.jpg", "product15.jpg", "product16.jpg",
            "Head_admin.png", "Admin.png", "Not_admin.png"
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Photo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        foreach ($photos as $photo) {
            \App\Photo::create([
                "name" => $photo,
                "size" => rand(50, 300)
            ]);
        }

    }


}
