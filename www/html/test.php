<?php
$variables = getenv();

foreach ($variables as $name => $value) {
    echo "$name: $value\n";
}

// 環境変数の名前を指定して値を取得
$path = getenv("ip_address");

if ($path !== false) {
    // 環境変数が存在する場合、値を出力
    echo "ip_address: $path\n";
} else {
    // 環境変数が存在しない場合
    echo "ip_address 環境変数は見つかりませんでした。\n";
}


// 環境変数の名前を指定して値を取得
$path = getenv("mac_address");

if ($path !== false) {
    // 環境変数が存在する場合、値を出力
    echo "mac_address: $path\n";
} else {
    // 環境変数が存在しない場合
    echo "mac_address 環境変数は見つかりませんでした。\n";
}

?>
