<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String manipulation</title>
</head>
<body>
<?php include 'includes/header.php';?>
<hr/>
<h1 style="color: teal">Array</h1>

<?php

$s1 = " I am Groot. ";
$s2 = "No, I am";
$s3 = "putin tin tin tun";
// echos
echo $s1, $s2;
echo '<h2 style="color: teal">'.$s1.$s2.'</h2>';
echo'<br/>';

echo '<h2 style="color: teal">'.$s1,$s2 .'</h2>';
echo'<br/>';

echo '<h2 style="color: teal">'. $s1. "haha" .$s2.'</h2>';
echo'<br/>';

echo '<h2 style="color: teal">'.$s1." haha ".$s2.'</h2>';


echo "$s1 $s2";
echo'<br/>';


echo'concatinate <br/>';
echo'<br/>';


echo $s1." hahaha ". $s2;
echo " hahaha ". $s2;

echo'<br/>';

echo 'UpperCasing '.ucfirst($s3).'<br/>';
echo'<br/>';


echo ucfirst($s3);
echo'<br/>';

echo '<h3 style ="color:teal">'.ucfirst($s3).'</h3>';
echo '<h3 style ="color:teal"> Uppercase First Letter : '.ucfirst($s3).'</h3>';
echo '<h3 style ="color:teal"> Uppercase First Word : '.ucwords($s3).'</h3>';
echo '<h3 style ="color:teal"> Uppercase : '.strtoupper($s3).'</h3>';
echo "Lower Case :".strtolower(" HJBSDCKBCDSK ").'<hr/>';
echo '<h3 style ="color:teal"> Repeat String : '.str_repeat('n',10).'</h3>';
echo'<hr/>';
echo '<h3 style ="color:teal"> Repeat String : '.str_repeat($s3,10).'</h3>';
echo '<hr/>';
echo '<h3 style ="color:teal"> Repeat String : '.strtoupper( str_repeat('v',10)).'</h3>';
echo 'SubString : '.substr($s1,3,10).'<hr/>';
echo "SubString :" .substr($s1,3,10).'<hr/>';
echo "SubString : .substr($s1,3,10)";
echo '<hr/>';

echo '<h3 style ="color:teal"> Get String : '.strpos($s3,'n').'</h3>';
echo'<hr/>';
echo'Find Character "R": ' .strchr($s3,'R').'<br/>';
echo'Find Character "p": ' .strchr($s3,'p').'<br/>';
echo'Find Character "n": ' .strchr($s3,'n').'<br/>';

echo '<hr/>';
echo 'Find Length of String ' .strlen($s2).'<br/>';

echo '<hr/>';

echo 'Replace "'.str_replace("put","sss",$s3);

echo '<hr/>';




?>
    <?php require 'includes/footer.php';?>

