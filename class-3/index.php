<?php 
function prettyPrint($var) {
  echo '<pre>';
  print_r($var);
  echo '</pre>';
}



/**
 * fruites -> apple, banana, orange
 * ele -> a,d...
 * brand -> empty
 */
 $baseArray = [
    'fruits' => ['apple','banana', 'orange'], 
    'electronics'=> ['mobile','tv','laptop'], 
    "brand"
  ]; 

$clone = &$baseArray;

$clone['electronics'] = ['tv','laptop']; 

// prettyPrint($baseArray);
// prettyPrint($clone);

$output = "<ul>";

foreach($clone as $key => $value ) {
  $name = "";
  $desc = "";
  if (is_array($value)) {
    $name = $key;
    $desc = implode(", ", $value);
  }else {
    $name = $value; 
    $desc = "empty";
  }
  $output .= "<li>". $name . " -> " . $desc ."</li>";
}
$output .= "</ul>";

echo $output;


$numbers = [
  'f', 
  'b', 
  'a', 
  ['x', 'y','z']
];

// array_push($numbers, 'w');
// array_unshift($numbers, 'z');

prettyPrint($numbers);
$item = array_pop($numbers);
prettyPrint($item);
// rsort($numbers);
prettyPrint($numbers);

$secondItem = array_shift($numbers); 
prettyPrint($secondItem);
prettyPrint($numbers);