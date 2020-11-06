<?php
echo "Cmd service";
echo "</br>";
echo "Allowed commands: uptime";
echo "</br>";
# AUDIT_VULN_1: command injection due to unescaped user argument
# AUDIT_VULN_2: unfiltered user commands
shell_exec("/usr/local/bin/check_commands \"".escapeshellarg($_POST['arg'])."\"");
?>
