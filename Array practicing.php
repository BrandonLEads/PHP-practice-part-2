<!DOCTYPE html>
<html>
<body>

<?php
echo '<br /><b><u>From The Book</u></b><br />';
?>


<?php
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");

$removed = array_splice($subjects, 2, 3);
?>

<?php
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");

$removed = array_splice($subjects, 2);
?>

<?php
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");

array_splice($subjects, 2);
?>

<?php
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");

$new = array("law", "business", "IS");
array_splice($subjects, 4, 3, $new);
?>

<?php
$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");

$new = array("law", "business", "IS");
array_splice($subjects, 3, 4, $new);
?>


<?php
$subjects = array("physics", "chem", "math");
$new = array("law", "business");
array_splice($subjects, 2, 0, $new);
?>

<?php
$capitals = array(
 'USA' => "Washington",
 'Great Britain' => "London",
 'New Zealand' => "Wellington",
 'Australia' => "Canberra",
 'Italy' => "Rome",
 'Canada' => "Ottawa"
);

$downUnder = array_splice($capitals, 2, 2); // remove New Zealand and Australia
$france = array('France' => "Paris");

array_splice($capitals, 1, 0, $france); // insert France between USA and GB

?>

<?php
$person = array('name' => "Fred", 'age' => 35, 'wife' => "Betty");
?>

<?php
$name = "Fred";
$age = 35;
$wife = "Betty";
?>

<?php
$person = array('name' => "Fred", 'age' => 35, 'wife' => "Betty");

extract($person);
?>

<?php
$shape = "round";
$array = array('cover' => "bird", 'shape' => "rectangular");

extract($array, EXTR_PREFIX_ALL, "book");
echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}", '<br /><br />';

?>

<?php
$color = "indigo";
$shape = "curvy";
$floppy = "none";

$a = compact("color", "shape", "floppy");
// or
$names = array("color", "shape", "floppy");
$a = compact($names);

?>

<?php
$addresses = array("spam@cyberpromo.net", "abuse@example.com");

foreach ($addresses as $value) {
 echo "Processing {$value}\n", '<br /><br />';
}
?>

<?php
$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");

foreach ($person as $key => $value) {
 echo "Fred's {$key} is {$value}\n", '<br /><br />';
}
?>


<?php
echo '<br /><b><u>My Examples</u></b><br />';
?>

 



<?php
$fruits = array("apple", "oranges", "pineapple", "banana", "kiwi", "lemon", "lime");

$removed = array_splice($fruits, 2, 3);
?>


<?php
$fruits = array("apple", "oranges", "pineapple", "banana", "kiwi", "lemon", "lime");

$removed = array_splice($fruits, 2);
?>


<?php
$fruits = array("apple", "oranges", "pineapple", "banana", "kiwi", "lemon", "lime");

array_splice($fruits, 2);
?>

<?php
$fruits = array("apple", "oranges", "pineapple", "banana", "kiwi", "lemon", "lime");

$new = array("peaches", "mango", "grapes");
array_splice($fruits, 4, 3, $new);
?>

<?php
$fruits = array("apple", "oranges", "pineapple", "banana", "kiwi", "lemon", "lime");

$new = array("peaches", "mango", "grapes");
array_splice($fruits, 3, 4, $new);
?>

<?php
$fruits = array("apple", "oranges", "pineapple", "banana", "kiwi", "lemon", "lime");

$new = array("peaches", "mango", "grapes");
array_splice($fruits, 3, 4, $new);
?>

<?php
$fruits = array("apple", "oranges", "pineapple");
$new = array("peaches", "mango");
array_splice($fruits, 2, 0, $new);
?>

<?php
$foods = array(
 'USA' => "fried chicken",
 'Japan' => "ramen",
 'China' => "char siu",
 'Australia' => "meat pie",
 'Italy' => "gelato",
 'Germany' => "pork knuckle"
);

$newfavs = array_splice($foods, 4, 3); 
$france = array('France' => "creme brulee");

array_splice($capitals, 1, 0, $france);
?>

<?php
$aboutme = array('favcolor' => "orange", 'age' => 37, 'favfood' => "ramen");
?>

<?php
$favcolor = "orange";
$age = 37;
$favfood = "ramen";
?>


<?php
$aboutme = array('favcolor' => "orange", 'age' => 37, 'favfood' => "ramen");

extract($aboutme);
?>


<?php
$airline = "Delta";
$array = array('country' => "Germany", 'time' => "two weeks");

extract($array, EXTR_PREFIX_ALL, "vacation");
echo "Country: {$vacation_country}, Time: {$vacation_time}, Airline: {$airline}";
?>

<?php
$noodles = "ramen";
$texture = "firm";
$flavor = "creamy";

$a = compact("ramen", "firm", "creamy");
// or
//$discription = array("ramen", "firm", "creamy");
//$a = compact($discription);
?>

<?php
$testurls = array("dontknow@bogus.net", "test@mytest.com");

foreach ($testurls as $value) {
 echo "Processing {$value}\n", '<br /><br />';
}
?>

<?php
$aboutme = array('favcolor' => "orange", 'age' => 37, 'favfood' => "ramen");

foreach ($aboutme as $key => $value) {
 echo "Brandon's {$key} is {$value}\n", '<br /><br />';
}
?>







</body>
</html>