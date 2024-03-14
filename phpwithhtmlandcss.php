<?php
$h3_color="red";
echo "<h1 style='color:green' >php with html</h1>";

?>

<?php

$name="Ayush Trivedi";

echo "<h1 style='color:blue' >My name is ".$name."</h1>";

?>

<h1 style='color:red'><?php echo $name?></h1>

<h2 style='color:red'>My name is <?php echo $name?>, i am practining PHP.</h2>


<h3 style='color:<?php echo $h3_color?>'><?php echo "Hello world"; ?></h3>

