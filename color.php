<?php
$rgb=[];
for($i=0;$i<3;$i++){
    $rgb[$i]=rand(0,255)?:rand(0,255);
}
echo "rgb(".$rgb[0].",".$rgb[1].",".$rgb[2].")";
?>