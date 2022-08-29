<?php

namespace App\Exports;

use App\Helpers\Api\Colfuturo;
use App\Helpers\Api\ColfuturoGicData;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExcelExport implements WithMultipleSheets
{
    use Exportable;

    protected $data;

//    public function view(): View
//    {
//        $document = 1001083190;
//
//        $info = Colfuturo::get('https://api.colfuturo.org/gic-data/v1/extracto/'.$document.'/desembolsosBeneficiario.raw/');
//
//        $data = array(
//            'info' => $info,
//        );
//
//        return view('excel.sheet1', $data);
//    }

    public function __construct()
    {
//        $this->data = ColfuturoGicData::getAllData(1018473865);
//        Log::info('/////// DATA  ////////');
//        Log::info($this->data);
        $this->data = [
            "city" => "Amsterdam, Noord-Holland",
            "statusName" => "PAEC (Periodo Amortización Exterior con Condonación)",
            "name"=> "Paloma Geraldine",
            "created"=> null,
            "cutoffDate"=> "2022-02-27T05:00:00.000+0000",
            "university"=> "Universiteit van Amsterdam - Uva Amsterdam, Noord-Holland / Holanda",
            "modified"=> null,
            "forgivenessPercentage"=> 40,
            "program"=> "Maestría / Teacher Education and Learning Sciences of Social Arts and Europe",
            "disbursementCode"=> "201806121",
            "lastname"=> "David Velásquez de la Santísima Trinidad",
            "identification"=> "1018473865",
            "country"=> "Holanda",
            "id"=> "62c74263a989b2435b033c51"
        ];

    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];


        $sheets[] = new GeneralResumeSheet($this->data);


        return $sheets;
    }
}
