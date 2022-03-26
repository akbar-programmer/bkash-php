<?php
session_start();
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://tokenized.pay.bka.sh/v1.2.0-beta/tokenized/checkout/payment/query",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{\"paymentID\":\"TR0011G41630866942533\"}",
  CURLOPT_HTTPHEADER => [
    'Accept:application/json',    'Authorization:',
    'X-APP-Key:',
    'Content-Type:application/json'
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
