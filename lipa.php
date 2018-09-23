<?php
$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer ACCESS_TOKEN')); //setting custom header


$curl_post_data = array(
    //Fill in the request parameters with valid values
    'BusinessShortCode' => '174379',
    'Password' => 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTgwNjEyMzM0NA==',
    'Timestamp' => '201806123344',
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount"' => '10',
    'PartyA' => '254717052892',
    'PartyB' => ' ',
    'PhoneNumber' => ' ',
    'CallBackURL' => 'https://ip_address:port/callback',
    'AccountReference' => ' ',
    'TransactionDesc' => ' '
);

$data_string = json_encode($curl_post_data);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$curl_response = curl_exec($curl);
print_r($curl_response);

echo $curl_response;
?>
