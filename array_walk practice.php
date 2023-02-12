<?php
echo '<br /><b><u>From The Book</u></b><br />';
?>

<?php
$printRow = function ($value, $key)
{
 print("<tr><td>{$key}</td><td>{$value}</td></tr>\n");
 };

$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");

echo "<table border=1>";

array_walk($person, $printRow);

echo "</table>", '<br /><br />';
?>

<?php
function printRow($value, $key, $color)
{
 echo "<tr>\n<td bgcolor=\"{$color}\">{$value}</td>";
 echo "<td bgcolor=\"{$color}\">{$key}</td>\n</tr>\n";
}

$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");

echo "<table border=\"1\">";

array_walk($person, "printRow", "lightblue");
echo "</table>", '<br /><br />';
?>

<?php
$extraData = array('border' => 2, 'color' => "red");
$baseArray = array("Ford", "Chrysler", "Volkswagen", "Honda", "Toyota");

array_walk($baseArray, "walkFunction", $extraData);

function walkFunction($item, $index, $data)
{
 echo "{$item} <- item, then border: {$data['border']}";
 echo " color->{$data['color']}<br /><br />";
}
?>


<?php
echo '<br /><b><u>My Examples</u></b><br />';
?>


<?php
$printRow = function ($value, $key)
{
 print("<tr><td>{$key}</td><td>{$value}</td></tr>\n");
 };
 
$aboutme = array('favcolor' => "orange", 'age' => 37, 'favfood' => "ramen");

echo "<table border=1>";

array_walk($aboutme, $printRow);

echo "</table>", '<br /><br />';
?>

<?php
function myRow($value, $key, $color)
{
 echo "<tr>\n<td bgcolor=\"{$color}\">{$value}</td>";
 echo "<td bgcolor=\"{$color}\">{$key}</td>\n</tr>\n";
}

$aboutme = array('favcolor' => "orange", 'age' => 37, 'favfood' => "ramen");

echo "<table border=\"1\">";

array_walk($aboutme, "printRow", "orange");
echo "</table>", '<br /><br />';
?>

<?php
$somedesign = array('someflare' => "flare", 'somecolor' => "orange");
$somedata = array("Amazon", "Tesla", "Microsoft", "Google", "Facebook");

array_walk($somedata, "practiceFunction", $somedesign);

function practiceFunction($techcompany, $index, $data){
	echo "{$techcompany} <- techcompany, then someflare: {$data['someflare']}";
	echo " somecolor->{$data['somecolor']}<br /><br />";
}
?>

