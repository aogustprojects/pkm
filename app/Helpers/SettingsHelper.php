<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('getSetting')) {
    function getSetting()
    {
        $setting = DB::table('setting_poli_gigi')->first();
        return (object) [
            'max_registrations' => $setting ? $setting->max_registrations : 8,
            'is_form_open' => $setting ? (bool) $setting->is_form_open : true,
        ];
    }
}

if (!function_exists('setSetting')) {
    function setSetting($maxRegistrations = null, $isFormOpen = null)
    {
        $data = ['updated_at' => now()];
        
        if ($maxRegistrations !== null) {
            $data['max_registrations'] = $maxRegistrations;
        }
        
        if ($isFormOpen !== null) {
            $data['is_form_open'] = $isFormOpen;
        }

        DB::table('setting_poli_gigi')->updateOrInsert(
            ['id' => 1], // Always update the first row
            $data
        );
    }
}