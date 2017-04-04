<?php

include "utility_fuctions.php";
include "Barosello.class.php";

define("NUM_MAX", 100);
define("SEPARATOR", ',');

$obj = new Barosello();


// STEP1
$rules1 = [3 => "Baro", 5 => "Sello"];
echo "<b>STEP1: </b><br>";
$obj->standardOutput($rules1, NUM_MAX, SEPARATOR);

// STEP2
$rules2 = [3 => "Baro", 5 => "Sello", 7 => "Nando"];
echo "<br><br><b>STEP2: </b><br>";
$obj->standardOutput($rules2, NUM_MAX, SEPARATOR);

// STEP3
$func_add_prefix = "add_prefix";
$func_add_color = "add_color";
echo "<br><br><b>STEP3:</b> Vedi Console Browser";
echo "<script>console.log('----------> STEP3 <----------------')</script>";
echo $obj->consoleOutput($rules1,NUM_MAX, $func_add_prefix,$func_add_color);

// STEP4
echo "<br><br><b>STEP4:</b> Vedi Console Browser";
echo "<script>console.log('----------> STEP4 <----------------')</script>";
echo $obj->consoleOutput($rules1,NUM_MAX, $func_add_prefix,$func_add_color, "barosello_filter");


//STEP5
echo "<br><br><b>STEP5:</b> Vedi Console Browser per i Barosello<br>";
echo "<script>console.log('----------> STEP5 <----------------')</script>";
echo $obj->consoleOutput($rules1,NUM_MAX, $func_add_prefix,$func_add_color, "barosello_filter");
echo "Standard Output: ".$obj->standardOutput($rules1, NUM_MAX, SEPARATOR, "baro_filter");

echo $obj->consoleOutput($rules1,NUM_MAX, $func_add_prefix,$func_add_color, "sello_filter");
echo "Standard Output: ".$obj->standardOutput($rules1, NUM_MAX, SEPARATOR, "sello_filter");

?>
