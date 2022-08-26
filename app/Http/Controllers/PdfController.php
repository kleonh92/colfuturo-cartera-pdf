<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers\Api\ColfuturoGicData;
use Illuminate\Support\Str;

class PdfController extends Controller
{
    public function download($identification)
    {
        $data = ColfuturoGicData::getAllData($identification);
        $pdf = Pdf::loadView('pdf.invoice', $data);
        $pdf->setOption(['dpi' => 105, 'defaultFont' => 'Roboto']);
        return $pdf->setPaper('a3', 'landscape')->stream(Str::uuid()->toString() . '_report.pdf');
    }
}
