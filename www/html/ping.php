<?php
$ip_address = getenv("ip_address");
$output = shell_exec("ping -c 1 " . $ip_address);
echo $output;
?>
