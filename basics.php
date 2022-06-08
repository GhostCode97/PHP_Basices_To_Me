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
//Operators 

/* 
Arithmetic Operators 
+	Addition	$x + $y
-	Subtraction	$x - $y
*	Multiplication	$x * $y
/	Division	$x / $y
%	Modulus	$x % $y
++	Increment	$x++
--	Decrement	$x--
**	Exponentiation	$x ** $y
+=	Add and assign	$x += $y
-=	Subtract and assign	$x -= $y
*=	Multiply and assign	$x *= $y
/=	Divide and assign	$x /= $y
%=	Modulus and assign	$x %= $y
**=	Exponentiation and assign	$x **= $y       */

/*
Comparison Operators
==	Equal	$x == $y
===	Identical	$x === $y
!=	Not equal	$x != $y
<>	Not identical	$x <> $y
!==	Not identical	$x !== $y
>	Greater than	$x > $y
<	Less than	$x < $y
>=	Greater than or equal to	$x >= $y
<=	Less than or equal to	$x <= $y     */

/* Logical Operators
&&	Logical AND	$x && $y
||	Logical OR	$x || $y
!	Logical NOT	!$x      */

/* 
String Operators
. Concatenation	$x . $y
.=	Concatenate and assign	$x .= $y   */

/*
Bitwise Operators
&	Bitwise AND	$x & $y
|	Bitwise OR	$x | $y
^	Bitwise XOR	$x ^ $y
~	Bitwise NOT	~$x        */

/*
Conditional Assignment Operators
?:	Ternary operato  $condition ? $x : $y
??   Null coalescing operator  $x = expr1 ?? expr2      */

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
echo $str . "\n<br>";
echo strpos($str, 'Ammar') . "\n<br>";
echo str_replace('Ammar', 'Ahmed', $str) . "\n<br>";

// number function
// abs() is absolute value
// round() is round number
// ceil() is round up
// floor() is round down
// rand() is random number
// pi() is pi number
// pow() is power
// sqrt() is square root
// max() is max number
// min() is min number
// exp() is exponential
// log() is logarithm
$num = -10.6;
echo "$num \n<br> ABS(-10.6) = ";
echo $num = abs($num);
echo "\n<br>";
echo "round($num) = " . round($num) . "\n<br>";
echo "ceil($num) = " . ceil($num) . "\n<br>";
echo "floor($num) = " . floor($num) . "\n<br>";
echo "max($num,20,5,110) = " . max($num, 20, 5, 110) . "\n<br>";
echo "min($num,20,11,15) = " . min($num, 20, 11, 15) . "\n<br>";
echo "rndom number between 1 and 100 is &emsp;" . rand(1, 100) . "\n<br>";
echo "sqrt(100) = " . sqrt(100) . "\n<br>";
echo "pow(2, 3) = " . pow(2, 3) . "\n<br>";
echo "acos(1) = " . acos(1) . "\n<br>";

// to check type of variable use gettype() or var_dump() function 
// gettype() function return type of variable
// var_dump() function return type and value of variable

// to check specific type of variable use 
// is_int() is_float() is_double() is_numeric() is_string() is_bool() is_array() is_object() is_null()
// is_iterable() is_null()
// is_null to check variable is null or not
// isset() to check variable is set or not
// empty() to check if variable is empty or not

/* 
// non empty string = true and empty string = false  and 0 = false 
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
// condition statement
// if , nested if else , and if elseif else 
// switch statement to perform different actions based on different conditions
// Conditional operator (ternary operator) is a shorthand for the if/else statement.
function negative_positive($x)
{
    if ($x < 0) {
        echo "Negative number";
    } elseif ($x == 0) {
        echo "Zero";
    } else {
        echo "Positive number";
    }

}
function test_even_odd($x)
{
    // using switch case
    switch ($x % 2) {
        case 0:
            echo "Even number";
            break;
        case 1:
            echo "Odd number";
            break;
        default:
            echo "Invalid number";
            break;
    }
}
echo 5>10 ? "5 is greater than 10" : "5 is not greater than 10";
// loop statement 
// while loop to repeat a block of code until a condition is true
// do while loop to repeat a block of code at least once
// for loop to repeat a block of code a specified number of times
// foreach loop to loop through the values of an array
// break and continue statement to terminate the current loop iteration
// goto statement to jump to a labeled line of code in a script
function test_loop()
{
    $i = 0;
    while ($i < 10) {
        echo $i . "\n";
        $i++;
    }
}
function test_loop2()
{
    $i = 0;
    do {
        echo $i . "\n";
        $i++;
    } while ($i < 10);
}
function test_loop3()
{
    for ($i = 0; $i < 10; $i++) {
        echo $i . "\n";
    }
}
function test_loop4()
{
    $i = 0;
    while ($i < 10) {
        if ($i == 5) {
            break;
        }
        echo $i . "\n";
        $i++;
    }
}
function test_loop5()
{
    $i = 0;
    while ($i < 10) {
        if ($i == 5) {
            $i++;
            continue;
        }
        echo $i . "\n";
        $i++;
    }
}
function test_go_to()
{
    $i = 0;
    while ($i < 10) {
        if ($i == 5) {
            goto end;
        }
        echo $i . "\n";
        $i++;
    }
    echo "End of loop";
    end:
    echo "End of goto";
}

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
<?php 
//function have tow type 
// bilt-in function and user-defined function
// bilt-in function are predefined function in php
// user-defined function are function that we create


// super global variable
// $_SERVER is a super global variable which contains information about headers, paths, and script locations.
// $_GET is a super global variable which is used to collect or receive data after submitting an HTML form.
// $_POST to store data in database after submitting an HTML form with method="post".
// $_DELETE to delete data in database after submitting an HTML form with method="delete".
// $_PUT to update data in database after submitting an HTML form with method="put".
// $_FILES to upload files after submitting an HTML form with method="post".
// $_COOKIE to store data in cookie.
// $_SESSION to know about user session.
// $_ENV to know about user environment.
// $_REQUEST to know about user request.


?>
</body>

</html>