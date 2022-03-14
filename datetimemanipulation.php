
<?php include 'includes/header.php';?>
<hr/>
<h1 style="color: teal">Date & Time Manipulation</h1>

    
<?php
     
     $dtnow = getdate();
 echo "Today's Date:";
 echo $dtnow['mday'].'<br/>';
 echo $dtnow['mon'].'<br/>';
 echo $dtnow['year'].'<br/>';

 echo '<p style = color:teal>Today is:'.$dtnow['mday'].'/'.$dtnow['mon'].'/'.$dtnow['year'].'</p>' ; 
 echo '<hr/>';
 echo "Time :" .time();
 echo '<hr/>';


 print'Date :'.date("m/d/y G.i:s<br/>", time()).'<br/>';
 print "Todday is ";
 print date("j of F Y, \a\\t g.i a",time());


?>

<?php require 'includes/footer.php';?>
