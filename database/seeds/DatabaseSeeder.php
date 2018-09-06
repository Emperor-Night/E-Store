<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ConditionsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }


}
