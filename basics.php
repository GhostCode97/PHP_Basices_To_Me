<?php
/*
String $name = 'Ammar';
Integer $age = 20;
Float (floating point numbers - also called double)  $height = 1.8;
Boolean $is_married = false;
Array   $children = ['Ammar', 'Ali', 'Ahmed'];
Object $address = new stdClass(); 
NULL $null = null;
*/
$name = 'Ammar';
$age = 4;
$job = 'Web Developer';
$city = 'Karachi';
$null = null; // null isset($null) will return false if(empty($null)) will return true
// male=ture and  female= false
$sex = true;
// const in php whith out $  var in php using $val
define('LARAVEL', 20); // old 
const HTML = 30;  // new
echo HTML . "\n<br>";
// + - / * ** %  ++ --
// local scope
function test()
{
    $a = 10;
    echo "local \$a = $a<br>\n";
}
test();
// global scope
$b = 10;
function test2()
{
    global $b;
    echo "globel  \$b = $b\n <br>";
}
test2();
// static scope
function test3()
{
    static $c = 0;
    echo "static \$c = $c\n <br>";
    $c++;
}
test3();
test3();
test3();
function power($x, $y)
{
    return $x ** $y;
}
echo "power(5,2) = " . power(5, 2) . "\n<br>";
echo $age;
$hobbies = array('Coding', 'Reading', 'Sleeping');
$hobbies[3] = 'Playing';
// string function
$str = 'Ammar';
echo strlen($str) . "\n<br>";
echo str_word_count($str) . "\n<br>";
echo strrev($str) . "\n<br>";
echo $str. "\n<br>";
echo strpos($str, 'Ammar') . "\n<br>";
echo str_replace('Ammar', 'Ahmed', $str) . "\n<br>";

// || or && and  ! not 
// == ==== != <> !== < > <= >= 
/* // non empty string = true and empty string = false  and 0 = false 
        // $val=0; // $val='0' // $val=''; 
        if($val):
            echo 'true';
        else:
            echo 'false'; 
        endif;
        // or 
        if($val==0){
            echo 'true';
        }
        else{
            echo 'false';
        }
        */
        // gettype() to know the type of variable
        // var_dump() to print the variable
        // isset() to check if variable is set or not
        // empty() to check if variable is empty or not

        // array_unique() to remove duplicate element from array
        // array_diff() to get difference between two array
        // array_intersect() to get intersection between two array

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (!($name === 'Ammar' && $age === '24')) : ?>
        <h2>
            <?php
            echo "my name is $name \n <br>\\";
            echo 'my name is $name \n  \\';
            ?>
        </h2>
    <?php else : ?>
        <ol>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <li>
                    <?php echo $i; ?>
                </li>
            <?php endfor; ?>
            <br>
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <li>
                    <?php echo $i; ?>
                </li>
            <?php } ?>
            <!-- not use it-->
        </ol>
    <?php endif; ?>
    <p><?= "$name : " . HTML ?></p>
</body>

</html>