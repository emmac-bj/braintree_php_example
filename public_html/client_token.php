<?php
require_once("../includes/braintree_init.php");
echo($gateway->ClientToken()->generate());
?>
