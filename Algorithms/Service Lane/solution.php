<?php
function max_vehicle($i,$j,$width) {
    $vehicle = 3;
    for($i; $i<=$j; $i++) {
        if($width[$i] < $vehicle) {
            $vehicle = $width[$i];
        }
    }
    return $vehicle;
}
$handle = fopen("php://stdin","r");
$str = fgets($handle);
sscanf($str,"%d %d",$n,$t);
$str = fgets($handle);
$width = explode(" ",$str);
for($q=0; $q<$n; $q++) {
    $width[$q] = trim($width[$q]);
}
for($q=0; $q<$t; $q++) {
    $str = fgets($handle);
    sscanf($str,"%d %d",$i,$j);
    printf("%d\n",max_vehicle($i,$j,$width));
}
fclose($handle);
unset($handle);
?>
