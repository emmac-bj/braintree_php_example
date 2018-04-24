<?php
require_once("../includes/braintree_init.php");
$aCustomerId = $_GET['customer_id'];
$clientToken = $gateway->ClientToken()->generate([

    "customerId" => $aCustomerId

]);
echo ($clientToken);
?>
