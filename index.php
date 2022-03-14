<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
</head>
<body>

<?php

$title = "index";
include 'includes/header.php';?>
    <h1>hehehe</h1>
<!-- ctrl +k+c for html-->
<?php
// /* */
    echo 'hahaha';
    echo'<br/>';
    echo'boom boom';
    echo'<br/>';
   
  
  $name = 'Sazzad Hossain';
  $ID = 'C1910.64';
  $Sec = "BM";

  echo $name;
 echo '<h1> My Name is: '.$name.'</h1>';
 echo'<h3>My ID is: '.$ID. '</h3>';
 echo'<h5>My Section is: '.$Sec.'</h5>';

 echo "<h1> My Name is: $name</h1>";
?>
   <button type="button" class="btn btn-dark">Click Here</button>
   <button type="button" class="btn btn-success">Click Here</button>

   
  <?php require 'includes/footer.php';?>
    
