<?php
$array = [0,4,7,3,2,9,1,2,8,5];
function checkMin($array){

    $min = $array[0];
    for($i=0;$i < count($array); $i++){
        if ($min > $array[$i]){
            $min = $array[$i];
        }
    }
    return $min;
}
echo("gia tri nho nhat la". " ".checkMin($array));
echo("gia tri nho nhat la". " ". min($array))a;
?>
