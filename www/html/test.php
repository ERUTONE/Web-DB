<?php
$variables = getenv();

foreach ($variables as $name => $value) {
    echo "$name: $value\n";
}
?>
