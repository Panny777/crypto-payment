<?php

include "api_key.php";

$curl = curl_init();

$payment_id = 5184360477;

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.nowpayments.io/v1/payment/'.$payment_id.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'x-api-key: '.$api_key.''
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;