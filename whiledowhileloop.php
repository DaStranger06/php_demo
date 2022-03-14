

<?php include 'includes/header.php';?>
<hr/>
    <h1>While loop</h1>
    <?php
  $grade =0;
  while($grade < 10)
  {
    echo '<p style ="color:teal" >It is less than 10</p>';
    $grade ++;
  }

  echo '<p style ="color:blue" >Exited</p>';

    ?>
    <h1>Do-While loop</h1>
<!-- Post Condition Loop -->
    
<?php
$grade =0;
do
{
    echo '<p style ="color:teal" >It is a do-while loop</p>';
    $grade++;
}
while($grade<10);

echo '<p style ="color:blue" >Exited</p>';

?>

<?php require 'includes/footer.php';?>
