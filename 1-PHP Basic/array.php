<?php

// $arr = array("a","b","c");
$x = ["x", "y", "z"];

// echo array_pop($x);
// echo "\n";
// print_r($x);

// echo array_shift($x);
// echo "\n";
// print_r($x);



// $assoc = [
//     "myName" => "Zaw Htet Aung",
//     "myAge" => 22,
//     "myJob" => array("Developer","Designer"),
//     "gf" => null,
//     "isHandsome"  => true,
// ];


// echo array_search("Zaw Htet Aung",$assoc);
// echo "\n";
// echo array_key_exists("myAge",$assoc);

// print($assoc["myName"]);

// print_r($arr);
// echo $arr[0];
// echo $x[1];

// print_r($x);
// system("clear");

// $arr = ["a", "b", "c", "d", "e", "f"];

// print_r(join(", ",$arr));
// echo "\n";
// echo implode("--",$arr);
// echo "\n";

//string to array
// print_r(explode(" ", "san kyi tar"));

// $r = array_reverse($arr);
// print_r($r);

// print_r(range(1,100,10));


// echo in_array("c",$arr);


// $r = array_splice($arr, 1, 3);

// print_r($r);

// print_r($arr);


// foreach(array_rand($arr,3) as $i){
//     echo $arr[$i];
//     echo "\n";
// }

// echo $arr[array_rand($arr, 2)];
// echo "\n";
// echo $arr[array_rand($arr, 2)];
// echo "\n";
// echo $arr[array_rand($arr, 2)];
// echo "\n";
// echo $arr[array_rand($arr, 2)];
// echo "\n";







// print_r(array_chunk($arr,2));

// $arr1 = array("color" => "red", 2, 4);
// $arr2 =  array("a", "b", "color" => "green",);

// $nums = [5,12,10,6,7,3];

// $r  = array_map(fn($el) => $el *2,$nums);
// echo "\n";
// print_r($r);

// $s = array_filter($nums, fn($el) => $el <= 10);
// print_r($s);
// echo "\n";

// $t = array_reduce($nums,fn($pv,$cv) => $pv + $cv, 0);
// print_r($t);
// echo"\n";

// $json = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");
// echo $json;
// echo "\n";

//  $assoc = json_decode($json,true);
//  print_r($assoc);

//  echo "\n";
//  echo $assoc["userId"];
//  echo "\n";
//  echo $assoc["title"];
//  echo  "\n";

$GLOBALS["MY_NAME"] = "Zaw Htet Aung";
$GLOBALS["MY_AGE"] = 22;
