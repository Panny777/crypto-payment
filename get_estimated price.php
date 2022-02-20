
<?php

include "api_key.php";

$curl = curl_init();
$amount = 200;

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.nowpayments.io/v1/estimate?amount='.$amount.'&currency_from=usd&currency_to=trx',
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



