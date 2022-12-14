<?php

namespace App\Exports;

use App\Helpers\Api\Colfuturo;
use App\Helpers\Api\ColfuturoGicData;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Symfony\Component\HttpFoundation\Response;

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
        $identification = 1018473865;

        if (!($disbursementCode = ColfuturoGicData::getDisbursementCode($identification))) {
            $codes = [
                1001083190 => 201901335,
                1018473865 => 201806121,
            ];
            if (!($disbursementCode = $codes[$identification])) {
                throw new \HttpException("Not found data for this identification", Response::HTTP_NOT_FOUND);
            }
        }
        $cacheKey = 'gic_data_all:' . $identification;
        Cache::flush();
        if (!($data = Cache::get($cacheKey))) {
            $data = ColfuturoGicData::getAllData($identification, $disbursementCode);
            Cache::forever($cacheKey, $data);
        }
        try {
            $this->data = $data;
        }
        catch (\Exception $exception) {
            Log::error($exception->getMessage());
            throw new \HttpException("Something wrong generating data for this identification", Response::HTTP_BAD_REQUEST);
        }


//        $this->data = ColfuturoGicData::getAllData(1018473865);
////        Log::info('/////// DATA  ////////');
////        Log::info($this->data);
//        $this->data = [
//            "city" => "Amsterdam, Noord-Holland",
//            "statusName" => "PAEC (Periodo Amortizaci??n Exterior con Condonaci??n)",
//            "name"=> "Paloma Geraldine",
//            "created"=> null,
//            "cutoffDate"=> "2022-02-27T05:00:00.000+0000",
//            "university"=> "Universiteit van Amsterdam - Uva Amsterdam, Noord-Holland / Holanda",
//            "modified"=> null,
//            "forgivenessPercentage"=> 40,
//            "program"=> "Maestr??a / Teacher Education and Learning Sciences of Social Arts and Europe",
//            "disbursementCode"=> "201806121",
//            "lastname"=> "David Vel??squez de la Sant??sima Trinidad",
//            "identification"=> "1018473865",
//            "country"=> "Holanda",
//            "id"=> "62c74263a989b2435b033c51"
//        ];
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
