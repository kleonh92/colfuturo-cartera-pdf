<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function download()
    {
        $pdf = Pdf::loadView('pdf.invoice');
        return $pdf->setPaper('letter', 'landscape')->stream('invoice.pdf');
    }
}
