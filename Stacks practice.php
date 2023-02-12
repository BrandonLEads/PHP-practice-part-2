<?php
echo '<br /><b><u>From The Book</u></b><br />';
?>

<?php

$callTrace = array();

function enterFunction($name)
{
 global $callTrace;
 $callTrace[] = $name;

 echo "Entering {$name} (stack is now: " . join(' -> ', $callTrace) . ")<br />";
}

function exitFunction()
{
 echo "Exiting<br />";

 global $callTrace;
 array_pop($callTrace);
}

function first()
{
 enterFunction("first");
 exitFunction();
}

function second()
{
 enterFunction("second");
 first();
 exitFunction();
}

function third()
{
 enterFunction("third");
 second();
 first();
 exitFunction();
}

first();
third();
?>

<?php
echo '<br /><b><u>My Examples</u></b><br />';
?>

<?php

$callingallfunctions = array();

function startingFunction($myprogram)
{
 global $callingallfunctions;
 $callingallfunctions[] = $myprogram;

 echo "Firing up {$myprogram} (This is stack: " . join(' -> ', $callingallfunctions) . ")<br />";
}

function endingFunction()
{
 echo "On to the next!<br />";

 global $callingallfunctions;
 array_pop($callingallfunctions);
}

function numberone()
{
 startingFunction("numberone");
 endingFunction();
}

function numbertwo()
{
 startingFunction("numbertwo");
 numberone();
 endingFunction();
}

function numberthree()
{
 startingFunction("numberthree");
 numbertwo();
 numberone();
 endingFunction();
}

numberone();
numberthree();
?>

