<?php
// CLI 'php test.php' will launch the code in your terminal

//this is a single line commentary

$name = "Arthuro";
echo "Hello world";
echo "\n";
echo("Hello woorld!");
echo $name;

/* this is a multiline
commentary */
echo '\n'; //does not work

echo "\n";
echo "Semicolons are mandatory!";

/* this is a closing php tag :
?>
You can avoid it to prevent unwanted output from your script
*/

?>

comments does not work outside php tags as it is considered an output


 So you can also write output outside of php tags ! Be careful when writing scripts not to add
 spaces or anything after the closing tag that you don't want to be part of the output!

 Another way to avoid any problem is not to close the php tag !
