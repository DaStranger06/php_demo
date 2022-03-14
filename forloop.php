<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>
<?php 
$title = "for Loop";

include 'includes/header.php';?>
<hr/>
<h1>For Loop Statements</h1>
    
<?php

for($count=0; $count <= 10; $count++)
{

    echo '<p style = "color:teal"> Hahahah</p>';

}

for($count=0; $count <= 10; $count++)
{
    echo '<p style = "color:teal">'.$count.'</p>';

}



?>
    <?php require 'includes/footer.php';?>
    
</body>
</html>