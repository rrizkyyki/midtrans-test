<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function index(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-oceZfvL9yAYrP_d8Wrk3iORV';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('index', ['snap_token' => $snapToken]);
    }

    public function parameterPay(Request $request)
    {
        return view('welcome');
    }

    public function callbackJs(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-oceZfvL9yAYrP_d8Wrk3iORV';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'item_details' => array(
                [
                    'id' => 'price',
                    'price' => '10000',
                    'quantity' => '1',
                    'name' => 'Apel'
                ]   
            ),
            'customer_details' => array(
                'first_name' => $request->get('name'),
                'last_name' => '',
                'email' => $request->get('email'),
                'phone' => $request->get('phone_number'),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('callback_js', ['snap_token' => $snapToken]);
    }

    public function callbackJsPost(Request $request)
    {
        return $request;
    }
}
