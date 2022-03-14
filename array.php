
<body>
<?php 
$title = "Array";

include 'includes/header.php';?>
<hr/>
<h1>Array</h1>

<?php
//variable
$numb = 3;

//araay
//only one datatype
$num = array(1,2,3,4,5,6,23,98,320,0223,3,3,3,44,4,3,3);

echo '<h3 style = "color:teal">'.$num[3].'</h3>';

$size = count($num);
echo "<p>The Size is : $size </p>";

for($ct =0; $ct < $size; $ct++)
{
    echo '<p>'.$num[$ct].'</p>';
}

?>
    <?php require 'includes/footer.php';?>




