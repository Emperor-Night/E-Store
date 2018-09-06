<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \App\User::create([
            "name"     => "Dejan",
            "slug"     => "dejan",
            "email"    => "dejanstankovicle@gmail.com",
            "password" => bcrypt("123123"),
            "is_admin" => 1,
            "photo_id" => 17,
            'about'    => 'Laravel programmer',
            'facebook' => 'https://www.facebook.com/Dejan.Night',
            'youtube'  => 'https://www.youtube.com/channel/UC1MwdCm5qc5GmvcOEEpSgLw?view_as=subscriber'
        ]);

        \App\User::create([
            "name"     => "John",
            "slug"     => "john",
            "email"    => "john@gmail.com",
            "password" => bcrypt("123123"),
            "is_admin" => 1,
            "photo_id" => 18
        ]);

        \App\User::create([
            "name"     => "Jane",
            "slug"     => "jane",
            "email"    => "jane@gmail.com",
            "password" => bcrypt("123123"),
            "photo_id" => 19
        ]);

    }
}
