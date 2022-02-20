<?php

include "api_key.php";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.nowpayments.io/v1/payment',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "price_amount": 3999.5,
  "price_currency": "usd",
  "pay_currency": "trx",
  "ipn_callback_url": "https://nowpayments.io",
  "order_id": "RGDBP-21314",
  "order_description": "Apple Macbook Pro 2019 x 1"
}',
  CURLOPT_HTTPHEADER => array(
    'x-api-key: '.$api_key.'',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;