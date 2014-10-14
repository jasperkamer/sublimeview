<?php

include_once('tbs_class.php');

$x = 'TEST';

$TBS = new clsTinyButStrong;
$TBS->LoadTemplate('tbs_us_examples_hello.htm');
$TBS->Show();

?>