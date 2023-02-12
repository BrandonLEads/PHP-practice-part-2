<?php
echo '<br /><b><u>From The Book</u></b><br />';
?>

<?php
$moana = new Person;
?>

<?php
$object = new Person("Sina", 35);
?>

<?php
$class = "Person";
$object = new $class;
 is equivalent to
$object = new Person;
?>

<?php
$account = new Account;
$object = "account";
${$object}->init(50000, 1.10); // same as $account->init
?>

<?php
echo "Moana is {$moana->age} years old.\n"; // property access
$moana->birthday(); // method call
$moana->setAge(21); // method call with arguments
?>

<?php
$moana

$clan = $moana->family("extended"); 
?>

<?php
$moana = 37;

$prop = 'age';
echo $moana->$prop;
?>

<?php
HTML::p("Hello, world");
?>

<?php
$f = new Person("Pua", 75);

$b = $f; // $b and $f point at same object
$b->setName("Hei Hei");

printf("%s and %s are best friends.\n", $b->getName(), $f->getName());
?>

<?php
$f = new Person("Pua", 35);

$b = clone $f; // make a copy
$b->setName("Hei Hei");// change the copy

printf("%s and %s are best friends.\n", $b->getName(), $f->getName());
?>





<?php
echo '<br /><b><u>My Examples</u></b><br />';
?>

<?php
class Car{
}
$Lamborghini = new Car();
?>

<?php
class House{
}
$brick = new House("blue shutters", "lancetwindows");
?>

<?php
class Boat{
}
$class = "Boat";
$speedboat = new $class();
// is equivalent to
$speedboat = new Boat();
?>

<?php
$money= new Money;
$money = "money";
${$money}->init(68000, 5.14);
?>

<?php
echo "Toyota is {$Toyota->age} years old.\n"; 
$moana->year(); 
$moana->setAge(5); 
?>

<?php
$clan = $moana->family("extended"); // not sure what to do here
?>

<?php
$prop = 'display';
echo $samsung->$prop;
?>


<?php
HTML::p("Hi, I am coding here");
?>

<?php
$f = new Person("Pua", 75);

$b = $f; 
$b->setName("Brandon");

printf("%s and %s are best friends.\n", $b->getName(), $f->getName());
?>

<?php
$f = new Person("Austin", 21);

$b = clone $f; 

$b->setName("Brandon");

printf("%s and %s are best friends.\n", $b->getName(), $f->getName());
?>







