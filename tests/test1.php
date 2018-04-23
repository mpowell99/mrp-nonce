<?php

$mynonce = new MRP_Nonce();
echo $mynonce->get_nonce()."\n";

$action = "log-out";
$mynonce->are_you_sure($action);
echo "\n";

?>
