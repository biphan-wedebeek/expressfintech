<?php

use Carbon\Carbon;

if (!function_exists('seoUpdateDate')) {

    function seoUpdateDate($fileKey)
    {
        $today = now();

        $seed = crc32($fileKey . $today->format('Y-m'));

        if ($today->day <= 15) {

            $max = min(15, $today->day);
            $day = ($seed % $max) + 1;

        } else {

            $range = $today->day - 15;
            $day = 16 + ($seed % $range);

        }

        $hour = $seed % 24;
        $minute = ($seed >> 3) % 60;

        $date = Carbon::create(
            $today->year,
            $today->month,
            $day,
            $hour,
            $minute
        );

        return $date->format('F j, Y');
    }
}