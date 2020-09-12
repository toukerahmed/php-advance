<?php 

function prettyPrint($var) {
  echo '<pre>';
  print_r($var);
  echo '</pre>';
}

/**
 * 
 */
function sum($a = 0, $b = 0) {
  return $a+$b;
}

// Get any argument from funcs and summetion them

/**
 * Get any argument from func and summetion them
 * 
 * It takes any number of args 
 * If its has gretter than 1 args then continue the loop just print the first args or 0;
 * Check if all number is int
 */
function getArguments() {
  $allArgs = func_get_args();
  prettyPrint($allArgs);

  $result = 0;
  // $hasArgs = count($allArgs) > 0 ? true : false; 
  $hasArgs = count($allArgs) > 0 || false;  

  if (!$hasArgs) {
    return $result;
  }
  if (count($allArgs) == 1) {
    return $allArgs[0];
  }

  // for($i = 0; $i<count($allArgs); $i++) {
  //   $result = sum($result, $allArgs[$i]);
  // }
  foreach( $allArgs as $key => $value) {
    echo " key: " . $key . " value ". $value . "<br/>";
    $result = sum($result, $value);
  }
  return $result;
}

$result = getArguments(10, 20, 30);

echo "<br/>"; 
echo "Total Result:" . $result;

 // Associative array

 echo "<hr/>"; 

 $fruits = [
   'apple' => 10, 
   "orange" => 20, 
   "banana" => 40
 ]; 

/**
 * Apple = 10
 * Orange = 20
 * Banana = 40
 * 
 * total = 70
 */

 prettyPrint($fruits);

foreach($fruits as $key => $value) {
  echo $key . " = ". $value ." , ";
}

prettyPrint($fruits);
$total=0;
 foreach($fruits as $key => $value){
  echo $key . " = ". $value ."<br/> ";
  $total=$total+$value;
 }
 echo "total=" . $total;

 // Array 
 $array = ['fruits' => ['apple','banana', 'orange'], 'electronics'=> ['mobile','tv','laptop']]; 

 prettyPrint($array);
