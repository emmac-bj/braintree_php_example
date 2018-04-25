<?php

require_once("../includes/braintree_init.php");

$firstname = $_POST['firstname'];
$address = $_POST['billing_address'];
$email = $_POST['mail'];
$country = $_POST['country'];
$phone = $_POST['number'];

$res = $gateway->customer()->create([
    'firstName' => $firstname,
    'email' => $email,
    'phone' => $phone,
    'countryName' => $country,
    'billingAddress' => $address
]);

if ( $res->success){
    echo $res->customer->id;
}
