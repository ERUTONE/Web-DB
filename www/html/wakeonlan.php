<?php
$ip_address = getenv('ip_address');
$mac_address = getenv('mac_address');
$wakeonlan =("wakeonlan" . $ip_address . $mac_address);
$output = shell_exec($wakeonlan);
echo $output;
?>
