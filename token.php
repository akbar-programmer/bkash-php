<?php
session_start();
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://tokenized.sandbox.bka.sh/v1.2.0-beta/tokenized/checkout/token/grant",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"app_key\":\"4f6o0cjiki2rfm34kfdadl1eqq\",\"app_secret\":\"2is7hdktrekvrbljjh44ll3d9l1dtjo4pasmjvs5vl5qr3fug4b\"}",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/json",
    "password: saiful13405",
    "username: 8801711971811"
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
