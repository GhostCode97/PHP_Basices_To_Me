<style>
    
    pre{
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 18px;
    }
    ul{
        list-style: none;
    }
    li{
        display: inline-block;
        margin: 10px;
        padding: 10px;
        background-color: #f1f1f1;
    }


</style>
<?php

$arr = array(10, 20, 30, 40, 10 => 50);
$arr['id'] = array(60, 70, 80, 90, 100);
$arr[] = 'Ammar';
echo "<pre>" . print_r($arr, true) . "</pre>";

// print array and 2d array 
echo "<h2>print array</h2><ul>";
foreach ($arr as $key=>$value) {
    if (gettype($value) === 'array') {
        
        echo "<li>[$key] ==> array<ul>";
        foreach ($value as $key1=>$value1) {
            echo "<li>[$key1] => $value1 \n </li>";
        }
        echo "</ul></li>";
    } else {
        echo "<li>[$key] ==> $value \n </li>";
    }
}
echo "</ul>";
// array functions
// array_key_exists() to check if key exists in array
if (array_key_exists('10', $arr) && in_array('Ammar', $arr)) {
    echo "<h2>check if key exists in array</h2><pre>true\n</pre>";
}
// array_keys() to get all keys of array
echo "<h2>array keys</h2>\n";
$keys = array_keys($arr);
echo "<pre>" . print_r($keys, true) . "</pre>";
// array_search() to search value in array
echo "<h2>search value in array 'Ammar'</h2><pre>".(array_search('Ammar', $arr)). "</pre>";

// array_slice() to get part of array
echo "<h2>part of array \n </h2>";
echo "<pre>".print_r(array_slice($arr, 1, 2),true)."</pre>";

// array_merge() to merge array
echo "<h2>merge array 100 200 300\n </h2>";
$arr = array_merge($arr, array(100, 200, 300)); 
echo "<pre>" . print_r($arr, true) . "</pre>"; 

// array_shift() to remove first element from array
echo "<h2>remove first element from array</h2><pre>".array_shift($arr); echo "</pre>";
echo "<pre>" . print_r($arr, true) . "</pre>";


// array_pop() to remove last element from array
echo "<h2>remove last element from array</h2><pre>".array_pop($arr)."</pre>"; 
echo "<pre>" . print_r($arr, true) . "</pre>";
echo "\n <br>"; echo "\n <br>"; 

// array_unshift() to add element to first of array
echo "<h2> add element to first of array : Ahmed</h2>";
array_unshift($arr, 'Ahmed');
echo "<pre>" . print_r($arr, true) . "</pre>";

// array_push() to add element to last of array
echo "<h2> add element to last of array : Ömar</h2>";
array_push($arr, "Ömar");
echo "<pre>" . print_r($arr, true) . "</pre>";

// array_rand() to get random key from array
echo "<h2>get random key from array</h2>";
echo "<pre>". array_rand($arr)."</pre>"; 

// shuffle() to shuffle array randomly
echo "<h2>shuffle array randomly</h2>";
shuffle($arr);
echo "<pre>" . print_r($arr, true) . "</pre>";
// array_unique() to remove duplicate element from array

// or  in https://www.php.net/manual/en/ref.array.php search array function
// echo count($arr);

$arr2 = [10, 10.5, true, 'ammar'];
echo "<h2>array have different type</h2>";
echo "<pre>". print_r($arr2,true) . "</pre>";
echo "<pre>";
var_dump($arr2);
echo "</pre>";
// or
$arr3 = array(); // empty array or $arr3=[];
echo "<h2>empty(\$arr3)</h2>";
if (empty($arr3)) {
    echo "<pre>array is empty</pre>";
} else {
    echo "<pre>array is not empty</pre>";
}
echo "\n<br>";
$arr = array('Ammar', 'Ali', 'Ahmed');
// count() to get count of array
// sizeof() to get count of array

echo "<h2>count of array :".count($arr) . "</h2>\n";
echo "<h2>count of array :".sizeof($arr) . "</h2>\n"; 
$hobbies = array('coding', 'reading', 'sleeping');
$hobbies[] = 'playing';
$hobbies[3] = 'coding';

echo"<h2>Associative array</h2>";
echo "<pre>" . print_r($hobbies, true) . "</pre>";

// sort() to sort array
echo"<h2>sort</h2>";
sort($hobbies);
echo "<pre>" . print_r($hobbies, true) . "</pre>";

// rsort() to sort array in reverse order
echo"<h2>rsort</h2>";
rsort($hobbies);
echo "<pre>" . print_r($hobbies, true) . "</pre>";

// array_map() to apply function to array elements and return array of results (apply function to each element)
echo"<h2>array_map</h2>";
$arr = array_map('strtoupper', $hobbies);
echo "<pre>" . print_r($arr, true) . "</pre>";

// Path: arrays.php