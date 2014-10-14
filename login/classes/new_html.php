
<?php
$myfile = fopen("test.html", "w") or die("Unable to open file!");
$txt = "test\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 