<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function download()
    {
        $pdf = Pdf::loadView('pdf.invoice');
        $pdf->setOption(['dpi' => 105, 'defaultFont' => 'Roboto']);
        return $pdf->setPaper('a3', 'landscape')->stream('invoice.pdf');
    }
}
