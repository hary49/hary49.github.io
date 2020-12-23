<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'rosiki-panel.my.id'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $_ENV["'POST'"]);

curl_setopt($ch, CURLOPT_POSTFIELDS, "$'csrf_token=044e90c5909627240a4c9b2441c03450dde9107a58cba99d7165560a0d6c27e7&fullname=bejo&email=bejobintang2389w%40gmail.com&username=bejobintang2389&password=bejobintang2389'");

$headers = array();
$headers[] = $_ENV["'Host": ';
$headers[] = $_ENV["'User-Agent": ';
$headers[] = $_ENV["'Accept": ';
$headers[] = $_ENV["'Accept-Language": ';
$headers[] = $_ENV["'Accept-Encoding": ';
$headers[] = $_ENV["'Content-Type": ';
$headers[] = $_ENV["'Content-Length": ';
$headers[] = $_ENV["'Origin": ';
$headers[] = $_ENV["'Connection": ';
$headers[] = $_ENV["'Referer": ';
$headers[] = $_ENV["'Upgrade-Insecure-Requests": ';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result;

?>