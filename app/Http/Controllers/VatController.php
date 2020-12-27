<?php

namespace App\Http\Controllers;
use SoapClient;
use Illuminate\Http\Request;

class VatController extends Controller
{
    public function index()
    {
        return view('vat');
    }

    public function store(Request $request)
    {
        $countryCode = $request->get('memberStateCode');
        $code = $request->get('number');

        $client = new SoapClient("http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl");

        $result = $client->checkVat(['countryCode' => $countryCode, 'vatNumber' => $code]);
        if($result->valid == true) {
            return "Correct VAT Code.";
        } else {
           return "VAT code is Invalid.";
        }



    }
}
