<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    static function getRequest($url)
    {
        $api_response = Http::withHeaders([
            'X-Auth-Token' => env('BIGC_TOKEN')
        ])->get($url);

        $response = $api_response->json();
        return $response;
    }
}
