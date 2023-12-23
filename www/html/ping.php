<?php
$ping = getenv("ping");
$output = shell_exec($ping);
echo $output;
?>
