<?php

namespace App\Commons;

use Exception;

class PaymentProcessor
{
    private $url = 'https://api.flutterwave.com/v3/charges?type=mobile_money_franco';
    public $secret_key = 'FLWSECK_TEST-ef619bc1273084a11e2f8c970512729d-X';
    public $payer_information =   array(
        "phone_number" => "237680162416",
        "amount" => 1500,
        "currency" => "XAF",
        "email" => "JoeBloggs@acme.co",
        "tx_ref" => "BJUYU3998fcdsd4ds903"
    );



    public function initiate_payment()
    {
        try {

            $payer_information_json = json_encode($this->payer_information);

            $headers = array(
                'Authorization: Bearer ' . $this->secret_key,
                'Content-Type: application/json',
            );


            $ch = curl_init($this->url);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payer_information_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //Comment this line out when on server with SSL Certificate

            $response = curl_exec($ch);


            if ($response === false) {
                curl_close($ch);
                return false;
            } else if ($response) {

                curl_close($ch);
                $response = json_decode($response);

                if ($response->status == 'success') {

                    echo $response->status;
                   // return $response->status;
                } else {
                    return false;
                }
            }
        } catch (Exception $ex) {
            return false;
        }
    }
}
