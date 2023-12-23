<?php
$variables = getenv();

// Display all environment variables
foreach ($variables as $name => $value) {
    echo "$name: $value\n";
}

// Retrieve and display the value of "ip_address"
$ip_address = getenv("ip_address");

if ($ip_address !== false) {
    echo "ip_address: $ip_address\n";
} else {
    echo "ip_address 環境変数は見つかりませんでした。\n";
}

// Retrieve and display the value of "mac_address"
$mac_address = getenv("mac_address");

if ($mac_address !== false) {
    echo "mac_address: $mac_address\n";
} else {
    echo "mac_address 環境変数は見つかりませんでした。\n";
}
?>

