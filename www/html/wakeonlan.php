<?php
$output = shell_exec("wakeonlan -i " . $mac_address);

// 結果を表示します。
echo $output;
?>
