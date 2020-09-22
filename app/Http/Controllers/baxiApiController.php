<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class baxiApiController extends Controller
{
    public function subscription()
    {
        $response = Http::withHeaders([
                'Baxi-date' => '2019-10-12T07:20',
                'x-api-key' => '5adea9-044a85-708016-7ae662-646d59'
        ])->post('https://payments.baxipay.com.ng/api/baxipay/services/multichoice/request', [
                'total_amount' => '',
                'product_monthsPaidFor' => '',
                'product_code' => '',
                'smartcard_number' => '',
                'agentReference' => '',
                'agentId' => '',
                'service_type' => ''
        ]);

       return $response->body();
    }

    public function electricity()
    {
        $response = Http::withHeaders([
                'Baxi-date' => '2019-10-12T07:20',
                'x-api-key' => '5adea9-044a85-708016-7ae662-646d59'
        ])->post('https://payments.baxipay.com.ng/api/baxipay/services/electricity/request', [
                'phone' => '',
                'amount' => '',
                'account_number' => '',
                'service_type' => '',
                'agentReference' => '',
                'agentId' => ''
        ]);

       return $response->body();
    }
}
