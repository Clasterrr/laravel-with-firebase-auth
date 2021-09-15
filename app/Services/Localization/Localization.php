<?php

namespace App\Services\Localization;

class Localization {
    public function locale() {
        $locale = request()->segment(index: 1, default: '');

        if($locale && in_array($locale, config(key: "app.locales"))) {
            return $locale;
        }
        
        return "";
    }
}