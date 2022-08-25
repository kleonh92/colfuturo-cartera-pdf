<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers\Api\Colfuturo;

class PdfController extends Controller
{
    public function download()
    {
        $document = 1001083190;

        $info = Colfuturo::get('https://api.colfuturo.org/gic-data/v1/extracto/'.$document.'/desembolsosBeneficiario.raw/');

        $data = array(
            'info' => $info,
        );
        
        $pdf = Pdf::loadView('pdf.invoice', $data);
        $pdf->setOption(['dpi' => 105, 'defaultFont' => 'Roboto']);
        return $pdf->setPaper('a3', 'landscape')->stream('invoice.pdf');
    }
}
