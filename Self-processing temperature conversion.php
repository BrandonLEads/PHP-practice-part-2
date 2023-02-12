<?php
echo '<br /><b><u>From The Book</u></b><br />';
?>

<html>
<head><title>Temperature Conversion</title></head>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
 Fahrenheit temperature:
 <input type="text" name="fahrenheit" /><br />
 <input type="submit" value="Convert to Celsius!" />
 </form>

<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $fahrenheit = $_POST['fahrenheit'];
 $celsius = ($fahrenheit - 32) * 5 / 9;
printf("%.2fF is %.2fC", $fahrenheit, $celsius);
}
else {
 die("This script only works with GET and POST requests.");
} 
?>

</body>
</html>

<?php
echo '<br /><b><u>My Examples</u></b><br />';
?>

<html>
<head><title>Temperature Conversion</title></head>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
 Celsius temperature:
 <input type="text" name="celsius" /><br />
 <input type="submit" value="Convert to Fahrenheit!" />
 </form>

<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $celsius = $_POST['celsius'];
 $farenheight = ($celsius + 32) * 9 / 5;
printf($celsius . " celsius = " . $farenheight . " fahrenheit");
}
else {
 die("This script only works with GET and POST requests.");
} 
?>

</body>
</html>
