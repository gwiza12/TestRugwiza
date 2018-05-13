<?php

$array_nber =array(1,2,3,4,5,6,7,8,9);
$array_result=array();
$count=0;

echo "mara ya 5 <br><br>";

for($i=0; $i<9; $i++){
    
    $array_result[$i] = $array_nber[$i] *5;
    
}
foreach($array_result as $value){
    
    echo "5 * " .$array_nber[$count] ."= ".$value."<br>";
    $count++;

}

?>