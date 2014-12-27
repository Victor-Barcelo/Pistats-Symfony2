<?php

$db = new PDO('mysql:host=victorbarcelo.net;dbname=victorba_igni941', 'victorba_igni941', 'f(hP6(92S5');
$st = $db->prepare('INSERT INTO temperatures (temperature,time) VALUES (?,?)');
$rand_temp = rand(45, 80) + rand(1, 9) / 10;
$st->execute(array($rand_temp, time()));

if ($rand_temp > 70) {
    send_temperture_alert_notification($rand_temp);
}

function send_temperture_alert_notification($temp) {
    $url = 'http://pistats.victorbarcelo.net/users/notify_temperature_alert';
    $options = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => array('login' => 'vto', 'password' => '1234', 'temperature' => $temp));
    do_curl($options);
}

function do_curl($options) {
    $curl = curl_init();
    curl_setopt_array($curl, $options);
    $output = curl_exec($curl);
    curl_close($curl);
}

