<?php
//variable
$var = "Hello ";
$var2 = "World";
echo $var . " " . $var2;

echo "<br>";
//arrays
$numbers = array(15, 45, 22, 34, 65);
//$numbers = [15, 45, 22, 34, 65];
print_r($numbers);

echo "<br>";

echo $numbers[1];

$ages = array(
    "John" => 20,
    "Mary" => 27,
    "Bob" => 15
);

echo "<br>";

echo $ages["Mary"];
echo "<br>";
echo count($ages);
echo "<br>";
array_pop($ages);
print_r($ages);
echo "<br>";
array_shift($ages);
print_r($ages);
echo "<br>";

//loops
//for
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
echo "<br>";
//while
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}
echo "<br>";
//foreach
foreach ($numbers as $number) {
    echo $number;
    echo "<br>";
}
echo "<br>";
foreach ($ages as $key => $age) {
    echo $key . " is " . $age . ' years old <br>';
}
//functions
echo "<br>";

function greet()
{
    echo "Hello World";
}
greet();
echo "<br>";
function greetUser($name)
{
    echo "Hello " . $name;
}
greetUser('abu');
echo "<br>";
function greetDefaultUser($name = "juhu")
{
    echo strtoupper("Hello " . $name);
}
greetDefaultUser();#
echo "<br>";
//if-else
$num = 10;

if ($num == 10) {
    echo "Number is 10";
} elseif ($num != 10) {
    echo "Number is not 10";
} elseif ($num > 10) {
    echo "Number is bigger than 10";
} elseif ($num < 10) {
    echo "Number is smaller than 10";
} else {
    echo "juhu";
}


?>