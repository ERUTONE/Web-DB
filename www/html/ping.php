<?php
// pingコマンドを実行するための情報を設定します。
$ip_address = "192.168.3.83"; // IPアドレスを設定します。

// pingコマンドを実行します。
$output = shell_exec("ping -c 1 " . $ip_address);

// 結果を表示します。
echo $output;
?>
