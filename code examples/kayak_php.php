<?php

$params = [
    'source' => 'universal',
    'url' => 'https://www.kayak.com/flights?lang=en&skipapp=true&gclid=cj0kcqiayewrbhddarisagp1mwtslj68r0mxjxpe-mrylvdskkh_10kzpcobndrwa1exgvkpkmfz5a0aat1cealw_wcb&aid=104711689875'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>