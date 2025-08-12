<?php

use Carbon\Carbon;

if (!function_exists('navbarDate')) {
    function navbarDate()
    {
        Carbon::setLocale('id');
        return Carbon::now()->translatedFormat('l, j F Y');
    }
}
