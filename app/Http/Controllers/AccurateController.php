<?php

namespace App\Http\Controllers;

use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccurateController extends Controller
{
    public function index()
    {

        try {
            $response = 'https://account.accurate.id/oauth/authorize?
                client_id=481371ad-0790-48ef-9c96-12dac9af980e&
                client_secret=df1eb7e0e3141379ce476fba1b0a228a&
                response_type=code&
                redirect_uri=http://dusk.test/aol_back&
                scope=item_view+item_save+sales_invoice_view';

            if ($response) {
                return $response;
            } else {
                return "Oops!";
            }
        } catch (\Exception $exception) {
            return 'Caught exception: ' . $exception->getMessage();
        }
    }

    public function aolback(Request $request)
    {

        $code = $_GET['code'];
        $grant_type = 'authorization_code';
        $request = array(
            'code' => $code,
            'grant_type' =>  $grant_type
        );
        return $request;
    }
}
