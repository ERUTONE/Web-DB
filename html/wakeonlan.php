<?php
$ip_address = getenv('ip_address');
$mac_address = getenv('mac_address');
$output = shell_exec("wakeonlan -i " . $ip_address . " " . $mac_address);
echo $output;
?>
