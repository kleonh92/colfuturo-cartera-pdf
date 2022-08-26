<?php

namespace App\Helpers\Api;

use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ColfuturoGicData
{

    public static function getAllData($identification, $disbursementCode = 201806121)
    {
        $data = [];
        foreach (['beneficiario', 'resumen'] as $generalSection) {
            $data[$generalSection] = self::getIndividualData(['extracto', $identification, $disbursementCode, $generalSection . '.raw']);
        }
        foreach (['01', '02'] as $typeCredit) {
            foreach ([
                'inicio', 'condonaciones', 'desembolsos',  'interesesYSeguros', 'mora', 'pagos', 'pagosRealizados', 'planPagosMora'
                     ] as $creditSection) {
                $data[$typeCredit][$creditSection] = self::getIndividualData(['extracto', $identification, $disbursementCode, $typeCredit, $creditSection . '.raw']);
            }
        }
        /**
         * @TODO ask for /extracto/{identification}/{disbursementCode}/{typeCredit}/planPagos/{paymentPlanType} endpoint
         */
        return $data;
    }

    public static function getIndividualData(array $path) {
       $ch = curl_init(); '';

        curl_setopt($ch, CURLOPT_URL, implode('/', array_merge(
            [config('colfuturo_gic_data.base_url')], $path)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = [
            'Auth-Key: ' . config('colfuturo_gic_data.api_auth_key'),
            'Content-Type: application/json',
            'Accept: application/json',
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Not possible to get data from Colfuturo GIC data server: ' . curl_error($ch));
        }
        curl_close($ch);

        if ($status >= 200 && $status < 300) {
            $response = json_decode($response, true);
            if (isset($response['status']) && $response['status'] === 404) {
                return [];
            }
            return $response;
        }
        return [];

        /**
         * @TODO: This is responding 410, see what happens
         */
        /*$response = Http::withOptions([
            RequestOptions::HEADERS => [
                'Authorization' => config('colfuturo_gic_data.api_auth_key'),
            ],
            RequestOptions::DEBUG => true,
        ])->get(implode('/', array_merge(
            [config('colfuturo_gic_data.base_url')], $path)));
        $status = $response->status();

        if ($response->successful()) {

            return json_decode($response->body());
        }
        throw new HttpException(Response::HTTP_BAD_REQUEST, 'Not possible to get data from Colfuturo GIC data server');*/
    }
}