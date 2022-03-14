<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>
<body>
<?php include 'includes/header.php';?>
<hr/>
<h1 style="color: teal">User Defined Functions</h1>

<?php

//defining function

function wrtv()
{

    echo '<p style ="color:teal">'.strtoupper("Heheheh").'</p>';

}

wrtv();

echo '<hr>';
wrtv();

echo '<hr>';

//PASS BY VALUE

function add($num1,$num2)
{

    $sum = $num1 + $num2;
    echo '<p style ="color:teal"> The Sum of '.$num1.' and '.$num2.' is : '.$sum.'</p>';

}

//PASS BY REFERENCE
function change(&$num)
{
$num = $num + 10;

}

//re

function returnf($num1,$num2)
{
$prod = $num1*$num2;

return $prod;

}

$n = 500;
add(10,30);
add(20,$n);
add(20,"20");
echo '<hr/>';

change($n);
echo $n;
echo '<hr/>';

$rr = returnf(10,20);
echo $rr . '<hr/>';



?>

<?php require 'includes/footer.php';?>
