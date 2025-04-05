<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('getSetting')) {
    function getSetting()
    {
        $setting = DB::table('setting_poli_gigi')->first();
        return $setting ? $setting->max_registrations : 8; // Default 8
    }
}

if (!function_exists('setSetting')) {
    function setSetting($value)
    {
        DB::table('setting_poli_gigi')->updateOrInsert(
            ['id' => 1], // Always update the first row
            ['max_registrations' => $value, 'updated_at' => now()]
        );
    }
}
