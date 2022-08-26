<?php

namespace App\Helpers;

use Carbon\Carbon;

class GicDataFormatter
{
    public static function formatNumber($number, $isDebit = false) {
        return $number ? ($isDebit ? '(' : '') . number_format($number, (floatval($number) < 1 ? 2 : 0), ',', '.') . ($isDebit ? ')' : ''): '';
    }

    public static function formatPercentage($number) {
        return $number ? number_format($number, 2, ',', '.') . ' %' : '';
    }

    public static function formatDate($string, $format = 'd M Y') {
        $date = Carbon::createFromFormat('Y-m-d\TH:i:s.uO', $string);
        return $date->timezone('America/Bogota')->format($format);

    }
}
