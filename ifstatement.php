<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
<?php include 'includes/header.php';?>
<hr/>
<?php



echo "<h2> If Statement</h2>";

$grade = 20;

if($grade >= 50)
{

    echo '<h5 style="color:green">Passed</h5>';
}
else
{
    echo '<h5 style="color:teal">Failed</h5>';
   

}



?>

<?php require 'includes/footer.php';?>
