<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Setting::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \App\Setting::create([
            "site_name"      => "My Store",
            "contact_number" => "064/02-09-601",
            "contact_email"  => "dejanstankovicle@gmail.com",
            "address"        => "Serbia"
        ]);

    }


}
