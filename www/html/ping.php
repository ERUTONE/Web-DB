<?php
$ip_address = getenv(ip_address);
$output = shell_exec("ping -c 1 " . $ip_address);

// 結果を表示します。
echo $output;
?>
