<?php

use Carbon\Carbon;

if (!function_exists('seoUpdateDate')) {

    function seoUpdateDate($fileKey)
    {
        $today = now();

        $month = $today->month;
        $year  = $today->year;

        if ($month <= 4) {
            $cycleKey   = $year . '-C1';
            $cycleStart = Carbon::create($year, 1, 1);
        } elseif ($month <= 8) {
            $cycleKey   = $year . '-C2';
            $cycleStart = Carbon::create($year, 5, 1);
        } else {
            $cycleKey   = $year . '-C3';
            $cycleStart = Carbon::create($year, 9, 1);
        }

        $seed        = abs(crc32($fileKey . $cycleKey));
        $daysElapsed = $cycleStart->diffInDays($today);

        if ($daysElapsed < 7) {
            $updateDate = _seoGetPrevCycleDate($fileKey, $cycleStart, $today);
        } else {
            $offsetDays = $seed % ($daysElapsed + 1);
            $updateDate = $cycleStart->copy()->addDays($offsetDays);
        }

        $hour   = $seed % 24;
        $minute = ($seed >> 3) % 60;
        $updateDate->setTime($hour, $minute);

        return $updateDate->format('F j, Y');
    }

    function _seoGetPrevCycleDate($fileKey, $cycleStart, $today)
    {
        $prevEnd      = $cycleStart->copy()->subDay();
        $earliest     = $today->copy()->subDays(90);
        $prevStart    = $earliest->gt($prevEnd->copy()->subDays(90))
            ? $earliest
            : $prevEnd->copy()->subDays(89);

        $prevCycleKey = $prevEnd->year . '-prev';
        $seed         = abs(crc32($fileKey . $prevCycleKey));
        $range        = max(1, $prevStart->diffInDays($prevEnd));
        $offsetDays   = $seed % ($range + 1);

        return $prevStart->copy()->addDays($offsetDays);
    }

    function seoUpdateMonth($fileKey)
    {
        $today = now();

        $month = $today->month;
        $year  = $today->year;

        if ($month <= 4) {
            $cycleKey   = $year . '-C1';
            $cycleStart = Carbon::create($year, 1, 1);
        } elseif ($month <= 8) {
            $cycleKey   = $year . '-C2';
            $cycleStart = Carbon::create($year, 5, 1);
        } else {
            $cycleKey   = $year . '-C3';
            $cycleStart = Carbon::create($year, 9, 1);
        }

        $seed        = abs(crc32($fileKey . $cycleKey));
        $daysElapsed = $cycleStart->diffInDays($today);

        if ($daysElapsed < 7) {
            $updateDate = _seoGetPrevCycleDate($fileKey, $cycleStart, $today);
        } else {
            $offsetDays = $seed % ($daysElapsed + 1);
            $updateDate = $cycleStart->copy()->addDays($offsetDays);
        }

        return $updateDate->format('F Y');
    }
}
