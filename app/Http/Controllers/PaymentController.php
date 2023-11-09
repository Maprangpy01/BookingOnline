<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class PaymentController extends Controller
{
    public function Payment(Request $request)
    {
        $BASEURL = "https://sandbox-pgw.2c2p.com/payment/4.1/";
        $APIURL = "PaymentToken";

        $secretkey = "CD229682D3297390B9F66FF4020B758F4A5E625AF4992E5D75D311D6458B38E2";
        $amount = $request->input('amount');
        $formatted_amount = number_format($amount, 2, '.', '');

        $payload = array(
            "merchantID" => "JT04",
            "invoiceNo" => time(), //$request->input('invoiceNo'),
            "description" => $request->input('description'),
            "amount" => $formatted_amount,
            "currencyCode" => "THB",
            "frontendReturnUrl" => route('BookingComplete'),
            "backendReturnUrl" => route('BookingComplete')
        );

        $jwt = JWT::encode($payload, $secretkey, 'HS256');

        $data = '{"payload":"' . $jwt . '"}';

        $curl = curl_init($BASEURL . $APIURL);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers[] = 'Content-Type: application/*+json';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($curl);
        curl_close($curl);

        $decoded = json_decode($response, true);
        $payloadResponse = $decoded['payload'];
        $decodedPayload = (array) JWT::decode($payloadResponse, new Key($secretkey, 'HS256'));

        return redirect()->to($decodedPayload['webPaymentUrl']);
    }
}
