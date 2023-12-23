<?php
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

// Retrieve and display the value of "mac_address"
$mac_address = getenv("wakeonlan");

if ($wakeonlan !== false) {
    echo "wakeonlan: $mac_address\n";
} else {
    echo "wakeonlan 環境変数は見つかりませんでした。\n";
}

// Retrieve and display the value of "mac_address"
$mac_address = getenv("ping");

if ($mac_address !== false) {
    echo "ping: $mac_address\n";
} else {
    echo "ping 環境変数は見つかりませんでした。\n";
}

?>
