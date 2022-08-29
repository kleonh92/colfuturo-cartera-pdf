<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\FontMetrics;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers\Api\ColfuturoGicData;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class PdfController extends Controller
{
    /**
     * @throws HttpException
     */
    public function download($identification)
    {
        if (!($disbursementCode = ColfuturoGicData::getDisbursementCode($identification))) {
            throw new HttpException(Response::HTTP_NOT_FOUND, "Not found data for this identification.");
        }
        $cacheKey = 'gic_data_all:' . $identification;
        /**
         * @TODO remove this when data is available in API
         */
        //Cache::flush();
        if (!($data = Cache::get($cacheKey))) {
            $data = ColfuturoGicData::getAllData($identification, $disbursementCode);
            Cache::forever($cacheKey, $data);
        }
        try {
            $pdf = Pdf::loadView('pdf.credito_beca', $data);
            $pdf->setOption(['dpi' => 105, 'defaultFont' => 'Roboto']);
            $pdf->setPaper('a3', 'landscape');
            return $pdf->stream('credito-beca-' . Str::uuid()->toString() . '.pdf');
        }
        catch (\Exception $exception) {
            Log::error($exception->getMessage());
            throw new HttpException(Response::HTTP_BAD_REQUEST, "Something wrong generating data for this identification.");
        }
    }
}
