<?php

namespace App\Helpers;

use Carbon\Carbon;

class GicDataFormatter
{
    public static function formatNumber($number, $isDebit = false) {
        $number = floatval($number);
        $isDebit = $number < 0 || $isDebit;
        return $number ? ($isDebit ? '(' : '') . number_format($number, (abs($number) < 1 ? 2 : 0), ',', '.') . ($isDebit ? ')' : ''): '';
    }

    public static function formatPercentage($number) {
        return $number ? number_format($number, 2, ',', '.') . ' %' : '';
    }

    public static function formatDate($string, $format = 'd M Y') {
        $date = Carbon::createFromFormat('Y-m-d\TH:i:s.uO', $string);
        return $date->timezone('America/Bogota')->format($format);
    }

    public static function coinTypeString($coinTypeId) {
        $coinTypeId = intval($coinTypeId);
        return $coinTypeId === 1 ? 'COP' : ($coinTypeId === 2 ? 'USD' : '');
    }

    public static function diffDatesInMonths($string_date_1, $string_date_2) {
        $date_1 = Carbon::createFromFormat('Y-m-d\TH:i:s.uO', $string_date_1);
        $diff = $date_1->timezone('America/Bogota')
            ->diff(
                Carbon::createFromFormat('Y-m-d\TH:i:s.uO', $string_date_2)
                    ->timezone('America/Bogota'), true
            );
        return $diff->y * 12 + $diff->m + ceil($diff->d / 30);
    }
}
