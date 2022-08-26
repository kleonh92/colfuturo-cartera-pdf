<?php

namespace App\Http\Controllers;

use App\Exports\ExcelExport;
use App\Helpers\Api\Colfuturo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    public function download()
    {
        $document = 1001083190;

        $info = Colfuturo::get('https://api.colfuturo.org/gic-data/v1/extracto/'.$document.'/desembolsosBeneficiario.raw/');

        $data = array(
            'info' => $info,
        );

        return Excel::download(new ExcelExport, 'excel.xlsx');
//        $pdf = Pdf::loadView('pdf.invoice', $data);
//        $pdf->setOption(['dpi' => 105, 'defaultFont' => 'Roboto']);
//        return $pdf->setPaper('a3', 'landscape')->stream('invoice.pdf');
    }
}
