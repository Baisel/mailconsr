<?php

$result = `ruby mid.rb`;
$fp = fopen("weo.txt", "a");

fwrite($fp,$result);
fclose($fp);

$fp = fopen("weo.txt", "r");
$file = file_get_contents('./weo.txt', FILE_USE_INCLUDE_PATH);
$pieces = explode(" ", $file);

echo $pieces[0];
echo $pieces[1];
// piece1
fclose($fp);

?>
