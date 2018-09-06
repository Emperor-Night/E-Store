<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    protected $rules = [
        "site_name"      => "required|max:255",
        "contact_number" => "required|max:255",
        "contact_email"  => "required|max:255",
        "address"        => "required|max:255"
    ];

    public function __construct()
    {
        $this->middleware("admin");
    }

    public function edit()
    {
        $setting = Setting::first();
        return view("admin.settings.edit", compact("setting"));
    }

    public function update(Request $request)
    {
        $data = $request->validate($this->rules);

        $setting = Setting::first();

        if ($setting) {
            $setting->update($data);
        } else {
            Setting::create($data);
        }

        return back()->withSuccess("Settings updated successfully !");
    }


}
