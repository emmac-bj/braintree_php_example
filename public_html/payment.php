<?php

require_once("../includes/braintree_init.php");



$amount = $_POST["amount"];

$nonce = $_POST["payment_method_nonce"];

$result = $gateway->transaction()->sale([

    'amount' => $amount,

    'paymentMethodNonce' => $nonce,

    'options' => [

        'submitForSettlement' => true

    ]

]);



if ($result->success || !is_null($result->transaction)) {

    $transaction = $result->transaction;
    echo $transaction->id;

}
