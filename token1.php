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
    'Accept:application/json',    'Authorization:eyJraWQiOiJEWXd6RU9Fd3h5Q3lkRVwvUnJZU1BOcGk5MENBQkVBeHZ0bUs1QXQ4XC9oaVk9IiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiJjNDZiNGZhZi1kNzZkLTQ0MjAtYWI4YS0wMGI2ZTVmMzhiMTgiLCJhdWQiOiIyN29pbTV2YXQ0N2VlYWxiZWltMmd1dnNxaCIsImV2ZW50X2lkIjoiYTRmMTc4ZjktMGQwZi00OWNiLWJiMGUtMGM2NzI4NmE4ZWVjIiwidG9rZW5fdXNlIjoiaWQiLCJhdXRoX3RpbWUiOjE2MzA4NjUxMzYsImlzcyI6Imh0dHBzOlwvXC9jb2duaXRvLWlkcC5hcC1zb3V0aGVhc3QtMS5hbWF6b25hd3MuY29tXC9hcC1zb3V0aGVhc3QtMV9UM1ZLQ2cyaHkiLCJjb2duaXRvOnVzZXJuYW1lIjoiUE9SVUFUQyIsImV4cCI6MTYzMDg2ODczNiwiaWF0IjoxNjMwODY1MTM2fQ.Zi7rWNejoUxQTyATUcjskwiQzUDXJIBpbiO_W2TmkfDndKTlePCajiP7My0KIuk4WVxVwhwHK7nszybAPrGVvG2tUesPhJ3adQiTT8oQgYQ8LRmclMJJqTIp-N6LyFh1wgL_HYJexdvZCXPpQ3xF_6ukd83ZhZQdNlRMHAO5SV7Zxzj27vEfC99yz0aTwmkMeF09B5oIGUgA9dWZAhyNokd_zG5GlgK55NOWgF_kSvW3EqO2DT1Qy1eJVzewv43KXonlK03kWbEbo0u0xnsZ8YUb1A-ZfUS65Um2PXeGCmiWFeuAjvycM_KUQ0bmOpRYs8H7p7BpAhwxVzfmGiGAUA',
    'X-APP-Key:27oim5vat47eealbeim2guvsqh',
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
