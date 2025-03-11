<?php
// CLI 'php test.php' will launch the code in your terminal

//this is a single line commentary

$name = "Arthuro";
echo "Hello world";
echo "\n";
echo("Hello woorld!");
echo $name;
echo strlen($name);

/* this is a multiline
commentary */
echo '\n'; //does not work

echo "\n";
echo "Semicolons are mandatory!";
echo "\n";
$varname = "Teaching"; //this is a variable

$$varname = "lesson 1"; //this is a variable variable
echo $varname;
echo "\n";
echo $Teaching;

$last_year = 2024;
echo "last year is $last_year";
echo "\n";
echo "New year is {($last_year + 1)}";
echo"\n";

$try_this = <<<TRYITOUT
{json:
  {blabla: coucou;
  bloublou: $last_year + 1;
}
}
TRYITOUT;

echo $try_this;
echo "\n";

$first_array = array(2, 3, 6, 25);
$second_array = ["coucou", "second_string"=>"bonjour", "ciao", "ohayo?"];

echo($first_array[0]);
echo($second_array[0]);
echo($second_array[1]);

echo($second_array["second_string"]);
echo($second_array[2]);

echo count($second_array);
echo "\n";
for ($i=0; $i<count($first_array); $i+=1) {
  echo "{$first_array[$i]} \n";
}

foreach ($second_array as $salutation) {
  echo $salutation . "\n";
}

foreach ($second_array as $index=>$salutation) {
  echo "{$index}: {$salutation}" . "\n";
}

function print_my_first_function() {
  echo 'This is my first function';
  echo "\n";
}

print_my_first_function();

//variable type (without OOP class consideration) :
// bool, int, float, string, array, object, callable
// (callable means a function)
function calculate_tax(float $price, float $tva) { //int and float in case you want to specidy variable type
  return $price * $tva;
}

echo calculate_tax(60, 0.20);
echo "\n";
// echo calculate_tax(tax:0.20, price:120);
echo "\n";
echo calculate_tax($tax=0.20, $price=120);

// i++ & i+=1 sont différents, à checker
/* this is a closing php tag :
?>
You can avoid it to prevent unwanted output from your script
*/

/*
************* examine une condition puis exécute l'action
 while (boolean_condition) {

 }

************* exécute l'action une première fois puis examine la condition avant de réxécuter l'action
 do {
 } while (boolean_condition)
*/
?>

comments does not work outside php tags as it is considered an output


 So you can also write output outside of php tags ! Be careful when writing scripts not to add
 spaces or anything after the closing tag that you don't want to be part of the output!

 Another way to avoid any problem is not to close the php tag !
