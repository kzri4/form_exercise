<?php

var_dump("上底は？");
$top=trim(fgets(STDIN));

var_dump("下底は？");
$bottom=trim(fgets(STDIN));

var_dump("高さは？");
$height=trim(fgets(STDIN));

var_dump("面積は". (($top + $bottom) * $height/2));

?>

