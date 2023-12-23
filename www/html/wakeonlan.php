<?php
$wakeonlan = getenv('wakeonlan');
$output = shell_exec($wakeonlan);
echo $output;
?>
