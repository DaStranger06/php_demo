<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
<?php include 'includes/header.php';?>
<hr/>
<h1>Switch Statements</h1>
<?php

$grad = 'd';

switch($grad)
{
    case 'A':
        echo '<h3 style ="color:teal"> You are a Superstar </h3>';
        break;
    case'B':
        echo '<h3 style = "color:blue">Not Good</h3>';
        break;
    default:
        echo '<h4 style = "color:red">Failed</h4>';
        break;

}          


?>    

<?php require 'includes/footer.php';?>