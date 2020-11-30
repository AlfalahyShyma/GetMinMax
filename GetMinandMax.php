<?php
$array = array(1,2,3,4,5);
echo(getMax($array));
echo "<br>";
echo(getMin($array));
function getMax($array){
    $i=max($array);
    return $i;
}
function getMin($array){
    $i=min($array);
    return $i;
}

?>