<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\FontMetrics;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers\Api\ColfuturoGicData;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PdfController extends Controller
{
    public function download($identification)
    {
        $codes = [
            1001083190 => 201901335,
            1018473865 => 201806121,
        ];
        $cacheKey = 'gic_data_all:' . $identification;
        if (!($data = Cache::get($cacheKey))) {
            $data = ColfuturoGicData::getAllData($identification, $codes[$identification]);
            Cache::forever($cacheKey, $data);
        }
        $pdf = Pdf::loadView('pdf.invoice', $data);
        $pdf->setOption(['dpi' => 105, 'defaultFont' => 'Roboto']);
        $pdf->setPaper('a3', 'landscape');
        return $pdf->stream(Str::uuid()->toString() . '_report.pdf');
    }
}
